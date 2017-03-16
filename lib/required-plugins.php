<?php

require_once dirname( __FILE__ ) . '/class-tgm-plugin-activation.php';
add_action( 'tgmpa_register', 'vctheme_register_required_plugins' );

function vctheme_register_required_plugins() {

	$plugins = array(

	    
	    array(
	        'name'      => 'Facebook comment box',
	        'slug'      => 'fb-comment-box',
	        'required'  => false,
	    ),
	    array(
	        'name'      => 'myStickymenu',
	        'slug'      => 'myStickymenu',
	        'required'  => false,
	    ),
	    array(
	        'name'      => 'One Click Demo Import',
	        'slug'      => 'one-click-demo-import',
	        'required'  => false,
	    ),
	    array(
	        'name'      => 'One Click Demo Import',
	        'slug'      => 'one-click-demo-import',
	        'required'  => false,
	    ),
	    array(
	        'name'      => 'Page Builder: KingComposer - Free Drag and Drop page builder by King-Theme',
	        'slug'      => 'kingcomposer',
	        'required'  => true,
	    ),
	);


	$config = array(
		'id'           => 'vctheme',                 // Unique ID for hashing notices for multiple instances of TGMPA.
		'default_path' => '',                      // Default absolute path to bundled plugins.
		'menu'         => 'tgmpa-install-plugins', // Menu slug.
		'has_notices'  => true,                    // Show admin notices or not.
		'dismissable'  => true,                    // If false, a user cannot dismiss the nag message.
		'dismiss_msg'  => '',                      // If 'dismissable' is false, this message will be output at top of nag.
		'is_automatic' => false,                   // Automatically activate plugins after installation or not.
		'message'      => '',                      // Message to output right before the plugins table.


	);

	tgmpa( $plugins, $config );
}
