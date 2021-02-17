<?php
/**
 * Template Name: Gallery - parent page 
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

/**
 * Pokažimo naslov i sadržaj parent gallerije (ova stranica)
*/

while(have_posts()){
    the_post(); ?>
    <h2><?php the_title(); ?></h2>
    <?php the_content(); ?>
    <?php
    
}

/**
 * Query za child page - stranice u Galeriji i koje imaju ovaj template
 */
$args=array(
    'post_type'      => 'page',
    'posts_per_page' => -1,
    'post_parent'    => get_the_ID(),
    'order'          => 'ASC',
    'orderby'        => 'menu_order'
);


$galeryPages=new WP_Query($args);

$count=$galeryPages->found_posts;

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
        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('thumb'); ?></a>
        </div>
        <?php
    } ?>
</div>


<?php
wp_reset_postdata();

// dnd($galeryPages);
echo 'ovo je galery page parent';
get_footer();
