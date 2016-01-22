<?php 
/*
Plugin Name: My Plugin Name
Plugin URI:  http://pluginuri.com
Description: This describes my plugin in a short sentence
Version:     0.0.1
Author:      Francesco Michelini
Author URI:  https://github.com/kekkorider
License:     GPL2
License URI: https://www.gnu.org/licenses/gpl-2.0.html
Domain Path: /languages
Text Domain: my-plugin-textdomain
*/


// Blocking direct access to this script
defined( 'ABSPATH' ) or die( 'No script kiddies please!' );

// Activation / Deactivation hooks
register_activation_hook( __FILE__, 'my_plugin_activation_function' );
function my_plugin_activation_function() {

	// Clear permalinks
	flush_rewrite_rules();

}

register_deactivation_hook( __FILE__, 'my_plugin_deactivation_function' );
function my_plugin_deactivation_function() {

	// Clear permalinks
	flush_rewrite_rules();

}

// Admin scripts
if ( is_admin() ) {
	require_once( dirname(__file__).'/admin/my-plugin-admin.php' );
}
