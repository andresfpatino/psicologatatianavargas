<?php

/**
 * psicotvm First functions and definitions
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 * @package psicotvm
 */


/** Setup **/
require('inc/setup.php');

/** Enqueue scripts and styles.**/
require('inc/scripts.php');

/** Shortcodes Theme **/
require('inc/shortcodes.php');

/**  Custom Pagination Function **/
require('inc/pagination.php');

/**  Social Shared Icons Function **/
require('inc/shared-social.php');

/** Author Fields **/
require('inc/author-fields.php');

/** Yoast Meta Description and page titles **/
require('inc/yoast-meta-description.php');

/**
*** Scripts FPS Function
**/
if (function_exists('acf_add_options_page')) {
    // parent.
	acf_add_options_page(array(
		'page_title'  => __('Scripts'),
		'menu_title'  => __('Scripts'),
		'redirect'    => false,
	));

    acf_add_options_page(array(
		'page_title'  => __('Configuración'),
		'menu_title'  => __('Configuración'),
		'redirect'    => false,
	));

    /** Tab FPS Options **/
    require('inc/functions/fps-tab-scripts/add-action-init.php');
    require('inc/functions/fps-tab-scripts/fields-imported.php');
}

/** ACF Custom functions **/
require('inc/functions/custom-functions.php');
