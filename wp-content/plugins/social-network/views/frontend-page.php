<?php
if (!defined('ABSPATH')) exit;
global $socialNetworkPlugin;
?>
<div>
    <div class="networks">        
        
            <?php if($socialNetworkPlugin->getOption('facebook')){ ?>         
                <a href="https://facebook.com"><img src="<?php echo plugin_dir_url( dirname( __FILE__ ) ) . 'images/facebook.png'; ?>" alt="Facebook" height="42" width="42"></a>
            <?php }?> 

            <?php if($socialNetworkPlugin->getOption('twitter')){ ?>         
                <a href="https://twitter.com"><img src="<?php echo plugin_dir_url( dirname( __FILE__ ) ) . 'images/twitter.png'; ?>" alt="Twitter" height="42" width="42"></a>
            <?php }?>

            <?php if($socialNetworkPlugin->getOption('google')){ ?>         
                <a href="https://aboutme.google.com"><img src="<?php echo plugin_dir_url( dirname( __FILE__ ) ) . 'images/google.png'; ?>" alt="Google" height="42" width="42"></a>
            <?php }?>
      
    </div>    
</div>