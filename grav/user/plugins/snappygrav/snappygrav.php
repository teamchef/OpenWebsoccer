<?php
namespace Grav\Plugin;

use Grav\Common\Plugin;
use RocketTheme\Toolbox\Event\Event;

use Grav\Common\Page\Page;
use Grav\Common\Page\Collection;
use Grav\Common\Uri;
use Grav\Common\Taxonomy;

use Knp\Snappy\Pdf;

class SnappyGravPlugin extends Plugin
{
    public static function getSubscribedEvents() {
        return [
            'onPluginsInitialized' => ['onPluginsInitialized', 0],
        ];
    }

    /**
     * Activate plugin if path matches to the configured one.
     */
    public function onPluginsInitialized()
    {
        if ($this->isAdmin()) {
            $this->active = false;
            return;
        }
        /** @var Uri $uri */
        $uri = $this->grav['uri'];
        $params = $uri->params(null, true);

        //Get pdf or completepdf
        if ((count($params) > 0) && (reset($params) == "pdf" || reset($params) == "completepdf")){
            $this->enable([
                'onCollectionProcessed' => ['onCollectionProcessed', 0],
                //Twig
                'onTwigSiteVariables' => ['onTwigSiteVariables', 0],
                'onTwigTemplatePaths' => ['onTwigTemplatePaths', 0],
            ]);
        }
    }

    /**
     * Create pagination object for the page.
     *
     * @param Event $event
     */
    public function onCollectionProcessed(Event $event)
    {
        /** @var Collection $collection */
        $collection = $event['collection'];
        foreach ($collection as $slug => $page) {
            $header = $page->header();
            if (isset($header->feed) && !empty($header->feed['skip'])) {
                $collection->remove($page);
            }
        }

        $uri = $this->grav['uri'];
        $uri_params = $uri->params(null, true);

        //Exit if we get there with empty array (eg no :pdf / :completepdf params)
        if (count($uri_params) == 0) {
            return;
        }

        $option = reset($uri_params);
        $slug = key($uri_params);
        $html = [];

        foreach ($collection as $page) {

            $content = [];
            $page_route = $page->route();
            $pieces = explode("/", $page_route);
            $len = count($pieces);
            $target = $pieces[$len-1];

            if($slug == $target || $option == "completepdf"){
                //Page variables
                $content['page_title'] = $page_title = $page->title();
                $page_serial = $page->date();
                $content['page_date'] = $page_date = date("d-m-Y",$page_serial);
                $page_header_author = "";
                if(isset( $page->header()->author )) $page_header_author = $page->header()->author;
                $content['page_header_author'] = $page_header_author;
                $content['page_content'] = $page_content = $page->content();
                $content['page_slug'] = $page_slug = $page->slug();

                //PDF
                $wk_path = $this->config->get('plugins.snappygrav.wk_path');
                if($wk_path=="") $wk_path = 'usr/bin/wkhtmltopdf-i386';

                // If the file does not exist displays an alert and exits the procedure
                if (!file_exists($wk_path)) {
                    $message = 'The file\n '.$wk_path.'\n does not exist!';
                    echo '<script type="text/javascript">alert("'.$message.'");</script>';
                    break;
                }
                $snappy = new Pdf($wk_path);

                // It takes some parameters from snappygrav.yaml file
                $grayscale = $this->config->get('plugins.snappygrav.grayscale');
                if($grayscale) $snappy->setOption('grayscale', $grayscale);

                $margin_bottom = $this->config->get('plugins.snappygrav.margin_bottom');
                if($margin_bottom) $snappy->setOption('margin-bottom', $margin_bottom);

                $margin_left = $this->config->get('plugins.snappygrav.margin_left');
                if($margin_left) $snappy->setOption('margin-left', $margin_left);

                $margin_right = $this->config->get('plugins.snappygrav.margin_right');
                if($margin_right) $snappy->setOption('margin-right', $margin_right);

                $margin_top = $this->config->get('plugins.snappygrav.margin_top');
                if($margin_top) $snappy->setOption('margin-top', $margin_top);

                $orientation = $this->config->get('plugins.snappygrav.orientation');
                if($orientation == "Portrait" || $orientation == "Landscape") {
                    $snappy->setOption('orientation', $orientation);
                }

                $page_size = $this->config->get('plugins.snappygrav.page_size');
                if($page_size) $snappy->setOption('page-size', $page_size);

                $hastitle = $this->config->get('plugins.snappygrav.title');
                if($hastitle) $snappy->setOption('title', $page_title);

                $zoom = $this->config->get('plugins.snappygrav.zoom');
                if($zoom) $snappy->setOption('zoom', $zoom);

                /** @var Twig $twig */
                $twig = $this->grav['twig'];
                $this->grav['twig']->twig_vars['snappygrav'] = $content;
                $template = "snappygrav.html.twig";

                $html[] = $twig->processTemplate($template);
            }
        }

        $filename = $option == "completepdf" ? parse_url($uri->base())['host'] : $page_slug;
        //Saves ie https problems
        header("Cache-Control: public");
        header("Content-Type: application/pdf");
        header('Pragma: private');
        header('Expires: 0');
        header('Content-Disposition: attachment; filename="'. $filename .'.pdf"');

        echo ($snappy->getOutputFromHtml($html));
    }

    /**
     * Handles template and specific CSS for PDF template
     */
    public function onTwigSiteVariables() {
        if ($this->config->get('plugins.snappygrav.built_in_css')) {
            $this->grav['assets']->add('plugin://snappygrav/assets/css/snappygrav.css');
        }
    }

    /**
     * Add current directory to Twig lookup paths.
     */
    public function onTwigTemplatePaths()
    {
      $this->grav['twig']->twig_paths[] = __DIR__ . '/templates';
    }
}
