<?php
/*
* 
*/

function r_admin_enqueue() {
	global $typenow;

	if( $typenow !== 'falcon' ) {
		return;
	}

	wp_register_style( 'r_bootstrap', plugins_url( '/assets/styles/bootstrap.css', FALCON_PLUGIN_URL ) );
	wp_enqueue_style( 'r_bootstrap');

}