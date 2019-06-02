<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://github.com/t0shifollow
 * @since      1.0.0
 *
 * @package    Keywords_Displayer
 * @subpackage Keywords_Displayer/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Keywords_Displayer
 * @subpackage Keywords_Displayer/includes
 * @author     t0shi <marcindymek24@gmail.com>
 */
class Keywords_Displayer_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'keywords-displayer',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
