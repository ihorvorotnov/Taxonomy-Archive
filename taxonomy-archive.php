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
 * Activate plugin
 */
function taxar_install() {

}
register_activation_hook( __FILE__, 'taxar_install' );

/**
 * Deactivate plugin
 */
function taxar_deactivate() {

}
register_deactivation_hook( __FILE__, 'taxar_deactivate' );

/**
 * Uninstall plugin
 */
function taxar_uninstall() {

}
register_uninstall_hook ( __FILE__, 'taxar_uninstall' );

/**
 * Include plugin code.
 */
include_once( dirname( __FILE__ ) . '/taxonomy-archive-functions.php' );
