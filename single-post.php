<?php

/**
 * Set some data to Globals and pass to headers on every page 
 */

$data=array(
    'title'=>'Iz naših objava',
    'slogan'=>'pratite naše objave',
    'image'=>null
);

// $GLOBALS['hero_header']=$data;

load_header();

// $GLOBALS['hero_header']=[];

while(have_posts()) {
    the_post(); ?>
    
    <div class="single">
        <div class="single-info">
            <h2 class="single-title"><?php the_title(); ?></h2>
            <span><i class="fas fa-pen-alt"></i>&nbsp;By: Studio&nbsp; - &nbsp;<?php echo get_the_date('j M Y'); ?></i></span>
            <span></span>
        </div>

        <div class="single-feature">
            <?php 
                if(has_post_thumbnail()) {
                    $thumb=the_post_thumbnail('medium_large');
                } else {
                    unset($thumb);
                }
            ?>
        <img src="<?php echo $thumb; ?>" alt="">
        </div>
        
        <div class="single-content">
            <?php the_content(); ?>
        </div> 
    </div>

    <a class="post-link-link" href="<?php echo esc_url(site_url('/objave')); ?>">Natrag na&nbsp;<i class="fas fa-blog"></i></a>
    <hr class="post-separator">
    <?php
}

echo 'ovo je single-post';

get_footer();

