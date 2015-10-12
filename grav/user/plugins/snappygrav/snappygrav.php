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
        $route = $this->config->get('plugins.snappygrav.route');

        $params = $uri->params();
        $len = strlen($params);
        $pdf="";
        if($len > 0){
            $pdf = substr($params, -4);
        }
        if($pdf == ":pdf" ){
            $this->enable([
                'onCollectionProcessed' => ['onCollectionProcessed', 0]
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
        $uri_params = $uri->params();
        $uri_params = str_replace(':pdf', "", $uri_params);
        $uri_params = str_replace('/', "", $uri_params);
            
        foreach ($collection as $page) {

            $page_route = $page->route();
            $pieces = explode("/", $page_route);
            $len = count($pieces);
            $target = $pieces[$len-1];

            if($uri_params == $target){

                $page_title = $page->title();
                $page_serial = $page->date();
                $page_date = date("d-m-Y",$page_serial);
                $page_header_author = "";
                if(isset( $page->header()->author )) $page_header_author = $page->header()->author;
                $page_content = $page->content();

                $page_slug = $page->slug();

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

                $html = "<meta http-equiv='Content-Type' content='text/html; charset=UTF-8'><h2><center>". $page_title ."</center></h2><center><b>". $page_header_author ."</b></center><br/><center><b>". $page_date ."</b></center>".$page_content;
                header('Content-Type: application/pdf');
                header('Content-Disposition: attachment; filename="'.$page_slug.'.pdf"');
                echo $snappy->getOutputFromHtml($html);
            }
        }
    }
}
