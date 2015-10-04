<?php
/**
 * Plugin Name: Taxonomy Archive
 * Plugin URI:  http://ihorvorotnov.com/plugins/taxonomy-archive/
 * Description: Add support for top-level taxonomy archive pages, just like posts and custom post types have.
 * Version:     0.1.0
 * Author:      Ihor Vorotnov <ihor.vorotnov@gmail.com>
 * Author URI:  http://ihorvorotnov.com/
 * License:     GPL2+
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain: taxonomy-archive
 * Domain Path: /languages/
 *
 * @package Taxonomy_Archive
 */

/**
 * If this file is called directly, abort.
 */
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Activate the plugin.
 */
function pssta_activate() {

	pssta_rewrite_rules();
	flush_rewrite_rules();

}
register_activation_hook( __FILE__, 'pssta_activate' );

/**
 * Deactivate the plugin.
 *
 * Deactivation happens after `init` and flushing rewrite rules here does nothing.
 * Completely deleting them is not the most elegant solution, however, it's the only
 * reliable way to remove custom rewrite rules without any manual user action.
 *
 * @link https://core.trac.wordpress.org/ticket/29118
 */
function pssta_deactivate() {

	delete_option( 'rewrite_rules' );

}
register_deactivation_hook( __FILE__, 'pssta_deactivate' );

/**
 * Uninstall the plugin.
 */
function pssta_uninstall() {

}
register_uninstall_hook( __FILE__, 'pssta_uninstall' );

/**
 * Include plugin code.
 */
include_once( dirname( __FILE__ ) . '/taxonomy-archive-functions.php' );
