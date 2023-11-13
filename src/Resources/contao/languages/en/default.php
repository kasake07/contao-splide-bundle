<?php

declare(strict_types=1);

/*
 * This file is part of ContaoSplideBundle.
 *
 * (c) Kaan Keskin
 *
 * @license LGPL-3.0-or-later
 */

use External\ContaoSplideBundle\Elements\SplideSlideStart;
use External\ContaoSplideBundle\Elements\SplideSlideStop;
use External\ContaoSplideBundle\Elements\SplideSlideSeparator;

/**
 *  Content elements
 */ 
$GLOBALS['TL_LANG']['CTE']['splide-slider'] = 'Splide-Slider';
$GLOBALS['TL_LANG']['CTE'][SplideSlideStart::TYPE] = ['Splide Start', 'Start Wrapper Element'];
$GLOBALS['TL_LANG']['CTE'][SplideSlideStop::TYPE] = ['Splide Stop', 'End Wrapper Element'];
$GLOBALS['TL_LANG']['CTE'][SplideSlideSeparator::TYPE] = ['Splide Separator', 'Separator Element'];
