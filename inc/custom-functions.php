<?php

// Images location
define('BIONATURA_IMG_URL', get_template_directory_uri() . '/assets/images/', false);

// Hide admin bar
add_filter('show_admin_bar', '__return_false');

// Disable Gutenberg
add_filter('use_block_editor_for_post', '__return_false');