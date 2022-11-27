<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://colorweb.fr
 * @since             1.0.0
 * @package           Realisations
 *
 * @wordpress-plugin
 * Plugin Name:       realisations
 * Plugin URI:        https://colorweb.fr
 * Description:       Custom Post Type for posts réalisations of Guido plomberie
 * Version:           1.0.0
 * Author:            Kevin Capoccetti
 * Author URI:        https://colorweb.fr
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       realisations
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'REALISATIONS_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-realisations-activator.php
 */
function activate_realisations() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-realisations-activator.php';
	Realisations_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-realisations-deactivator.php
 */
function deactivate_realisations() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-realisations-deactivator.php';
	Realisations_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_realisations' );
register_deactivation_hook( __FILE__, 'deactivate_realisations' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-realisations.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_realisations() {

	$plugin = new Realisations();
	$plugin->run();

}
run_realisations();

// Register Custom Post Type
function realisations() {

	$labels = array(
		'name'                  => _x( 'realisations', 'Post Type General Name', 'guido-plomberie' ),
		'singular_name'         => _x( 'realisation', 'Post Type Singular Name', 'guido-plomberie' ),
		'menu_name'             => __( 'realisations', 'guido-plomberie' ),
		'name_admin_bar'        => __( 'realisations', 'guido-plomberie' ),
		'archives'              => __( 'realisations archives', 'guido-plomberie' ),
		'attributes'            => __( 'realisations attributes', 'guido-plomberie' ),
		'parent_item_colon'     => __( 'Parent Item:', 'guido-plomberie' ),
		'all_items'             => __( 'All realisations', 'guido-plomberie' ),
		'add_new_item'          => __( 'Add New realisation', 'guido-plomberie' ),
		'add_new'               => __( 'Add New realisation', 'guido-plomberie' ),
		'new_item'              => __( 'New realisation', 'guido-plomberie' ),
		'edit_item'             => __( 'Edit realisation', 'guido-plomberie' ),
		'update_item'           => __( 'Update realisation', 'guido-plomberie' ),
		'view_item'             => __( 'View realisation', 'guido-plomberie' ),
		'view_items'            => __( 'View realisations', 'guido-plomberie' ),
		'search_items'          => __( 'Search realisation', 'guido-plomberie' ),
		'not_found'             => __( 'Not found', 'guido-plomberie' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'guido-plomberie' ),
		'featured_image'        => __( 'Featured Image', 'guido-plomberie' ),
		'set_featured_image'    => __( 'Set featured image', 'guido-plomberie' ),
		'remove_featured_image' => __( 'Remove featured image', 'guido-plomberie' ),
		'use_featured_image'    => __( 'Use as featured image', 'guido-plomberie' ),
		'insert_into_item'      => __( 'Insert into item', 'guido-plomberie' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'guido-plomberie' ),
		'items_list'            => __( 'Items list', 'guido-plomberie' ),
		'items_list_navigation' => __( 'Items list navigation', 'guido-plomberie' ),
		'filter_items_list'     => __( 'Filter items list', 'guido-plomberie' ),
	);
	$args = array(
		'label'                 => __( 'realisation', 'guido-plomberie' ),
		'description'           => __( 'realisations', 'guido-plomberie' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'revisions', 'custom-fields', 'page-attributes' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-nametag',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
		'show_in_rest'          => true,
	);
	register_post_type( 'realisations', $args );

}
add_action( 'init', 'realisations', 0 );