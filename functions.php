<?php

add_action( 'wp_enqueue_scripts', 'add_assets' );

function add_assets()
{

    wp_enqueue_style( 'my-blog-style', get_stylesheet_uri() );
    wp_enqueue_script( 'my-blog-script', get_template_directory_uri().'/js/script.js', array(), false, true );

}
