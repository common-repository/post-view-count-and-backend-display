<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              http://sgtechcoder.com/
 * @since             1.0.0
 * @package           sg_Post_View_Count
 *
 * @wordpress-plugin
 * Plugin Name:       Post View Count And Backend Display
 * Plugin URI:        http://sgtechcoder.com/post-view-count/
 * Description:       this plugin give an extra colum for displaying how namy time particular post is viewed .
 * Version:           1.0.0
 * Author:            Sahil Gulati
 * Author URI:        http://sgtechcoder.com/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       sg-post-view-count
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
define( 'SG_POST_VIEW_COUNT_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-sg-post-view-count-activator.php
 */
function activate_sg_post_view_count() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-sg-post-view-count-activator.php';
	Sg_Post_View_Count_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-sg-post-view-count-deactivator.php
 */
function deactivate_sg_post_view_count() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-sg-post-view-count-deactivator.php';
	Sg_Post_View_Count_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_sg_post_view_count' );
register_deactivation_hook( __FILE__, 'deactivate_sg_post_view_count' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-sg-post-view-count.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_sg_post_view_count() {

	$plugin = new Sg_Post_View_Count();
	$plugin->run();

}
run_sg_post_view_count();
