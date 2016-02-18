<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link
 * @since             1.0.0
 * @package           Comment_Mail_Template
 *
 * @wordpress-plugin
 * Plugin Name:       Comment Mail Template
 * Plugin URI:
 * Description:       Enable to customize Email sender, subject, body. etc
 * Version:           1.0.0
 * Author:            Tomoyuki Tsujimoto
 * Author URI:        http://kee-non.com/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       comment-mail-template
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-comment-mail-template-activator.php
 */
function activate_comment_mail_template() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-comment-mail-template-activator.php';
	Comment_Mail_Template_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-comment-mail-template-deactivator.php
 */
function deactivate_comment_mail_template() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-comment-mail-template-deactivator.php';
	Comment_Mail_Template_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_comment_mail_template' );
register_deactivation_hook( __FILE__, 'deactivate_comment_mail_template' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-comment-mail-template.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_comment_mail_template() {

	$plugin = new Comment_Mail_Template();
	$plugin->run();

}
run_comment_mail_template();
