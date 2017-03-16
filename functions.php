<?php
function vctheme_enqueue_script() {
	/**
	 * Electron Layout
	 * version 1.0.0
	 * https://github.com/kingRayhan/electron-layout.css
	 */
	wp_enqueue_style( 'electron-layout', get_stylesheet_directory_uri().'/css/electron-layout.css', '', '1.0.0', 'all' );
}
add_action( 'wp_enqueue_scripts', 'vctheme_enqueue_script' );


require_once dirname(__FILE__) . '/lib/required-plugins.php';