<?php
/**
 * POST TYPES
 *
 * @link  http://codex.wordpress.org/Function_Reference/register_post_type
 */

// Add your custom post types here...
// Register Custom Post Type
function register_educators_post_type() {

	$labels = array(
		'name'                  => 'Educators',
		'singular_name'         => 'Educator',
		'menu_name'             => 'Educators',
		'name_admin_bar'        => 'Educators',
		'archives'              => 'Educator Archives',
		'parent_item_colon'     => 'Parent Educator:',
		'all_items'             => 'All Educators',
		'add_new_item'          => 'Add New Educators',
		'add_new'               => 'Add New Educator',
		'new_item'              => 'New Educator',
		'edit_item'             => 'Edit Educator',
		'update_item'           => 'Update Educator',
		'view_item'             => 'View Educator',
		'search_items'          => 'Search Educator',
		'not_found'             => 'Not found',
		'not_found_in_trash'    => 'Not found in Trash',
		'featured_image'        => 'Featured Image',
		'set_featured_image'    => 'Set featured image',
		'remove_featured_image' => 'Remove featured image',
		'use_featured_image'    => 'Use as featured image',
		'insert_into_item'      => 'Insert into Educator',
		'uploaded_to_this_item' => 'Uploaded to this Educator',
		'items_list'            => 'Educator list',
		'items_list_navigation' => 'Educators list navigation',
		'filter_items_list'     => 'Filter Educators list',
	);
	$args = array(
		'label'                 => 'Educator',
		'description'           => 'Educators post',
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-welcome-learn-more',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => 'educators',		
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'post',
	);
	register_post_type( 'educator', $args );

}
add_action( 'init', 'register_educators_post_type', 0 );

// Register Custom Post Type
function register_Institutions_post_type() {

	$labels = array(
		'name'                  => 'Institutions',
		'singular_name'         => 'Institution Type',
		'menu_name'             => 'Institutions',
		'name_admin_bar'        => 'Institution Type',
		'archives'              => 'Institution Archives',
		'parent_item_colon'     => 'Institution Item:',
		'all_items'             => 'All Institutions',
		'add_new_item'          => 'Add New Institutions',
		'add_new'               => 'Add New',
		'new_item'              => 'New Institution',
		'edit_item'             => 'Edit Institution',
		'update_item'           => 'Update Institution',
		'view_item'             => 'View Institution',
		'search_items'          => 'Search Institution',
		'not_found'             => 'Not found',
		'not_found_in_trash'    => 'Not found in Trash',
		'featured_image'        => 'Featured Image',
		'set_featured_image'    => 'Set featured image',
		'remove_featured_image' => 'Remove featured image',
		'use_featured_image'    => 'Use as featured image',
		'insert_into_item'      => 'Insert into Institution',
		'uploaded_to_this_item' => 'Uploaded to this Institution',
		'items_list'            => 'Institutions list',
		'items_list_navigation' => 'Institutions list navigation',
		'filter_items_list'     => 'Filter Institutions list',
	);
	$args = array(
		'label'                 => 'Institution Type',
		'description'           => 'The summery page of Institutions',
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,		
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'Institutions', $args );

}
add_action( 'init', 'register_Institutions_post_type', 0 );