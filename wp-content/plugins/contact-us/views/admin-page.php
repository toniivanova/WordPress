<?php
if (!defined('ABSPATH')) exit;
global $contactUsPlugin;
?>

<div class="wrapper">
    <h1><?php echo esc_html(get_admin_page_title()); ?></h1>
    <form method="post" action="<?php echo esc_html(admin_url('admin-post.php')); ?>">
        <input type="hidden" name="contact-us-admin-form" value="1"/>
        <div class="information">
            <h2><?php _e('Information'); ?></h2>
            <p>
                <label><?php _e('Email'); ?></label><br />
                <input name="email" value="<?php echo $contactUsPlugin->getOption('email'); ?>" />
            </p>
            <p>
                <label><?php _e('Phone'); ?></label><br />
                <input name="phone" value="<?php echo $contactUsPlugin->getOption('phone'); ?>" />
            </p>
            <p>
                <label><?php _e('Additional info'); ?></label>
                <br />
                <textarea name="additional_info"><?php echo $contactUsPlugin->getOption('additional_info'); ?></textarea>
            </p>
        </div><!-- .information -->

        <div class="google-map">
            <h2><?php _e('Google maps iframe code'); ?></h2>
            <p>
                <textarea name="gm_code" style="min-width: 400px;min-height:100px;"><?php echo $contactUsPlugin->getOption('gm_code'); ?></textarea>
            </p>
            </div><!-- .google-map -->
            <?php wp_nonce_field('contact-us-save', 'contact-us-message'); submit_button(); ?>
    </form>
    
</form>
</div>