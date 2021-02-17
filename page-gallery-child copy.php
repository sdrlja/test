<?php
/**
 * Template Name: Gallery - child page -copy zbog snipeta
 *
 * 
*/

get_header();
?>

<div class="page-content">

<?php

if(wp_get_post_parent_id(get_the_id())){
    ?>
    <a href="<?php echo get_permalink(wp_get_post_parent_id(get_the_id())); ?>">Sve galerije</a>
    
    <?php
}

while(have_posts()){
    the_post();
    the_content();
    
}



if (has_block('gallery', $post->post_content)) {
    $post_blocks = parse_blocks($post->post_content);
    $ids = $post_blocks[0]['attrs']['ids'];
    // if there is not a gallery block do this
} else {
    // gets the gallery info
    $gallery = get_post_gallery( $post->ID, false );
    // makes an array of image ids
    $ids = explode ( ",", $gallery['ids'] );
}

$count=count($ids);
// wp_get_attachment_image( int $attachment_id, string|int[] $size = 'thumbnail', bool $icon = false, string|array $attr = '' )
?>
<div class="wp-block-gallery">
    <div class="wp-subpages-item">

<?php

foreach ($ids as $id) { ?>
     
    <a href="<?php  echo wp_get_attachment_url($id); ?>"><img src="<?php echo wp_get_attachment_image($id, 'thumb', false, array('class'=>'wp-post-image')); ?></a>
    <?php
    // echo wp_get_attachment_image($id, 'thumbnail', false, 'wp-post-image');
} ?>
<ul>
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post();
    
        $attachments = get_posts( array(
            'post_type'   => 'attachment',
            'numberposts' => -1,
            'post_status' => null,
            'post_parent' => $post->ID
        ) );
         
        if ( $attachments ) {
            foreach ( $attachments as $attachment ) {
                ?>
                <li><?php echo wp_get_attachment_image( $attachment->ID, 'thumb' ); ?>
                    <p><?php echo apply_filters( 'the_title', $attachment->post_title ); ?></p>
                </li>
                <?php
            }
        }
    endwhile; endif; ?>
</ul>  


        </div>
    </div>
</div>
<?php
get_footer();
