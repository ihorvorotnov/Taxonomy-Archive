<?php
/**
 * General plugin functionality.
 *
 * @package Taxonomy_Archive
 */

/**
 * Add custom rewrite rules.
 */
function pssta_rewrite_rules() {

	add_rewrite_rule( '^category/?', 'index.php?pssta_template=category', 'top' );
	add_rewrite_rule( '^tag/?', 'index.php?pssta_template=tag', 'top' );

}
add_action( 'init', 'pssta_rewrite_rules' );

/**
 * Add custom query var.
 *
 * @param  array $vars All public query variables available to WP_Query.
 *
 * @return array $vars An updated array of public query variables.
 */
function pssta_query_vars( $vars ) {

	$vars[] = 'pssta_template';
	return $vars;

}
add_filter( 'query_vars', 'pssta_query_vars' );
