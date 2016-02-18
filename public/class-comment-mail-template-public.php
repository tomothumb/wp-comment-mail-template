<?php

/**
 * The public-facing functionality of the plugin.
 *
 * @link       http://kee-non.com/
 * @since      1.0.0
 *
 * @package    Comment_Mail_Template
 * @subpackage Comment_Mail_Template/public
 */

/**
 * The public-facing functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Comment_Mail_Template
 * @subpackage Comment_Mail_Template/public
 * @author     Tomoyuki Tsujimoto <tomo@kee-non.com>
 */
class Comment_Mail_Template_Public {

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
	 * @param      string    $plugin_name       The name of the plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;

	}

	/**
	 * Register the stylesheets for the public-facing side of the site.
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

//		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/comment-mail-template-public.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the public-facing side of the site.
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

//		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/comment-mail-template-public.js', array( 'jquery' ), $this->version, false );

	}


	public function reviewmail_recipients( $emails, $comment_id){
		return explode(',', esc_attr( get_option('comment_moderation-recipients') ));
	}


	public function reviewmail_subject( $subject, $comment_id){
		return esc_attr( get_option('comment_moderation-subject') );
	}


	public function reviewmail_message( $notify_message, $comment_id){
		return $notify_message;

		$comment = get_comment($comment_id);
		$post = get_post($comment->comment_post_ID);
		$comment_author_domain = @gethostbyaddr($comment->comment_author_IP);
		$commenttpl = esc_attr( get_option('comment_moderation-body') );

		// Todo: Customize Mail body
		//	$notify_message

		return $notify_message;
	}



}
