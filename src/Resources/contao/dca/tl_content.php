<?php

declare(strict_types=1);

/*
 * This file is part of ContaoSplideBundle.
 *
 * (c) Kaan Keskin
 *
 * @license LGPL-3.0-or-later
 */

use External\ContaoSplideBundle\Elements\SplideSlideSeparator;
use External\ContaoSplideBundle\Elements\SplideSlideStart;
use External\ContaoSplideBundle\Elements\SplideSlideStop;


$GLOBALS['TL_DCA']['tl_content']['palettes'][SplideSlideStart::TYPE] = '{type_legend},type;{splide_slider_legend},splide_type,splide_items;{template_legend:hide},customTpl;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID;{invisible_legend:hide},invisible,start,stop';
$GLOBALS['TL_DCA']['tl_content']['palettes'][SplideSlideStop::TYPE] = '{type_legend},type;{template_legend:hide},customTpl;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID;{invisible_legend:hide},invisible,start,stop';
$GLOBALS['TL_DCA']['tl_content']['palettes'][SplideSlideSeparator::TYPE] = '{type_legend},type;{template_legend:hide},customTpl;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID;{invisible_legend:hide},invisible,start,stop';

$GLOBALS['TL_DCA']['tl_content']['fields']['splide_type'] = [
    'label' => &$GLOBALS['TL_LANG']['tl_content']['splide_type'],
    'inputType' => 'select',
    'default' => 'slide',
    'options' => [
        'slide' => 'Slider',
        'loop' => 'Loop',
        'fade' => 'Fade',
    ],
    'eval' => array(
        'tl_class' => 'w50',
    ),
    'sql' => "varchar(16) NOT NULL default ''",
];

$GLOBALS['TL_DCA']['tl_content']['fields']['splide_items'] = [
    'label' => &$GLOBALS['TL_LANG']['tl_content']['splide_items'],
    'inputType' => 'text',
    'default' => '1',
    'eval' => array(
        'tl_class' => 'w50',
        'rgxp' => 'natural',
    ),
    'sql' => "varchar(12) NOT NULL default ''",
];