<?php

remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'rest_output_link_wp_head', 10);
remove_action('template_redirect', 'rest_output_link_header', 11, 0);
remove_action('wp_head', 'wp_generator');


// remove HTML meta tag
// <link rel='shortlink' href='http://example.com/?p=25' />
remove_action('wp_head', 'wp_shortlink_wp_head', 10);

// remove HTTP header
// Link: <https://example.com/?p=25>; rel=shortlink
remove_action('template_redirect', 'wp_shortlink_header', 11);

// hide rss generator version
function remove_wp_version_rss() {
    return '<generator>https://wordpress.org/</generator>';
}
add_filter('the_generator','remove_wp_version_rss');
