<?php

declare(strict_types=1);



/*
 * This file is part of ContaoSplideBundle.
 *
 * (c) Kaan Keskin
 *
 * @license LGPL-3.0-or-later
 */

namespace External\ContaoSplideBundle\Utils;

use Contao\CoreBundle\Framework\ContaoFramework;
use Contao\LayoutModel;
use Contao\Model;
use Contao\PageModel;
use Contao\Template;
use Symfony\Component\HttpFoundation\RequestStack;

class SplideRenderer {

    /**
     * @var RequestStack
     */
    private $requestStack;

    /**
     * @var ContaoFramework
     */
    private $framework;

    public function __construct(RequestStack $requestStack, ContaoFramework $framework)
    {
        $this->requestStack = $requestStack;
        $this->framework = $framework;
    }

    public function addTemplateParams(Template $template, Model $model, $params = []) {
        error_log(date("[Y-m-d H:i:s]") . " [LOG] addTemplateParams()\n", 3, "../logs/debug" . date("Y-m-d") . ".log");
        
        //type
        $params["type"] = $model->splide_type;

        //perPage
        if($model->splide_items && is_numeric($model->splide_items)) {
            $params["perPage"] = (int) $model->splide_items;
        }
        
        $template->sliderId = $model->id;
        $template->params = $params;

        //error_log(date("[Y-m-d H:i:s]") . " [LOG] ".print_r($template, true)."\n", 3, "../logs/debug" . date("Y-m-d") . ".log");
    }

    public function addAssets() {
        // check if the scripts should be combined
        $combine = '';

        // check if the page has a layout
        if (null !== ($pageModel = $this->getPageModel()) && $pageModel->layout) {
            // get the current layout-model of the page
            if (null !== ($layout = $this->framework->getAdapter(LayoutModel::class)->findById((int) $pageModel->layout)) && $layout->add_splide_slider_scripts) {
                $combine = '|static';
            }
        }

        // add CSS and JS
        $GLOBALS['TL_CSS']['splide'] = 'bundles/contaosplide/vendor/css/splide.min.css'.$combine;
        $GLOBALS['TL_JAVASCRIPT']['splide'] = 'bundles/contaosplide/vendor/js/splide.min.js'.$combine;
        $GLOBALS['TL_JAVASCRIPT']['splide-init'] = 'bundles/contaosplide/contao-splide.js'.$combine;
    }

    protected function getPageModel(): ?PageModel
    {
        $request = $this->requestStack->getCurrentRequest();

        if (null === $request || !$request->attributes->has('pageModel')) {
            return null;
        }

        $pageModel = $request->attributes->get('pageModel');

        if ($pageModel instanceof PageModel) {
            return $pageModel;
        }

        if (
            isset($GLOBALS['objPage'])
            && $GLOBALS['objPage'] instanceof PageModel
            && (int) $GLOBALS['objPage']->id === (int) $pageModel
        ) {
            return $GLOBALS['objPage'];
        }

        $this->framework->initialize();

        return $this->framework->getAdapter(PageModel::class)->findByPk((int) $pageModel);
    }
}