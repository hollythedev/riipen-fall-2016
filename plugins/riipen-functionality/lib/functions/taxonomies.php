<?php
/**
 * TAXONOMIES
 *
 * @link  http://codex.wordpress.org/Function_Reference/register_taxonomy
 */

// Add your custom taxonomies here...
// Register Custom Taxonomy
function Institution_taxonomy() {

	$labels = array(
		'name'                       => 'Institutions',
		'singular_name'              => 'Institution',
		'menu_name'                  => 'Institution',
		'all_items'                  => 'All Institutions',
		'parent_item'                => 'Parent Institution',
		'parent_item_colon'          => 'Parent Institution:',
		'new_item_name'              => 'New Institution Name',
		'add_new_item'               => 'Add Institution Item',
		'edit_item'                  => 'Edit Institution',
		'update_item'                => 'Update Institution',
		'view_item'                  => 'View Institution',
		'separate_items_with_commas' => 'Separate Institutions with commas',
		'add_or_remove_items'        => 'Add or remove Institutions',
		'choose_from_most_used'      => 'Choose from the most used',
		'popular_items'              => 'Popular Institutions',
		'search_items'               => 'Search Institutions',
		'not_found'                  => 'Not Found',
		'no_terms'                   => 'No Institutions',
		'items_list'                 => 'Institutions list',
		'items_list_navigation'      => 'Institutions list navigation',
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => false,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
	);
	register_taxonomy( 'Institution', array( 'educator' ), $args );

}
add_action( 'init', 'Institution_taxonomy', 0 );

// Register Custom Taxonomy
function register_educator_subjects() {

	$labels = array(
		'name'                       => 'Subjects',
		'singular_name'              => 'Subject',
		'menu_name'                  => 'Subjects',
		'all_items'                  => 'All Subjects',
		'parent_item'                => 'Parent Subject',
		'parent_item_colon'          => 'Parent Subject:',
		'new_item_name'              => 'New Subject Name',
		'add_new_item'               => 'Add New Subject',
		'edit_item'                  => 'Edit Subject',
		'update_item'                => 'Update Subject',
		'view_item'                  => 'View Subject',
		'separate_items_with_commas' => 'Separate Subjects with commas',
		'add_or_remove_items'        => 'Add or remove Subjects',
		'choose_from_most_used'      => 'Choose from the most used',
		'popular_items'              => 'Popular Subjects',
		'search_items'               => 'Search Subjects',
		'not_found'                  => 'Not Found',
		'no_terms'                   => 'No Subjects',
		'items_list'                 => 'Items Subject',
		'items_list_navigation'      => 'Items Subject navigation',
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => false,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
	);
	register_taxonomy( 'subject', array( 'educator' ), $args );

}
add_action( 'init', 'register_educator_subjects', 0 );