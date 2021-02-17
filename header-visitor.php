<?php

/**
 * Load page headers Title, Sloga i background image. 
 * funkcija da vrati title, slogan i image za svaki post i page 
 */
    if(isset($GLOBALS['hero_header'])) {
        $args=$GLOBALS['hero_header']; 
    } else {
        $args=[];
    }
    
    // dnd($args);
    $headers=page_title_slogan($args);// return od funkcije page_title_slogan();

    $pageFront=is_front_page()? 'active': null;
    $pageBlog=is_home()? 'active' : null;
    $pageStudio = is_page('studio') ?   'active': null;
    $pageAkcija = is_archive('akcija') ? 'active': null;
    $pageCjenik = is_page('cijenik') ? 'active' : null;

    if(is_page('galerija') or is_parent('galerija', get_the_id())) {
        $pageGalerija='active';
    } else {
        $pageGalerija=null;
    }

    
?>
<!DOCTYPE html>
<html lang="<?php echo get_bloginfo('language'); ?>">
<head>
    <meta charset="<?php echo get_bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/css/splide.min.css">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<svg aria-hidden="true" style="position: absolute; width: 0; height: 0; overflow: hidden;" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
<defs>
    <?php echo logo_out();  ?>
    
</defs>

<div class="header-content" style="background-image: linear-gradient(to bottom, #11111157, #1111114d), url('<?php echo $headers['image']; ?>');">
    <div class="header-menu">
        <div class="header-logo">
        <a href="<?php echo site_url('/'); ?>">
        <svg class="header-logo-svg">
            <use xlink:href="#fotostudio-logo"></use>
        </svg>
        </a>     
        </div>
        <div class="header-navigation">
            <ul class="menu-nav">
                <li class="menu-nav-item <?php echo $pageFront; ?>"><a href="<?php echo esc_url(site_url()); ?>"><i class="fas fa-home"></i>&nbsp;Studio</a></li>
                <li class="menu-nav-item <?php echo $pageStudio ?>"><a href="<?php echo esc_url(site_url('/studio')); ?>"><i class="fas fa-camera-retro"></i>&nbsp;O nama</a></li>
                <li class="menu-nav-item <?php echo $pageCjenik ?>"><a href="<?php echo esc_url(site_url('/cijenik')); ?>"><i class="fas fa-dollar-sign"></i>&nbsp;Cijenik</a></li>
                <li class="menu-nav-item <?php echo $pageAkcija ?>"><a href="<?php echo esc_url(site_url('/akcija')); ?>"><i class="fas fa-tag"></i>&nbsp;Akcija</a></li>
                <li class="menu-nav-item <?php echo $pageGalerija ?>"><a href="<?php echo esc_url(site_url('/galerija')); ?>"><i class="fas fa-image"></i>&nbsp;Galerija</a></li>
                <li class="menu-nav-item <?php echo $pageBlog; ?>"><a href="<?php echo esc_url(site_url('/objave')); ?>"><i class="fas fa-blog"></i>&nbsp;Objave</a></li>
                
            </ul> 
        </div>
        <div class="header-site-util">
            <ul class="menu-utils">
                <li class="menu-utils-item"><a href="<?php echo wp_login_url(); ?>"><i class="fas fa-user"></i>&nbsp;Login</a></li>
                <li class="menu-utils-item"><a href="<?php echo esc_url(site_url('/wp-signup.php')); ?>"><i class="fas fa-user-plus"></i>&nbsp;Register</a></li>
            </ul>
        </div>
        <div class="header-mobile-menu">
            <ul class="menu-open">
                <li class="menu-open-item mobile"><i class="fas fa-bars"></i></li>
            </ul>
        </div>
        
    </div>

    <div class="header-title">
        <h1><?php echo $headers['title']; ?></h1>
        <h2><?php echo $headers['slogan']; ?></h2>
    </div>

    <!-- Mobile menu, normaly closed -->
    
    
    
    <?php 
    get_template_part('template-part/mobile','menu' );
    get_template_part('template-part/page','links' );
    ?>
    
    

</div> <!-- close of  header -->
Dont't forget to replace me later - VISITOR HEADER

<?php 
    if(is_page('cijenik')) {
        $class=' page-content-cijenik';
    } else {
        $class=null;
    }

?>
<div class="page-content<?php echo $class; ?>">
