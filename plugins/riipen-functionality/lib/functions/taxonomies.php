<?php
/**
 * TAXONOMIES
 *
 * @link  http://codex.wordpress.org/Function_Reference/register_taxonomy
 */

// Add your custom taxonomies here...
// Register Custom Taxonomy
function Place_of_Employment_taxonomy() {

	$labels = array(
		'name'                       => 'Place of Employment',
		'singular_name'              => 'Place of Employment',
		'menu_name'                  => 'Place of Employment',
		'all_items'                  => 'All Place of Employments',
		'parent_item'                => 'Parent Place of Employment',
		'parent_item_colon'          => 'Parent Place of Employment:',
		'new_item_name'              => 'New Place of Employment Name',
		'add_new_item'               => 'Add Place of Employment Item',
		'edit_item'                  => 'Edit Place of Employment',
		'update_item'                => 'Update Place of Employment',
		'view_item'                  => 'View Place of Employment',
		'separate_items_with_commas' => 'Separate Places of Employment with commas',
		'add_or_remove_items'        => 'Add or remove Places of Employment',
		'choose_from_most_used'      => 'Choose from the most used',
		'popular_items'              => 'Popular Places of Employments',
		'search_items'               => 'Search Places of Employment',
		'not_found'                  => 'Not Found',
		'no_terms'                   => 'No Place of Employments',
		'items_list'                 => 'Place of Employments list',
		'items_list_navigation'      => 'Place of Employments list navigation',
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
	register_taxonomy( 'Placeof Employment', array( 'educator' ), $args );

}
add_action( 'init', 'Place_of_Employment_taxonomy', 0 );

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