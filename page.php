<?php

/**
 * Set some data to Globals and pass to headers on every page 
 */

$data=array(
    'title'=>'Trenutne Akcije',
    'slogan'=>'Ostvarite popuste',
    'image'=>null
);

// $GLOBALS['hero_header']=$data;

load_header();

// $GLOBALS['hero_header']=[];



while(have_posts()) {

    the_post();

    // the_title();

    the_content();

    if (has_post_thumbnail()) { 

        the_post_thumbnail('thumb'); 

    }

    if(has_excerpt()){

        the_excerpt();

    }

}



// get_template_part('template-part/contacts');



// echo do_shortcode('[contacts]', false);



get_footer();



