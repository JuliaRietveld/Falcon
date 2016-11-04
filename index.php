<?php
/*
Plugin Name: Falcon
Plugin URI:  https://developer.wordpress.org/plugins/the-basics/
Description: Basic WordPress Plugin Header Comment
Version:     20160911
Author:      WordPress.org
Author URI:  https://developer.wordpress.org/
License:     GPL2
License URI: https://www.gnu.org/licenses/gpl-2.0.html
Text Domain: falcon
Domain Path: /languages
*/

//if WP is not loaded, exit. Anti hack.
if( !function_exists('add_action') ) {
	echo 'Not allowed!';
	exit();
}

// Setup
define( 'FALCON_PLUGIN_URL', '__FILE__' );


// Includes

include( 'includes/activate.php' );
include( 'includes/init.php' );
include( 'includes/admin/init.php' );

// Hooks
register_activation_hook(__FILE__, 'r_activate_plugin' );
//here the custom post types will be 
add_action('init', 'falcon_init' );
add_action( 'admin_init', 'r_admin_init' );
add_action( 'save_post_falcon', 'r_save_post_admin', 1 );


// Shortcodes