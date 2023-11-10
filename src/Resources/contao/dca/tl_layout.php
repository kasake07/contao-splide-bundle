<?php

declare(strict_types=1);



/*
 * This file is part of ContaoSplideBundle.
 *
 * (c) Kaan Keskin
 *
 * @license LGPL-3.0-or-later
 */

use Contao\CoreBundle\DataContainer\PaletteManipulator;

PaletteManipulator::create()
 ->addField('add_splide_slider_scripts', 'scripts', PaletteManipulator::POSITION_BEFORE)
 ->applyToPalette('default', 'tl_layout')
;

$GLOBALS['TL_DCA']['tl_layout']['fields']['add_splide_slider_scripts'] = [
    'label' => &$GLOBALS['TL_LANG']['tl_layout']['add_splide_slider_scripts'],
    'exclude' => true,
    'inputType' => 'checkbox',
    'eval' => ['tl_class' => ''],
    'sql' => "char(1) NOT NULL default ''",
];