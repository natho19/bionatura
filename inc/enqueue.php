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
    // wp_enqueue_script('validation', get_template_directory_uri() . '/assets/js/validation.js', ['jquery'], null, true);
    if (is_page('contact')) {
        wp_enqueue_script('acf-map', get_template_directory_uri() . '/assets/js/acf-map.js', ['jquery'], null, true);
    }
    wp_enqueue_script('creote-extension', get_template_directory_uri() . '/assets/js/creote-extension.js', ['jquery'], null, true);
}
add_action('wp_enqueue_scripts', 'bionatura_load_scripts');