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

$args=array(
    'post_type'=>'cijene',
    'posts_per_page'=>-1,
); ?>

    <?php the_content(); ?>
    <div class="cards-container">

<?php

// //linear-gradient(to botttom, #333, #333)

$cijenik=new WP_Query($args);



while($cijenik->have_posts()){

    $cijenik->the_post(); 
    $frontImg=get_field('prednja_slika')['sizes']['card-face'];

    if(get_field('zadnja_slika')['sizes']['card-face']) {
        $backImg=get_field('zadnja_slika')['sizes']['card-face'];
    } else {
        $backImg=$frontImg;
    }
    
    ?>

    <div class="card">
        <div class="card-front" style="background-image: linear-gradient(to bottom, #77777751, #77777751), url(<?php echo $frontImg; ?>);"> 
            <h2 class="card-title"><?php the_title(); ?></h2>
            <h4 class="card-opis"><?php echo get_field('opis_cjenika'); ?></h4>
        <div class="card-cta">
            <span>Detaljnije</span>
        </div>
        </div>

        <div class="card-back" style="background-image: linear-gradient(to bottom, #77777751, #77777751), url(<?php echo $backImg; ?>);">

            <h2 class="card-title"><?php the_title(); ?></h2>

            <h4 class="card-usluga"><?php echo get_field('usluga_ukljucuje'); ?></h4>

            <?php the_content(); ?>

            <h4 class="card-cijena"><?php echo get_field('cijena'); ?></h4>

        </div>

    </div>

<?php }

wp_reset_postdata();



?>

</div>



<?php 

echo 'ovo je page-cijenik';

get_footer();

