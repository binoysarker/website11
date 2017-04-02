<?php
/**
 * Receptar WordPress Theme
 *
 * Receptar WordPress Theme, Copyright 2015 WebMan [http://www.webmandesign.eu/]
 * Receptar is distributed under the terms of the GNU GPL
 *
 * @package    Receptar
 * @author     WebMan
 * @license    GPL-2.0+
 * @link       http://www.webmandesign.eu
 * @copyright  2015 WebMan - Oliver Juhas
 *
 * @since    1.0
 * @version  1.3.6
 *
 * @link  http://www.webmandesign.eu
 *
 * CONTENT:
 * - 0) Constants
 * - 1) Required files
 */





/**
 * 0) Constants
 */

	// Basic constants

		if ( ! defined( 'WM_THEME_SHORTNAME' ) ) define( 'WM_THEME_SHORTNAME', str_replace( array( '-lite', '-plus' ), '', get_template() ) );

	// Dir constants

		if ( ! defined( 'WM_INC_DIR' ) ) define( 'WM_INC_DIR', trailingslashit( 'inc' ) );





/**
 * 1) Required files
 */

	//Global functions
		locate_template( WM_INC_DIR . 'lib/core.php', true );

	//Theme setup
		locate_template( WM_INC_DIR . 'setup.php', true );

	//Custom header
		locate_template( WM_INC_DIR . 'custom-header/custom-header.php', true );

	//Customizer
		locate_template( WM_INC_DIR . 'customizer/customizer.php', true );

	//Jetpack setup
		locate_template( WM_INC_DIR . 'jetpack/jetpack.php', true );

	//Beaver Builder setup
		locate_template( WM_INC_DIR . 'beaver-builder/beaver-builder.php', true );



// calling stylesheets


		function calling_stylesheet_resource(){
				wp_enqueue_style('jquerytabel.min.css', get_stylesheet_directory_uri() . '/css/bootstrap.min.css');
				wp_enqueue_style('jquerytabel.min.css', get_stylesheet_directory_uri() . '/css/font-awesome.min.css');
				wp_enqueue_script('jquerytable.min.js', get_stylesheet_directory_uri() . '/js/jquery-3.1.1.min.js');
				wp_enqueue_script('jquerytable.min.js', get_stylesheet_directory_uri() . '/js/bootstrap.min.js');
				
			}
			add_action('init', 'calling_stylesheet_resource');		