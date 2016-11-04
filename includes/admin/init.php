<?php
/*
* 
*/

function falcon_admin_init() {

	include( 'create-metaboxes.php' );
	include( 'falcon-options.php' );
	include( 'enqueue.php' );

	add_action( 'add_meta_boxes_falcon', 'r_create_metaboxes' );
	add_action( 'admin_enqueue_scripts', 'r_admin_enqueue' );
	
}