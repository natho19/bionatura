<?php

// Images location
define('BIONATURA_IMG_URL', get_template_directory_uri() . '/assets/images/', false);

// Hide admin bar
add_filter('show_admin_bar', '__return_false');

// Disable Gutenberg
add_filter('use_block_editor_for_post', '__return_false');

// Add custom image format 900x600
add_image_size('bionatura900x600', 900, 600, true);

// Theme support
function bionatura_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'bionatura_setup');

// Remove post type support
function bionatura_remove_post_type_support() {
	remove_post_type_support('page', 'editor');
	remove_post_type_support('page', 'thumbnail');
}
add_action('init', 'bionatura_remove_post_type_support', 10);