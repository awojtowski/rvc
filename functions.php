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

add_action( 'genesis_setup', 'rvc_setup' );
/**
 * Theme setup.
 *
 * Attach all of the site-wide functions to the correct hooks and filters. All
 * the functions themselves are defined below this setup function.
 *
 * @since 1.0.0
 */
function rvc_setup() {

}