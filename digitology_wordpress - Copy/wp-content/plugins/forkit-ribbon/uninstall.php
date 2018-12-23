<?php
/**
 * ForkitRibbon Uninstall
 *
 * Uninstalling the plugin delete options.
 *
 * @author   AxisThemes
 * @category Core
 * @package  ForkitRibbon/Uninstaller
 * @version  1.0.0
 */

if( ! defined( 'WP_UNINSTALL_PLUGIN' ) ) {
	exit;
}

$ribbon_options = get_option( 'forkit_ribbon_options', array() );

if ( ! empty( $ribbon_options['uninstall_data'] ) ) {

	global $wpdb;

	// Delete options
	$wpdb->query( "DELETE FROM $wpdb->options WHERE option_name LIKE 'forkit_ribbon\_%';" );
}
