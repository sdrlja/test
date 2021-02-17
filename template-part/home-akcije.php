<?php 
$args=array(
        'post_type'=>'akcije',
        'post_per_page'=>-1
    );
    $akcije=new WP_Query($args);

    while($akcije->have_posts()) {
        $akcije->the_post();
    }
        
$today=date('Ymd');

$akcije=new WP_Query(array(
    'post_type'    => 'akcije',
    'posts_per_page'=>2,
    'meta_key'=>'akcija_vrijedi_do',
    'order_by'=>'meta_val_num',
    'order'=>'ASC',
    'meta_query'=>array(
        array(
            'key'=>'akcija_vrijedi_do',
            'compare'=>'>=',
            'value'=>$today,
            'type'=>'numeric'
        )
    )
));

while($akcije->have_posts()) {
    $akcije->the_post(); 
    $akcijaTraje=get_field('akcija_vrijedi_do');
    $akcijaTraje=date_create_from_format('Ymd', $akcijaTraje);
    $akcijaTraje=date_format($akcijaTraje, 'd.m.Y');
    ?>
    
    <div class="post">
        <div class="post-image">
            <?php 
                if(has_post_thumbnail()) {
                    $thumb=the_post_thumbnail('thumb');
                } else {
                    unset($thumb);
                }
            ?>
        <?php echo $thumb; ?>      
        </div>
        
        <div class="post-preview">
            <a class="post-link" href="<?php the_permalink(); ?>"><h2 class="post-title"><?php the_title(); ?></h2></a>
            <span class="post-akcijado"><i class="fas fa-tag"></i>&nbsp;Akcija do:&nbsp;<?php echo $akcijaTraje; ?></span>
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
<?php }
