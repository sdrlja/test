<?php
/**
 * Load styles and main js app
 */
require get_theme_file_path('app/load-scripts.php');
/**
 * Add theme supports: title tag, feature-images and custom image size
 */
require get_theme_file_path('app/theme-supports.php');
/**
 * Register shortcodes
 */
require get_theme_file_path('app/short-codes.php');
/**
 * Get page background image, title and subtitle -- function 
 */
require get_theme_file_path('app/page-header.php');

/**
 * Get SVG logo paths
 */

 require get_theme_file_path('app/svg.php');

/**
 * Helper function dump and die 
 */
function dnd($arg) {
    echo '<--- DND output is --->';
    echo '<pre>';
    print_r($arg);
    echo '<pre>';
    // die('<--- DND end --->');
}

/**
 * Load apropriate header
 */
function load_header() {
    // if(!$args) {
    //     $headers=page_header($args);
    // }
    $user = wp_get_current_user();
        // print_r($user->ID);
        // print_r($user->caps);
        // print_r($user->user_nicename);
        // dnd($user->caps);
    if($user->caps==null) {
        // print_r($user->caps);
        // get_header('visitor');
        get_header('visitor');
    }
    if($user->caps['administrator']) {
        // print_r($user->caps);
        // get_header('user', $headers);
        get_header('visitor');
    }
    if($user->caps['studio']) {
        // print_r($user->caps);
        // get_header('lab', $headers);
        get_header('visitor');
    }
}

/**
 * Get page ID by path 
 */

 function get_id_by_slug($page_slug){
    $page=get_page_by_path($page_slug);
    $id=(int)get_option('page_on_front');

    if($page) {
        return $page->ID;
    } else {
        return $id;
    }
}

function is_parent($parentSlug, $childID){
/**
 * nađi id od parent-a by slug 
 * nađi id parent stranice od ovog child-a 
 * Ako su ID isti ta stranica je parent,
 * Vraća ID parent stranice  
 */
    $parent=get_id_by_slug($parentSlug);

    if(wp_get_post_parent_id($childID)==get_id_by_slug($parentSlug)) {
        $parentOfChild=wp_get_post_parent_id($childID);
    } else {
        $parentOfChild=null;
    }

    if ($parent== $parentOfChild) {
        return $parent;
    } else {
        return false;
    }
    
}

/**
 * php upload max size
 */

@ini_set( 'upload_max_filesize' , '128M' );
@ini_set( 'post_max_size', '128M');
@ini_set( 'memory_limit', '256M' );
@ini_set( 'max_execution_time', '300' );
@ini_set( 'max_input_time', '300' );