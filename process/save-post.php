<?php

function r_save_post_admin( $post_id, $post, $update ) {
	if( !$update ) {
		return;
	}

	echo '<pre>';
	print_r( $_POST );
	die();
}