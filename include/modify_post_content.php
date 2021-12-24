<?php

// Insert post title after first image (if any)
function insert_post_title_after_first_image($content){
    if ( is_single() && in_the_loop() && is_main_query() ) {
        $output = preg_match_all('/(<figure.*?>.*?<\/figure>)/i', $content, $matches);
        $first_img = $matches[1][0];
        if (!empty($first_img)) {
            $content = str_replace($first_img, $first_img.'<h1>'.get_the_title().'</h1>', $content);
        }
        else {
            return '<h1>'.get_the_title().'</h1>'.$content;
        }
    }
    return $content;
}
add_filter( 'the_content' , 'insert_post_title_after_first_image' );