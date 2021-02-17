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

    $akcijaTraje=get_field('akcija_vrijedi_do');

    $akcijaTraje=date_create_from_format('Ymd', $akcijaTraje);

    $akcijaTraje=date_format($akcijaTraje, 'd.m.Y');

    ?>

    



    <div class="single">

        <div class="single-info">
            <h2 class="single-title"><?php the_title(); ?></h2>
            <span><i class="fas fa-tag"></i>&nbsp;Akcija traje do&nbsp; - &nbsp;<?php echo $akcijaTraje; ?></i></span>
        </div>
        <div class="single-feature">
            <?php 
                if(has_post_thumbnail()) {
                    $thumb=the_post_thumbnail('medium_large');
                } else {
                    unset($thumb);
                }
            ?>

        <?php echo $thumb; ?>

        </div>

        

        <div class="single-content">

            <?php the_content(); ?>

        </div> 

    </div>

           

    <a class="post-link-link" href="<?php echo esc_url(get_post_type_archive_link('akcije')); ?>"><i class="fas fa-tag"></i>&nbsp;Sve akcije</a>

    <hr class="post-separator">

    <?php

}

echo 'single-akcije';

get_footer();

