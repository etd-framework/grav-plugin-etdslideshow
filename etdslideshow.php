<?php
/**
 * @package      Grav plugin displaying a slideshow
 *
 * @version      0.1.0
 * @copyright    Copyright (C) 2018 ETD Solutions. All rights reserved.
 * @license      MIT
 * @author       ETD Solutions http://www.etd-solutions.com
 **/

namespace Grav\Plugin;

use Grav\Common\Plugin;
use RocketTheme\Toolbox\Event\Event;

/**
 * Class EtdslideshowPlugin
 * @package Grav\Plugin
 */
class EtdslideshowPlugin extends Plugin
{
    /**
     * @return array
     *
     * The getSubscribedEvents() gives the core a list of events
     *     that the plugin wants to listen to. The key of each
     *     array section is the event that the plugin listens to
     *     and the value (in the form of an array) contains the
     *     callable (or function) as well as the priority. The
     *     higher the number the higher the priority.
     */
    public static function getSubscribedEvents()
    {
        return [
            'onPluginsInitialized' => ['onPluginsInitialized', 0]
        ];
    }

    /**
     * Initialize the plugin
     */
    public function onPluginsInitialized()
    {
        // Don't proceed if we are in the admin plugin
        if ($this->isAdmin()) {
            return;
        }

        // Enable the main event we are interested in
        $this->enable([
            'onShortcodeHandlers' => ['onShortcodeHandlers', 0],
            'onTwigTemplatePaths' => ['onTwigTemplatePaths', 0]
        ]);
    }

    public function onShortcodeHandlers()
    {
        if ($this->config->get('plugins.etdslideshow.loadjquery', 1)) {
            $this->grav['assets']->addJs('//code.jquery.com/jquery-3.3.1.slim.min.js', null, true, null, 'bottom');
            $this->grav['assets']->addJs('//cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js', null, true, null, 'bottom');
        }

        if ($this->config->get('plugins.etdslideshow.loadtwtbsjs', 1)) {
            $this->grav['assets']->addJs('plugin://etdslideshow/js/etdslideshow_twtbs.js', null, true, null, 'bottom');
        }

        if ($this->config->get('plugins.etdslideshow.loadtwtbscss', 1)) {
            $this->grav['assets']->addCss('plugin://etdslideshow/css/etdslideshow_twtbs.css');
        }

        $this->grav['shortcode']->registerAllShortcodes(__DIR__ . '/shortcodes');
    }

    public function onTwigTemplatePaths()
    {
        $this->grav['twig']->twig_paths[] = __DIR__ . '/templates';
    }
}