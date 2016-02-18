<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       http://kee-non.com/
 * @since      1.0.0
 *
 * @package    Comment_Mail_Template
 * @subpackage Comment_Mail_Template/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Comment_Mail_Template
 * @subpackage Comment_Mail_Template/includes
 * @author     Tomoyuki Tsujimoto <tomo@kee-non.com>
 */
class Comment_Mail_Template_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'comment-mail-template',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
