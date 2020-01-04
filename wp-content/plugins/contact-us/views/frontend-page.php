<?php
if (!defined('ABSPATH')) exit;
global $contactUsPlugin;
?>
<div>
    <div class="information">
        <h2><?php _e('Information'); ?></h2>
        <p><?php _e('Email'); ?>: <?php echo $contactUsPlugin->getOption('email'); ?></p>
        <p><?php _e('Phone'); ?>: <?php echo $contactUsPlugin->getOption('phone'); ?></p>
        <p><?php _e('Additional info'); ?>: <?php echo $contactUsPlugin->getOption('additional_info'); ?></p>
    </div>

    <div class="google-map">
        <h2><?php _e('Google maps'); ?></h2>
        <?php echo $contactUsPlugin->getOption('gm_code'); ?>
    </div>
    
</div>