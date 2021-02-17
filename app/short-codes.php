<?php
function register_shortcodes(){
    add_shortcode('contacts', 'get_contacts_function');
    add_shortcode('map', 'get_map_function');
    add_shortcode('social-networks', 'get_social_networks_function');
 }

add_action( 'init', 'register_shortcodes');

function get_contacts_function(){
    ob_start();
        get_template_part('template-part/contacts'); // prvi argument je dir/datoteka ili dir/slug - datoteka
    return ob_get_clean();
}

function get_map_function(){
    ob_start();
        get_template_part('template-part/map');
    return ob_get_clean();
}

function get_social_networks_function(){
    ob_start();
        get_template_part('template-part/social-networks');
    return ob_get_clean();
}