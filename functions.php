<?php

/**
 * Theme customizations
 *
 * @package      RVC
 * Author: Andy Wojtowski
 * Author URI: http://www.randomthoughtsandstylings.com
 * @copyright    Copyright (c) 2017, Andy Wojtowski
 * @license      GPL-2.0+
 */

// Load child theme textdomain.
load_child_theme_textdomain( 'rvc' );

add_action( 'genesis_setup', 'rvc_setup', 15 );
/**
 * Theme setup.
 *
 * Attach all of the site-wide functions to the correct hooks and filters. All
 * the functions themselves are defined below this setup function.
 *
 * @since 1.0.0
 */
function rvc_setup() {
	//* Define Theme Constants
	define('CHILD_THEME_NAME', 'RVC');
	define('CHILD_THEME_URI', 'https://github.com/awojtowski/rvc');
	define('CHILD_THEME_VERSION', '1.0.0');
	
	//v Add HTML 5 Markup strucure
	add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption'  ) );
	//* Add viewport markup for mobile browsers
	add_theme_support( 'genesis-responsive-viewport' );
	//* Add theme support for accessibility
	add_theme_support( 'genesis-accessibility', array(
		'404-page',
		'drop-down-menu',
		'headings',
		'rems',
		'search-form',
		'skip-links',
	) );
	//* Add theme support for footer widgets
	add_theme_support('genesis-footer-widgets', 3);
	//* Add theme support for custom logo
	add_theme_support( 'custom-logo', array(
    'height'      => 100,
    'width'       => 400,
    'flex-height' => true,
    'flex-width'  => true,
    'header-text' => array( 'site-title', 'site-description' ),
	) );
	
	//* Unregister layout settings
	genesis_unregister_layout( 'content-sidebar-sidebar' );
	genesis_unregister_layout( 'sidebar-content-sidebar' );
	genesis_unregister_layout( 'sidebar-sidebar-content' );
	
	//* Unregister secondary sidebar
	unregister_sidebar( 'sidebar-alt' );
	
	//* Add Theme Widgets
	include_once(get_stylesheet_directory().'/includes/widget-areas.php');

	
}