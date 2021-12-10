<?php
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'rest_output_link_wp_head', 10);
remove_action('template_redirect', 'rest_output_link_header', 11, 0);
remove_action('wp_head', 'wp_generator');

// hide rss generator version
function remove_wp_version_rss() {
    return '<generator>https://wordpress.org/</generator>';
}
add_filter('the_generator','remove_wp_version_rss');