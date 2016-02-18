<?php

/**
 * Provide a admin area view for the plugin
 *
 * This file is used to markup the admin-facing aspects of the plugin.
 *
 * @link       http://kee-non.com/
 * @since      1.0.0
 *
 * @package    Comment_Mail_Template
 * @subpackage Comment_Mail_Template/admin/partials
 */
?>


<div class="wrap">
    <h2>Comment Mail Template Setting</h2>
    <p>You can change comment notification mail. Recipients and Subject</p>
        <form method="post" action="options.php">
            <?php settings_fields( 'comment-mail-template-option-group' ); ?>
            <?php do_settings_sections( 'comment-mail-template-option-group' ); ?>

            <table class="form-table">
                <tr valign="top">
                    <th scope="row">Recipients email address<br>(Comma separated)</th>
                    <td><input type="text" name="comment_moderation-recipients" value="<?php echo esc_attr( get_option('comment_moderation-recipients') ); ?>" /></td>
                </tr>

                <tr valign="top">
                    <th scope="row">Subject</th>
                    <td><input type="text" name="comment_moderation-subject" value="<?php echo esc_attr( get_option('comment_moderation-subject') ); ?>" /></td>
                </tr>
<!--
                <tr valign="top">
                    <th scope="row">Message</th>
                    <td><input type="text" name="comment_moderation-body" value="<?php echo esc_attr( get_option('comment_moderation-body') ); ?>" /></td>
                </tr>
-->
            </table>
            <?php submit_button(); ?>

    </form>
</div>