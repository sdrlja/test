<?php

function add_theme_supports(){
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails', array( 'post' ) );          // Posts only
    add_theme_support( 'post-thumbnails', array( 'page' ) );          // Pages only
    add_theme_support( 'post-thumbnails', array( 'akcije' ) );          // Akcije
    // add_theme_support( 'post-thumbnails', array( 'post', 'movie' ) ); // Posts and Movies
    // add_image_size( string $name, int $width, int $height, bool|array $crop = false )
    add_image_size( 'portrait-thumb', 180, 220, false ); // 220 pixels wide by 180 pixels tall, no crop mode
    add_image_size( 'portrait-medium', 220, 330, false );
    add_image_size( 'portrait-large', 682, 1024, false );
    add_image_size('post-hero', 1920, 400, true); // ako nije true, onda ga ne pokazuje u image crop. 

    add_image_size('slajd-size', 1280, 854, true);
    add_image_size('card-face', 330, 500, true); // card - cijenik crop size

    register_nav_menu( 'footer-left', 'Footer Left Menu' );
    // to use custom size:
    /**
     * ‘thumb’, ‘thumbnail’, ‘medium’, ‘large’, ‘post-thumbnail’
     * The names “thumb” & “thumbnail” are just aliases- they are exactly the same.
     * 
     * To add custom css class to thumbnail
     * <?php the_post_thumbnail('medium', array('class' => 'alignleft')); ?>
     * will generate html... 
     * <img src="..." class="alignleft wp-post-image" ...>
     * 
     * if ( has_post_thumbnail() ) { 
     * the_post_thumbnail( 'your-custom-size' ); 
     * }
     */
}

add_action('after_setup_theme', 'add_theme_supports');

// https://developer.wordpress.org/reference/functions/body_class/