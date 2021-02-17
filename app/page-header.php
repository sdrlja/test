<?php

function page_title_slogan($args = null){

    if(!isset($args['title'])){
        if(get_the_title()){
            $args['title']=get_the_title();
        } else {
            $args['title']='Foto Studio Blic';
        }
        $args['title']=get_the_title();
    }
    if(!isset($args['slogan'])) {
        if(get_field('page_header_slogan')){
            $args['slogan']=get_field('page_header_slogan');
        } else {
            $args['slogan']=get_bloginfo('description');
        }
    }

    if(!isset($args['image'])) {
        if(get_field('page_header_image')['sizes']['post-hero']){
            $args['image']=get_field('page_header_image')['sizes']['post-hero'];
        } else {
            $id=get_id_by_slug('/home');
            $images=get_field(('page_header_image'), $id);
            $args['image']=$images['sizes']['post-hero']; 
        }
    }
    return $args;
}