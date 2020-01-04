<?php
    function load_stylesheet() 
    {
        wp_enqueue_style('style', get_template_directory_uri() . '/style.css', array(), false, 'all');
    
        wp_enqueue_style('bootstrap', get_template_directory_uri() . '/node_modules/bootstrap/dist/css/bootstrap.min.css', array(), false, 'all');
        
        wp_enqueue_style('Montserrat',"https://fonts.googleapis.com/css?family=Montserrat:700|Montserrat:normal|Montserrat:300");

        wp_enqueue_style('fontawesome','https://use.fontawesome.com/releases/v5.2.0/css/all.css');

    }

    add_action('wp_enqueue_scripts', 'load_stylesheet');
?>