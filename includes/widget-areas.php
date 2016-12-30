<?php

/**
 * Register Widget Areas
 *
 * @package      RVC
 * Author: Andy Wojtowski
 * Author URI: http://www.randomthoughtsandstylings.com
 * @copyright    Copyright (c) 2017, Andy Wojtowski
 * @license      GPL-2.0+
 */

//* Register widget areas
genesis_register_sidebar( array(
	'id'          => 'home-slider',
	'name'        => __( 'Home - Slider', 'rvc' ),
	'description' => __( 'This is the slider section on the home page.', 'rvc' ),
) );
genesis_register_sidebar( array(
	'id'          => 'home-top',
	'name'        => __( 'Home - Top', 'rvc' ),
	'description' => __( 'This is the top section of the home page below the slider.', 'rvc' ),
) );
genesis_register_sidebar( array(
	'id'          => 'home-cta',
	'name'        => __( 'Home - Call To Action', 'rvc' ),
	'description' => __( 'This is the call to action section on the home page.', 'rvc' ),
) );
genesis_register_sidebar( array(
	'id'          => 'home-middle',
	'name'        => __( 'Home - Middle', 'rvc' ),
	'description' => __( 'This is the middle section of the home page.', 'rvc' ),
) );