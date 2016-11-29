<?php
/**
 * TAXONOMIES
 *
 * @link  http://codex.wordpress.org/Function_Reference/register_taxonomy
 */

// Add your custom taxonomies here...
// Register Custom Taxonomy
function institution_taxonomy() {

	$labels = array(
		'name'                       => 'Institutions',
		'singular_name'              => 'Institution',
		'menu_name'                  => 'institution',
		'all_items'                  => 'All institutions',
		'parent_item'                => 'Parent institution',
		'parent_item_colon'          => 'Parent institution:',
		'new_item_name'              => 'New institution Name',
		'add_new_item'               => 'Add institution Item',
		'edit_item'                  => 'Edit institution',
		'update_item'                => 'Update institution',
		'view_item'                  => 'View institution',
		'separate_items_with_commas' => 'Separate institutions with commas',
		'add_or_remove_items'        => 'Add or remove institutions',
		'choose_from_most_used'      => 'Choose from the most used',
		'popular_items'              => 'Popular institutions',
		'search_items'               => 'Search institutions',
		'not_found'                  => 'Not Found',
		'no_terms'                   => 'No institutions',
		'items_list'                 => 'institutions list',
		'items_list_navigation'      => 'institutions list navigation',
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
	register_taxonomy( 'institution', array( 'educator' ), $args );

}
add_action( 'init', 'institution_taxonomy', 0 );