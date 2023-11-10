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

class SplideSlideSeparator extends ContentElement {

    const TYPE = 'splide-slider-separator';
    const TEMPLATE = 'ce_splide_slider_separator';

    /**
     * Template.
     *
     * @var string
     */
    protected $strTemplate = SplideSlideSeparator::TEMPLATE;

    /**
     * Displays a wildcard in the back end.
     *
     * @return string
     */
    public function generate()
    {
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
        // Do something
    }

}