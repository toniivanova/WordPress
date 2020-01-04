<?php
if (!defined('ABSPATH')) exit;
global $socialNetworkPlugin;
?>

<div class="wrapper">
    <h1><?php echo esc_html(get_admin_page_title()); ?></h1>
    <form method="post" action="<?php echo esc_html(admin_url('admin-post.php')); ?>">
        <input type="hidden" name="social-network-admin-form" value="1"/>
        <div class="network">
            <h2><?php _e('Information'); ?></h2>
            <p>          
                <input type="checkbox" name="facebook" value="Facebook"> 
                <img src="<?php echo plugin_dir_url( dirname( __FILE__ ) ) . 'images/facebook.png'; ?>" alt="Facebook" height="42" width="42">                
            </p>
            <p>                
                <input type="checkbox" name="twitter" value="Twitter"> 
                <img src="<?php echo plugin_dir_url( dirname( __FILE__ ) ) . 'images/twitter.png'; ?>" alt="Twitter" height="42" width="42">                
            </p>
            <p>                
                <input type="checkbox" name="google" value="Google"> 
                <img src="<?php echo plugin_dir_url( dirname( __FILE__ ) ) . 'images/google.png'; ?>" alt="Google" height="42" width="42">                
            </p>
        </div><!-- .information -->        
            <?php wp_nonce_field('social-network-save', 'social-network-message'); submit_button(); ?>
    </form>
    
</form>
</div>