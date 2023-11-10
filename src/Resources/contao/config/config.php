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

/**
 * Content elements
 */
$GLOBALS['TL_CTE']['splide-slider'][SplideSlideStart::TYPE] = '\External\ContaoSplideBundle\Elements\SplideSlideStart';
$GLOBALS['TL_CTE']['splide-slider'][SplideSlideStop::TYPE] = '\External\ContaoSplideBundle\Elements\SplideSlideStop';
$GLOBALS['TL_CTE']['splide-slider'][SplideSlideSeparator::TYPE] = '\External\ContaoSplideBundle\Elements\SplideSlideSeparator';

/**
 * Wrapper elements
 */
$GLOBALS['TL_WRAPPERS']['start'][] = SplideSlideStart::TYPE;
$GLOBALS['TL_WRAPPERS']['stop'][] = SplideSlideStop::TYPE;
$GLOBALS['TL_WRAPPERS']['separator'][] = SplideSlideSeparator::TYPE;