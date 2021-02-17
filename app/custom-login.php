<?php


function wpb_login_logo() { ?>
    <style type="text/css">
        #login h1 a, .login h1 a {
            background-image: url(<?php echo get_theme_file_uri('/img/android-chrome-192x192.png') ?>);
        height:100px;
        width:300px;
        background-size: 192px 109px;
        background-repeat: no-repeat;
        padding-bottom: 10px;
        }
    </style>

    <style type="text/css">
        .login {
            background-image: url(<?php echo get_theme_file_uri('/img/camera.jpg'); ?>);
        }
    </style>

<?php }
add_action( 'login_enqueue_scripts', 'wpb_login_logo' );

function wpb_login_logo_url() {
    return home_url();
}
add_filter( 'login_headerurl', 'wpb_login_logo_url' );
 
function wpb_login_logo_url_title() {
    return 'Foto Studio Blic Mostar - Oživite svoje uspomene';
}
add_filter( 'login_headertitle', 'wpb_login_logo_url_title' );