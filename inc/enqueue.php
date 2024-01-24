<?php

function bionatura_load_scripts() {
    // CSS
    wp_enqueue_style('main', get_template_directory_uri() . '/assets/css/main.css', [], null, 'all');

    // JS
    wp_enqueue_script('bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', ['jquery'], null, true);
    wp_enqueue_script('jquery.fancybox', get_template_directory_uri() . '/assets/js/jquery.fancybox.js', ['jquery'], null, true);
    wp_enqueue_script('jquery.flexslider', get_template_directory_uri() . '/assets/js/jquery.flexslider.min.js', ['jquery'], null, true);
    wp_enqueue_script('owl', get_template_directory_uri() . '/assets/js/owl.js', ['jquery'], null, true);
    wp_enqueue_script('swiper', get_template_directory_uri() . '/assets/js/swiper.min.js', [], null, true);
    wp_enqueue_script('isotope', get_template_directory_uri() . '/assets/js/isotope.min.js', ['jquery'], null, true);
    wp_enqueue_script('countdown', get_template_directory_uri() . '/assets/js/countdown.js', ['jquery'], null, true);
    wp_enqueue_script('simpleParallax', get_template_directory_uri() . '/assets/js/simpleParallax.min.js', [], null, true);
    wp_enqueue_script('appear', get_template_directory_uri() . '/assets/js/appear.js', ['jquery'], null, true);
    wp_enqueue_script('jquery.countTo', get_template_directory_uri() . '/assets/js/jquery.countTo.js', ['jquery'], null, true);
    wp_enqueue_script('sharer', get_template_directory_uri() . '/assets/js/sharer.js', [], null, true);
    wp_enqueue_script('validation', get_template_directory_uri() . '/assets/js/validation.js', ['jquery'], null, true);
    wp_enqueue_script('creote-extension', get_template_directory_uri() . '/assets/js/creote-extension.js', ['jquery'], null, true);
    wp_enqueue_script('google-api', 'https://maps.googleapis.com/maps/api/js?key=AIzaSyA-CE0deH3Jhj6GN4YvdCFZS7DpbXexzGU', ['jquery'], null, true);
    wp_enqueue_script('gmaps', get_template_directory_uri() . '/assets/js/gmaps.js', ['jquery'], null, true);
    wp_enqueue_script('map-helper', get_template_directory_uri() . '/assets/js/map-helper.js', ['jquery'], null, true);
}
add_action('wp_enqueue_scripts', 'bionatura_load_scripts');