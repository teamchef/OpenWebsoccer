<?php
/**
 * Filesource
 *
 * Embed a file as text from the same directory
 *
 * Based on "PageInject"
 * Original work licensed under MIT.
 */
namespace Grav\Plugin;
use Grav\Common\Grav;
use Grav\Common\Plugin;
use Grav\Common\Page\Page;
use RocketTheme\Toolbox\Event\Event;

class FilesourcePlugin extends Plugin
{
    /**
     * Return a list of subscribed events.
     *
     * @return array    The list of events of the plugin of the form
     *                      'name' => ['method_name', priority].
     */
    public static function getSubscribedEvents()
    {
        return [
            'onBuildPagesInitialized' => ['onBuildPagesInitialized', 0],
        ];
    }
    /**
     * Initialize configuration.
     */
    public function onBuildPagesInitialized()
    {
        if ($this->isAdmin()) {
            $this->active = false;
            return;
        }
        $this->enable([
            'onPageContentRaw' => ['onPageContentRaw', 0],
        ]);
    }
    /**
     * Add content after page content was read into the system.
     *
     * @param  Event  $event An event object, when `onPageContentRaw` is fired.
     */
    public function onPageContentRaw(Event $event)
    {
        /** @var Page $page */
        $page = $event['page'];
        $twig = $this->grav['twig'];
        $config = $this->mergeConfig($page);
        if ($config->get('enabled')) {
            // Get raw content and substitute all formulas by a unique token
            $raw = $page->getRawContent();
            // build an anonymous function to pass to `parseLinks()`
            $function = function ($matches) use (&$page, &$twig, &$config) {
                $search = $matches[0];
                $type = $matches[1];
                $filename = $matches[3] ?: $matches[2];
//                $template = $matches[4];

		$req_file = $page->path() . "/" . $filename;
		$replace_header = "<pre><code>";
		$replace_footer = "</code></pre>";
		$replace_content = file_get_contents($req_file);

		$replace = "$replace_header" . "$replace_content" . "$replace_footer";

                // do the replacement
                return $replace;
            };
            // set the parsed content back into as raw content
            $page->setRawContent($this->parseInjectLinks($raw, $function));
        }
    }
    protected function parseInjectLinks($content, $function)
    {
        $regex = '/\[plugin:(filesource)\]\(((.*)\?template=(.*)|(.*))\)/i';
        return preg_replace_callback($regex, $function, $content);
    }
}
