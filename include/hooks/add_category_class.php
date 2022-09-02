<?php
/**
 * add HTML class of body of single post, in form of category-[category's slug]
 * 
 * source: https://wordpress.stackexchange.com/questions/147247/custom-css-per-category-and-per-single-post-belong-in-each-category
 */
function single_post_body_class_add_categories( $classes ) {

// Only proceed if we're on a single post page
if ( !is_single() )
    return $classes;

// Get the categories that are assigned to this post
$post_categories = get_the_category();

// Loop over each category in the $categories array
foreach( $post_categories as $current_category ) {

    // Add the current category's slug to the $body_classes array
    $classes[] = 'category-' . $current_category->slug;

}

// Finally, return the $body_classes array
return $classes;
}
add_filter( 'body_class', 'single_post_body_class_add_categories' );