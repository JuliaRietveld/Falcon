<?php
/*
* 
*/

function falcon_init() {
	$labels = array(
		'name'               => __( 'Books', 'post type general name', 'falcon' ),
		'singular_name'      => __( 'Book', 'post type singular name', 'falcon' ),
		'menu_name'          => __( 'Books', 'admin menu', 'falcon' ),
		'name_admin_bar'     => __( 'Book', 'add new on admin bar', 'falcon' ),
		'add_new'            => __( 'Add New', 'book', 'falcon' ),
		'add_new_item'       => __( 'Add New Book', 'falcon' ),
		'new_item'           => __( 'New Book', 'falcon' ),
		'edit_item'          => __( 'Edit Book', 'falcon' ),
		'view_item'          => __( 'View Book', 'falcon' ),
		'all_items'          => __( 'All Books', 'falcon' ),
		'search_items'       => __( 'Search Books', 'falcon' ),
		'parent_item_colon'  => __( 'Parent Books:', 'falcon' ),
		'not_found'          => __( 'No books found.', 'falcon' ),
		'not_found_in_trash' => __( 'No books found in Trash.', 'falcon' )
	);

	$args = array(
		'labels'             => $labels,
                'description'        => __( 'Description.', 'falcon' ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'book' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),
		'taxonomies'				=> array( 'category', 'post_tag')
	);

	register_post_type( 'book', $args );
}