<?php

/**
 * This file registers the video taxonomy
 *
 * @package    	Casino_Toolbox
 * @link        https://feliedemar.ro
 * Author:      Felie de Mar
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 */

 // Register Custom Taxonomy
function casino_child_post_video_tax() {

	$labels = array(
		'name'                       => 'Categorii video',
		'singular_name'              => 'Categorie video',
		'menu_name'                  => 'Categorie video',
		'all_items'                  => 'All Items',
		'parent_item'                => 'Parent Item',
		'parent_item_colon'          => 'Parent Item:',
		'new_item_name'              => 'New Item Name',
		'add_new_item'               => 'Add New Item',
		'edit_item'                  => 'Edit Item',
		'update_item'                => 'Update Item',
		'view_item'                  => 'View Item',
		'separate_items_with_commas' => 'Separate items with commas',
		'add_or_remove_items'        => 'Add or remove items',
		'choose_from_most_used'      => 'Choose from the most used',
		'popular_items'              => 'Popular Items',
		'search_items'               => 'Search Items',
		'not_found'                  => 'Not Found',
		'no_terms'                   => 'No items',
		'items_list'                 => 'Items list',
		'items_list_navigation'      => 'Items list navigation',
	);
	$rewrite = array(
		'slug'                       => 'categorie-video',
		'with_front'                 => true,
		'hierarchical'               => false,
	);	
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => false,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
		'show_in_rest' 				 => true,
		'rewrite'                    => $rewrite,
	);
	register_taxonomy( 'video_tax', array( 'post' ), $args );

}
add_action( 'init', 'casino_child_post_video_tax', 0 );