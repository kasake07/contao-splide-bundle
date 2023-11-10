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
use Contao\ContentModel;
use Contao\System;
use External\ContaoSplideBundle\Utils\SplideRenderer;

class SplideSlideStop extends ContentElement {

    const TYPE = 'splide-slider-stop';
    const TEMPLATE = 'ce_splide_slider_stop';

    /**
     * Template.
     *
     * @var string
     */
    protected $strTemplate = SplideSlideStop::TEMPLATE;

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
        // get start element to get config
        //$objContent = ContentModel::findById($this->id);
        error_log(date("[Y-m-d H:i:s]") . " [LOG] compile() ".$this->id."\n", 3, "../logs/debug" . date("Y-m-d") . ".log");
        $table = ContentModel::getTable();

        $objContent = ContentModel::findAll([
            'column' => ["$table.pid = ?", "$table.ptable = ?", "$table.sorting < ?", "$table.type = ?"],
            'value' =>  [$this->pid, $this->ptable, $this->sorting, SplideSlideStart::TYPE],
            'order' => "$table.sorting DESC",
            'limit' => 1,
            'return' => 'Model',
        ]);

        if($objContent !== null) {
            //SplideRenderer::addTemplateParams($this->Template);
            $splideRenderer = System::getContainer()->get('external_packages.contao_splide.renderer');
            $splideRenderer->addTemplateParams($this->Template, $objContent);
            $splideRenderer->addAssets();
        }
    }

}