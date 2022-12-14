<?php

require get_template_directory() . '/include/hooks/disable_comments.php';
require get_template_directory() . '/include/hooks/disable_author.php';
require get_template_directory() . '/include/hooks/hide_html-comment.php';
require get_template_directory() . '/include/hooks/hide_many.php';
require get_template_directory() . '/include/hooks/disable_wp-emoji.php';
require get_template_directory() . '/include/hooks/disable_wp-embed.php';
require get_template_directory() . '/include/hooks/load_css_js.php';
require get_template_directory() . '/include/hooks/restrict_restapi.php';
require get_template_directory() . '/include/hooks/custom_post_type.php';
require get_template_directory() . '/include/hooks/sidebar.php';
require get_template_directory() . '/include/hooks/add_category_class.php';


add_theme_support('menus');
add_theme_support('post-thumbnails');

require get_template_directory() . '/include/ACF/event_date.php';
require get_template_directory() . '/include/ACF/document.php';
require get_template_directory() . '/include/ACF/staff-info.php';
require get_template_directory() . '/include/ACF/dean-info.php';

require get_template_directory() . '/include/widgets/pagenavi.php';

/**
 * Checks if the post is in one of the categories or any child category. 
 * 
 * @param  int|string|array $category_ids (Single category id) or (comma separated string or array of category ids).
 * @param  int              $post_id      Post ID to check. Default to `get_the_ID()`.
 * @return bool true, iff post is in any category or child category.
 * 
 * source: https://wordpress.stackexchange.com/questions/155332/check-if-a-post-is-in-any-child-category-of-a-parent-category
 */
function is_post_in_category( $category_slugs, $post_id = null ) {
    $catObj = get_category_by_slug($category_slugs); 
    $catId = $catObj->term_id;
    $args = array(
        'include'  => $post_id ?? get_the_ID(),
        'category' => $catId,
        'fields'   => 'ids',
    );
    return 0 < count( get_posts( $args ) );
}

function new_excerpt_more($more) {
    return '...';
}
add_filter('excerpt_more', 'new_excerpt_more');

function set_cache_control()
{
    header('Cache-Control: max-age=31620000');
}
add_action( 'send_headers', 'set_cache_control' );

/**
 * print debug message to console
 *  
 * source: https://stackoverflow.com/questions/4323411/how-can-i-write-to-the-console-in-php
 */
function debug_to_console($data) {
    $output = $data;
    if (is_array($output))
        $output = implode(',', $output);

    echo "<script>console.log('Debug Objects: " . $output . "' );</script>";
}

// Missing Anti-clickjacking Header
header('X-Frame-Options: SAMEORIGIN');
