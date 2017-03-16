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


require_once dirname(__FILE__) . '/lib/required-plugins.php';









// function vctheme_demos() {
//   return array(
//     array(
//       'import_file_name'           => 'Demo Import 1',
//       'categories'                 => array( 'Category 1', 'Category 2' ),
//       'import_file_url'            => 'http://www.your_domain.com/ocdi/demo-content.xml',
//       'import_widget_file_url'     => 'http://www.your_domain.com/ocdi/widgets.json',
//       'import_customizer_file_url' => 'http://www.your_domain.com/ocdi/customizer.dat',
//       'import_redux'               => array(
//         array(
//           'file_url'    => 'http://www.your_domain.com/ocdi/redux.json',
//           'option_name' => 'redux_option_name',
//         ),
//       ),
//       'import_preview_image_url'   => 'http://www.your_domain.com/ocdi/preview_import_image1.jpg',
//       'import_notice'              => __( 'After you import this demo, you will have to setup the slider separately.', 'your-textdomain' ),
//     )

//   );
// }
// add_filter( 'pt-ocdi/import_files', 'vctheme_demos' );