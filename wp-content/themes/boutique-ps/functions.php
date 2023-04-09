<?php

add_action('wp_enqueue_scripts', 'theme_name_scripts');
function theme_name_scripts()
{
    wp_enqueue_style('swiper-style', get_template_directory_uri() . '/assets/vendors/swiper/swiper-bundle.min.css');
    wp_enqueue_style('style-name', get_template_directory_uri() . '/assets/sass/main.css');
    wp_enqueue_script(
        'travelline-booking',
        get_template_directory_uri() . '/assets/js/travelline.js',
        array(),
        '1.0.0',
        true
    );
    wp_enqueue_script(
        'parallax',
        get_template_directory_uri() . '/assets/js/parallax.min.js',
        array(),
        '1.0.0',
        true
    );
    wp_enqueue_script(
        'swiper',
        get_template_directory_uri() . '/assets/vendors/swiper/swiper-bundle.min.js',
        array(),
        '1.0.0',
        true
    );
    wp_enqueue_script(
        'main-script',
        get_template_directory_uri() . '/assets/js/script.js',
        array(),
        '1.0.0',
        true
    );
}

//function remove_admin_login_header() {
//    remove_action('wp_head', '_admin_bar_bump_cb');
//}
//add_action('get_header', 'remove_admin_login_header');

?>
