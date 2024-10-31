<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       http://sgtechcoder.com/
 * @since      1.0.0
 *
 * @package    Sg_Post_View_Count
 * @subpackage Sg_Post_View_Count/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Sg_Post_View_Count
 * @subpackage Sg_Post_View_Count/includes
 * @author     Sahil Gulati <sgwebsol@gmail.com>
 */
class Sg_Post_View_Count_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'sg-post-view-count',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
