<?php 

load_header();

if(get_post_type()=='cijene') {
    // wp_redirect(site_url('/cijenik'));

    while(have_posts()){

        the_post(); 
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
}
echo 'ovo je single.php';
get_footer();