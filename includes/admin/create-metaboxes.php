<?php
/*
* 
*/


function r_create_metaboxes() {
	add_meta_box(
			'r_falcon_options_mb', //id
			__( 'Falcon options', 'falcon' ), //type
			'r_falcon_options_mb', //callback
			'falcon', //Post type
			'advanced', //Context
			'high' //priority
		);
}