<?php namespace Grav\Plugin;

use Grav\Common\Plugin;
use Grav\Common\Page\Page;
use Grav\Common\Data\Data;

class Read_LaterPlugin extends Plugin
{
    public static function getSubscriptedEvents()
    {
        return [
            'onPluginsInitialized' => ['onPluginsInitialized', 0]
        ];
    }

    public function onPluginsInitialized()
    {
        if ($this->isAdmin()) {
            $this->active = false;
            return;
        }

        $this->enable([
            'onTwigInitialized' => ['onTwigInitialized', 0]
        ]);
    }

    public function onTwigInitialized()
    {
        $this->grav['twig']->twig()->addFilter(
            new \Twig_SimpleFilter('read_later', [$this, 'readLaterFilter'], ['is_safe' => ['html']])
        );
    }

    public function readLaterFilter(Page $page, $params = array())
    {
        $this->mergePluginConfig($page, $params);

        $services = $this->config->get('services');

        $content = [];

        foreach ($services as $service => $service_data) {
            if (!array_key_exists($service, $services)) {
                continue;
            }

            $anchor = [
                'label'  => (isset($service_data['label'])  ? $service_data['label']  : $services[$service]['label']),
                'rel'    => (isset($service_data['rel'])    ? $service_data['rel']    : false),
                'target' => (isset($service_data['target']) ? $service_data['target'] : false),
                'class'  => (isset($service_data['class'])  ? $service_data['class']  : 'readlater ' . $service),
                'url'    => (isset($service_data['url'])    ? $service_data['url']    : $services[$service]['url']),
            ];

            $link = str_replace(['{title}', '{url}'], [urlencode($page->title()), urlencode($page->permalink())], $anchor['url']);

            $content[] = '<a class="' . $anchor['class'] . '" rel="' . $anchor['rel'] . '" target="' . $anchor['target'] . '" href="' . $link . '">' . $anchor['label'] . '</a>';
        }

        return implode($this->config->get('separator'), $content);
    }

    private function mergePluginConfig(Page $page, $params = [])
    {
        $this->config = new Data((array) $this->grav['config']->get('plugins.read_later'));

        if (isset($page->header()->read_later)) {
            if (is_array($page->header()->read_later)) {
                $this->config = new Data(array_replace_recursive($this->config->toArray(), $page->header()->read_later));
            } else {
                $this->config->set('enabled', $page->header()->read_later);
            }
        }

        $this->config = new Data(array_replace_recursive($this->config->toArray(), $params));
    }
}
