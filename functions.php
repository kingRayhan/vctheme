<?php
function vctheme_enqueue_script() {
	/**
	 * For scrolling smoothly
	 */
 	wp_enqueue_script( 'smoothscroll-js', get_stylesheet_directory_uri().'/js/smoothscroll.js', array('jquery') , '1.0' , true );
	/**
	 * Electron Layout
	 * version 1.0.0
	 * https://github.com/kingRayhan/electron-layout.css
	 */
	wp_enqueue_style( 'electron-layout', get_stylesheet_directory_uri().'/css/electron-layout.css', '', '1.0.0', 'all' );
}
add_action( 'wp_enqueue_scripts', 'vctheme_enqueue_script' );



/**
 * Include the TGM_Plugin_Activation class.
 */
require_once '/lib/required-plugins.php';




add_action( 'init', 'register_portfolio_post_type' );
function register_portfolio_post_type() {
	$labels = array(
		"name" => __( 'Portfolios', '' ),
		"singular_name" => __( 'Portfolio', '' ),
		);

	$args = array(
		"label" => __( 'Portfolios', '' ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"show_ui" => true,
		"show_in_rest" => false,
		"rest_base" => "",
		"has_archive" => true,
		"show_in_menu" => true,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"menu_icon" => "dashicons-schedule",		
		"supports" => array( "title", "editor", "thumbnail", "excerpt", "author", "page-attributes" ),				
	);
	register_post_type( "portfolio", $args );

// End of register_portfolio_post_type()
}


add_action( 'init', 'register_portfolio_taxanomy' );
function register_portfolio_taxanomy() {
	$labels = array(
		"name" => __( 'portfolio categories', '' ),
		"singular_name" => __( 'portfolio  category', '' ),
		);

	$args = array(
		"label" => __( 'portfolio categories', '' ),
		"labels" => $labels,
		"public" => true,
		"hierarchical" => true,
		"label" => "portfolio categories"
	);
	register_taxonomy( "portfolio_cat", array( "portfolio" ), $args );

// End register_portfolio_taxanomy()
}

