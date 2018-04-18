<?php
/**
 * @package      Grav plugin displaying a slideshow
 *
 * @version      0.1.0
 * @copyright    Copyright (C) 2018 ETD Solutions. All rights reserved.
 * @license      MIT
 * @author       ETD Solutions http://www.etd-solutions.com
 **/

namespace Grav\Plugin\Shortcodes;

use Thunder\Shortcode\Shortcode\ShortcodeInterface;

class EtdslideshowShortcode extends Shortcode
{
    public function init()
    {
        $this->shortcode->getHandlers()->add('etdslideshow', function(ShortcodeInterface $sc) {

            $hash    = $this->shortcode->getId($sc);
            $content = $sc->getContent();

            $output = $this->twig->processTemplate('partials/etdslideshow.twig', [
                'hash'            => $hash,
                'interval'        => $sc->getParameter('interval', 5000),
                'keyboard'        => $sc->getParameter('keyboard', true),
                'pause'           => $sc->getParameter('pause', 'hover'),
                'ride'            => $sc->getParameter('ride', false),
                'wrap'            => $sc->getParameter('wrap', true),
                'show_controls'   => $sc->getParameter('show_controls', false),
                'show_indicators' => $sc->getParameter('show_indicators', false),
                'items'           => $this->grav['page']->media()->images(),
                'content'         => $content
            ]);

            return $output;
        });
    }
}
