<?php
/**
 * Template Name: Galerija slika
 * 
 */

load_header();
/**
 * Jedna je parent Galerija page
 * Može biti parent ili child
*/

if(wp_get_post_parent_id(get_the_id())) {
    $parent=wp_get_post_parent_id(get_the_id());
} else {
    $parent=get_the_id();
}

/**
 * Query za child page - stranice u Galeriji i koje imaju ovaj template
 */
$args=array(
    'post_type'      => 'page',
    'posts_per_page' => -1,
    'post_parent'    => $parent,
    'order'          => 'ASC',
    'orderby'        => 'menu_order'
);

$galeryPages=new WP_Query($args);

$count=$galeryPages->found_posts;

/**
 * Query za sadržaj parent stranice (Galerija)
 */
$args=array(
    'post_type'=>'page',
    'post__in'=>array($parent)
);

$parentPage=new WP_Query($args);
wp_reset_postdata(); 

/**
 * Pokažimo sadržaj Parent stranice  
*/

while($parentPage->have_posts()) {
    $parentPage->the_post();
    the_title();
    the_content();
}

/**
 * Pokažimo title i featured image child page-a 
*/
?>

<div class="wp_subpages-thumb">
    <?php
    while($galeryPages->have_posts()) {
        $galeryPages->the_post(); ?>
        <div class="wp_subpages-item">
        <a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>    
        <a href="<?php the_permalink(); ?>"><img src="<?php the_post_thumbnail('thumb'); ?></a>
        </div>
        <?php
    } ?>
</div>

<?php

/**
 * Pokažimo sadržaj child page-a jer smo došli na nju!
 * Inače smo na parentu (Galerija), a taj sadržaj smo već pokazali 
*/
wp_reset_postdata(); 
if(wp_get_post_parent_id(get_the_id())) {
    while(have_posts()){
        the_post();
        the_content();
        
    }
}

get_footer();