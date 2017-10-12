<?php

/**
 * 
 *
 * @link              www.github.com/mrahmadbilal
 * @since             1.0.0
 * @package           Wp_Ct_Plugin
 *
 * @wordpress-plugin
 * Plugin Name:       WP CT Plugin.
 * Plugin URI:        www.github.com/mrahmadbilal
 * Description:       This is a WordPress Custom Taxonomy Plugin boilerplate. It makes creating custom taxonomies very easy and saves a lot of time. It is also properly documented to make it easier for you to customize it as per your needs.
 * Version:           1.0.0
 * Author:            Ahmad Bilal
 * Author URI:        www.github.com/mrahmadbilal
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       wp-ct-plugin
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

define( 'PLUGIN_NAME_VERSION', '1.0.0' );

/**
		* Registers the Custom Taxonomy hook.
		*
		* @since 1.0.0
		* @uses add_action()
		*/

add_action( 'init' ,'create_new_taxonomy');

/**
		* Creates a new custom taxonomy()
		*
		* @since 1.0.0
		* @uses register_taxononmy()
		*/

function create_new_taxonomy() {

	$labels = array(
		'name'                       => _x( 'Taxonomies', 'Taxonomy General Name', 'text_domain' ),
		'singular_name'              => _x( 'Taxonomy', 'Taxonomy Singular Name', 'text_domain' ),
		'menu_name'                  => __( 'Taxonomy', 'text_domain' ),
		'all_items'                  => __( 'All Items', 'text_domain' ),
		'parent_item'                => __( 'Parent Item', 'text_domain' ),
		'parent_item_colon'          => __( 'Parent Item:', 'text_domain' ),
		'new_item_name'              => __( 'New Item Name', 'text_domain' ),
		'add_new_item'               => __( 'Add New Item', 'text_domain' ),
		'edit_item'                  => __( 'Edit Item', 'text_domain' ),
		'update_item'                => __( 'Update Item', 'text_domain' ),
		'view_item'                  => __( 'View Item', 'text_domain' ),
		'separate_items_with_commas' => __( 'Separate items with commas', 'text_domain' ),
		'add_or_remove_items'        => __( 'Add or remove items', 'text_domain' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'text_domain' ),
		'popular_items'              => __( 'Popular Items', 'text_domain' ),
		'search_items'               => __( 'Search Items', 'text_domain' ),
		'not_found'                  => __( 'Not Found', 'text_domain' ),
		'no_terms'                   => __( 'No items', 'text_domain' ),
		'items_list'                 => __( 'Items list', 'text_domain' ),
		'items_list_navigation'      => __( 'Items list navigation', 'text_domain' ),
	);
	$args = array(
		'labels'                     => $labels, 
		'hierarchical'               => false,
		'public'                     => true, // Whether a taxonomy is intended for use publicly either via the admin interface or by front-end users.
		'show_ui'                    => true, // Whether to generate and allow a UI for managing this taxonomy in the admin.
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
	);

register_taxonomy( 'taxonomy', array( 'post' ), $args );

}

/**
 * The code that runs during plugin activation.
 * Uses activaiton hook.
 */

function wp_ct_activation() {
 
  	// Write the activation code here.
}

register_activation_hook( __FILE__ , 'wp_ct_activation');

/**
 * The code that runs during plugin deactivation.
 * Uses deactivaiton hook.
 */

function wp_ct_deactivation() {
 
  	// Write the deactivation code here.
}

register_deactivation_hook( __FILE__ , 'wp_ct_deactivation');