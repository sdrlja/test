<?php
$args=array(
    'post_type'=>'post',
    'posts_per_page'=>2
);
$posts=new WP_Query($args);

while($posts->have_posts()) {
    $posts->the_post(); ?>

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
                            <a class="post-link-link" href="<?php the_permalink(); ?>">&nbsp;Pogledaj&nbsp;&raquo;</a> 
                            <?php
                        } else {
                            echo '<p>'. wp_trim_words(get_the_content(), 20). '</p>';
                            ?>
                            <a class="post-link-link" href="<?php the_permalink(); ?>">&nbsp;Pogledaj&nbsp;&raquo;</a> 
                            <?php
                        }
                    ?>
            </div>
        </div>
    <hr class="post-separator">  
<?php } ?>