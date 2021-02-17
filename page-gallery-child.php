<?php

/**

 * Template Name: Gallery - child page 

 *

 * 

*/

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


while(have_posts()){

    the_post();

    the_content();

    

}









get_footer();

