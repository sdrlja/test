<?php 
/**
 * Učitavamo carousel slides iz baze - ovo je IZDVAJAMO 
 */

$args=array(
    'post_type'=>'slide',
    'post_per_page'=>-1,
    'order_by'=>'title',
    'order'=>'ASC',

);
$slides=new WP_Query($args);

if($slides->found_posts) {
    $count=0;
    ?>
    
    
    <div class="splide">
	<div class="splide__track">
		<ul class="splide__list">
        <?php
            while($slides->have_posts()) {
                $slides->the_post();
                $count++;
            
        
        ?>
			<li class="splide__slide">
               
                <h4 class="carousel-title"><?php the_title(); ?></h4>
                
                    <img class="carousel-img" src="<?php echo get_field('slika')['sizes']['slajd-size'] ?>">
                
                <p class="carousel-text"><?php echo get_field('opis'); ?></p>
            </li>
        <?php } ?>
		</ul>
	</div>
    </div>
    <?php } 