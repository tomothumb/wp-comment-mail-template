<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       http://kee-non.com/
 * @since      1.0.0
 *
 * @package    Comment_Mail_Template
 * @subpackage Comment_Mail_Template/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Comment_Mail_Template
 * @subpackage Comment_Mail_Template/admin
 * @author     Tomoyuki Tsujimoto <tomo@kee-non.com>
 */
class Comment_Mail_Template_Admin {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $plugin_name    The ID of this plugin.
	 */
	private $plugin_name;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $plugin_name       The name of this plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;

	}

	/**
	 * Register the stylesheets for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Comment_Mail_Template_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Comment_Mail_Template_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

//		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/comment-mail-template-admin.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Comment_Mail_Template_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Comment_Mail_Template_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

//		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/comment-mail-template-admin.js', array( 'jquery' ), $this->version, false );

	}
	public function display_setting_page(){
		add_menu_page(
			__( 'Comment Mail Template', 'comment-mail-template' ),
			__( 'Comment Mail', 'comment-mail-template' ),
			'manage_options',
			'comment-mail-template--setting',
			array($this, 'tpl_setting_page'),
			''
		);
	}

	public function tpl_setting_page(){
		require_once plugin_dir_path( dirname( __FILE__ ) ) . 'admin/partials/setting.php';
	}

	public function register_mysettings(){
		register_setting( 'comment-mail-template-option-group', 'comment_moderation-recipients' );
		register_setting( 'comment-mail-template-option-group', 'comment_moderation-subject' );
		register_setting( 'comment-mail-template-option-group', 'comment_moderation-body' );
	}

}
