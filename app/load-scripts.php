<?php

$dev=false;

if (!$dev) {
    define('VERSION', '1.0');
} else {
    define ('VERSION', time());
}

function add_theme_scripts(){
   wp_enqueue_style('fotostudio-style', get_template_directory_uri() .'/dist/mainstyle.min.css',NULL, VERSION,'all');
   wp_enqueue_style('Roboto', '//fonts.googleapis.com/css2?family=Roboto:wght@100;300;400&display=swap');
   wp_enqueue_script('bundleapp', get_template_directory_uri() .'/dist/bundle.js', NULL, VERSION, True);
   wp_enqueue_style('font-awesome', '//cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css');
    
    //    wp_enqueue_style( $handle, $src, $deps, $ver, $media );
   // wp_enqueue_script( $handle, $src, $deps, $ver, $in_footer );
}

add_action('wp_enqueue_scripts', 'add_theme_scripts');