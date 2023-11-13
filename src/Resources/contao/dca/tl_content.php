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


$GLOBALS['TL_DCA']['tl_content']['palettes'][SplideSlideStart::TYPE] = '{type_legend},type;{splide_slider_legend},splide_type,splide_items,splide_interval,splide_speed,splide_autoplay,splide_arrows,splide_pagination,splide_drag,splide_keyboard;{template_legend:hide},customTpl;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID;{invisible_legend:hide},invisible,start,stop';
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

$GLOBALS['TL_DCA']['tl_content']['fields']['splide_interval'] = [
    'label' => &$GLOBALS['TL_LANG']['tl_content']['splide_interval'],
    'inputType' => 'text',
    'default' => '5000',
    'eval' => array(
        'tl_class' => 'w50',
        'rgxp' => 'natural',
    ),
    'sql' => "int(10) unsigned NOT NULL default 5000",
];

$GLOBALS['TL_DCA']['tl_content']['fields']['splide_speed'] = [
    'label' => &$GLOBALS['TL_LANG']['tl_content']['splide_speed'],
    'inputType' => 'text',
    'default' => 400,
    'eval' => array(
        'tl_class' => 'w50',
        'rgxp' => 'natural',
    ),
    'sql' => "int(10) unsigned NOT NULL default 400",
];

$GLOBALS['TL_DCA']['tl_content']['fields']['splide_autoplay'] = [
    'label' => &$GLOBALS['TL_LANG']['tl_content']['splide_autoplay'],
    'exclude' => true,
    'inputType' => 'checkbox',
    'eval' => ['tl_class' => 'w50'],
    'sql' => "char(1) NOT NULL default ''",
];

$GLOBALS['TL_DCA']['tl_content']['fields']['splide_arrows'] = [
    'label' => &$GLOBALS['TL_LANG']['tl_content']['splide_arrows'],
    'exclude' => true,
    'inputType' => 'checkbox',
    'eval' => ['tl_class' => 'w50'],
    'sql' => "char(1) NOT NULL default ''",
];

$GLOBALS['TL_DCA']['tl_content']['fields']['splide_pagination'] = [
    'label' => &$GLOBALS['TL_LANG']['tl_content']['splide_pagination'],
    'exclude' => true,
    'inputType' => 'checkbox',
    'eval' => ['tl_class' => 'w50'],
    'sql' => "char(1) NOT NULL default ''",
];

$GLOBALS['TL_DCA']['tl_content']['fields']['splide_drag'] = [
    'label' => &$GLOBALS['TL_LANG']['tl_content']['splide_drag'],
    'exclude' => true,
    'inputType' => 'checkbox',
    'eval' => ['tl_class' => 'w50'],
    'sql' => "char(1) NOT NULL default ''",
];

$GLOBALS['TL_DCA']['tl_content']['fields']['splide_keyboard'] = [
    'label' => &$GLOBALS['TL_LANG']['tl_content']['splide_keyboard'],
    'exclude' => true,
    'inputType' => 'checkbox',
    'eval' => ['tl_class' => 'w50'],
    'sql' => "char(1) NOT NULL default ''",
];