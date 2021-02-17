<?php

/**
 * Set some data to Globals and pass to headers on every page 
 * get_template_part('template-part/home-objave');
 */

$data=array(
    'title'=>get_bloginfo('name'),
    'slogan'=>get_bloginfo('description'),
    'image'=>null
);

$GLOBALS['hero_header']=$data;
load_header();
$GLOBALS['hero_header']=[]; ?>


<div class="front">
    <div class="front-content front-content-left">
    <a href="<?php echo get_post_type_archive_link('akcije'); ?>"><h2 class="front-content-title">Akcije</h2></a>
<?php

    get_template_part('template-part/home-akcije');

?>

    </div>
    <div class="front-content front-content-right">
    <a href="<?php echo esc_url(site_url('/objave')); ?>"><h2 class="front-content-title">Objave</h2></a>
<?php 
    get_template_part('template-part/home-objave');

?>
    
    </div>
</div>

<div class="carousel-content">
<?php 
    get_template_part('template-part/home-carousel');

?>
</div>


<!-- The dots/circles -->
<div style="text-align:center">
  <span class="dot" ></span>
  <span class="dot" ></span>
  <span class="dot" ></span>
</div>

<?php
echo 'ovo je front-page';
get_footer();
