<?php 
/**
 * Set some data to Globals and pass to headers on every page 
 */

$data=array(
    'title'=>'Naše objave',
    'slogan'=>'Pratite naše najnovije objave',
    'image'=>null
);

$GLOBALS['hero_header']=$data;

load_header();

$GLOBALS['hero_header']=[];


while(have_posts()) {
    the_post(); ?>

    <div class="post">
        <div class="post-image">
        <?php 
            if(has_post_thumbnail()) {
                $thumb=the_post_thumbnail('thumb');
            } else {
                unset($thumb);
            }
        ?>
        
        <img src="<?php echo $thumb; ?>" alt="">
        </div>
        <div class="post-preview">
        <a class="post-link" href="<?php the_permalink(); ?>"><h2 class="post-title"><?php the_title(); ?></h2></a>
            <?php
                if(has_excerpt()) {
                    the_excerpt();
                    ?>
                    <a class="post-link-link" href="<?php the_permalink(); ?>">&nbsp;Više...</a> 
                    <?php
                } else {
                    echo '<p>'. wp_trim_words(get_the_content(), 20). '</p>';
                    ?>
                    <a class="post-link-link" href="<?php the_permalink(); ?>">&nbsp;Više...</a> 
                    <?php
                }
            ?>
        </div>
        
    </div>
    <hr class="post-separator">

    
<?php } ?>

<div class="pagination">
    <?php echo paginate_links(); ?>
</div>
<?php 


echo 'ovo je home.php';
get_footer(); 
