<?php

declare(strict_types=1);



/*
 * This file is part of ContaoSplideBundle.
 *
 * (c) Kaan Keskin
 *
 * @license LGPL-3.0-or-later
 */

namespace External\ContaoSplideBundle\Elements;

use Contao\BackendTemplate;
use Contao\ContentElement;
use Contao\System;

class SplideSlideStart extends ContentElement {

    const TYPE = 'splide-slider-start';
    const TEMPLATE = 'ce_splide_slider_start';

    /**
     * Template.
     *
     * @var string
     */
    protected $strTemplate = SplideSlideStart::TEMPLATE;

    /**
     * Displays a wildcard in the back end.
     *
     * @return string
     */
    public function generate()
    {
        //error_log(date("[Y-m-d H:i:s]") . " [LOG] generate()\n", 3, "../logs/debug" . date("Y-m-d") . ".log");
        $request = System::getContainer()->get('request_stack')->getCurrentRequest();
        if ($request && System::getContainer()->get('contao.routing.scope_matcher')->isBackendRequest($request))
		{
			$this->strTemplate = 'be_wildcard';

			$this->Template = new BackendTemplate($this->strTemplate);
            return $this->Template->parse();
		}

        return parent::generate();
    }

    /**
     * Generates the content element.
     */
    protected function compile()
    {   
        //error_log(date("[Y-m-d H:i:s]") . " [LOG] compile()\n", 3, "../logs/debug" . date("Y-m-d") . ".log");

		// Slider configuration
		//$this->Template->config = $this->splide_type . ',' . $this->splide_items;

        //TODO: Add classes
	}

}