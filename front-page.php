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

add_action('genesis_meta','rvc_homepage_setup');

function rvc_homepage_setup() {
	$home_sidebars = array(
		'home-slider' 	   => is_active_sidebar( 'home-slider' ),
		'home-top'   => is_active_sidebar( 'home-top' ),
		'home-cta'   => is_active_sidebar( 'home-cta' ),
		'home-middle'   => is_active_sidebar( 'home-middle' ),
	);

	// Return early if no sidebars are active.
	if ( ! in_array( true, $home_sidebars ) ) {
		return;
	}

	// Add home welcome area if "Home - Slider" widget area is active.
	if ( $home_sidebars['home-slider'] ) {
		add_action( 'genesis_after_header', 'rvc_add_home_slider' );
	}

	// Add call to action area if "Home - Top" widget area is active.
	if ( $home_sidebars['home-top'] ) {
		add_action( 'genesis_after_header', 'rvc_add_home_top' );
	}

	// Add call to action area if "Home - CTA" widget area is active.
	if ( $home_sidebars['home-cta'] ) {
		add_action( 'genesis_after_header', 'rvc_add_home_cta' );
	}

	// Add call to action area if "Home - Midddle" widget area is active.
	if ( $home_sidebars['home-middle'] ) {
		add_action( 'genesis_after_header', 'rvc_add_home_middle' );
	}

	
};



	/**
	 * Display content for the "Home Slider" section.
	 *
	 * @since 1.0.0
	 */
	function rvc_add_home_slider() {
	
		genesis_widget_area( 'home-slider',
			array(
				'before' => '<div class="home-slider"><div class="wrap">',
				'after' => '</div></div>',
			)
		);
	}
	
	/**
	 * Display content for the "Home Top" section.
	 *
	 * @since 1.0.0
	 */
	function rvc_add_home_top() {
	
		genesis_widget_area( 'home-cta',
			array(
				'before' => '<div class="home-cta"><div class="wrap">',
				'after' => '</div></div>',
			)
		);
		
	}
	
	/**
	 * Display content for the "Home Call To Action" section.
	 *
	 * @since 1.0.0
	 */
	function rvc_add_home_cta() {
	
		genesis_widget_area( 'home-top',
			array(
				'before' => '<div class="home-top"><div class="wrap">',
				'after' => '</div></div>',
			)
		);
		
	}
	
	/**
	 * Display content for the "Home Middle" section.
	 *
	 * @since 1.0.0
	 */
	function rvc_add_home_middle() {
	
		genesis_widget_area( 'home-middle',
			array(
				'before' => '<div class="home-middle"><div class="wrap">',
				'after' => '</div></div>',
			)
		);
		
	}


genesis();