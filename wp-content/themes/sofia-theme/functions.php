<?php
    function load_stylesheet() 
    {
        wp_enqueue_style('style', get_template_directory_uri() . '/style.css', array(), false, 'all');
    
        wp_enqueue_style('bootstrap', get_template_directory_uri() . '/node_modules/bootstrap/dist/css/bootstrap.min.css', array(), false, 'all');
        
    }

    add_action('wp_enqueue_scripts', 'load_stylesheet');
?>