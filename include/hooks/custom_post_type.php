<?php

function custom_post_type(){
    register_post_type(
        'staff',
        array(
            'label' => __('院辦公室成員', ''),
            'menu_position' => 4,
            'taxonomies' => array('category'),
            'public' => true,
            'publicly_queryable' => true,
            'has_archive' => true,
            'show_in_rest' => true,
            'supports' => array('title', 'editor', 'revisions'),
            'taxonomies' => array('post_tag')
        )
    );
    register_post_type(
        'dean',
        array(
            'label' => __('現任主管', ''),
            'menu_position' => 5,
            'taxonomies' => array('category'),
            'public' => true,
            'publicly_queryable' => true,
            'has_archive' => true,
            'show_in_rest' => true,
            'supports' => array('title', 'editor', 'revisions'),
            'taxonomies' => array('post_tag')
        )
    );
}
add_action('init', 'custom_post_type');

// Redirect CPT Singles
function prefix_redirect_single_cpt() {
    if ( is_singular('staff') ) {
        global $post;
        $redirect_link = get_post_type_archive_link( 'staff' );
        wp_safe_redirect( $redirect_link, 302 );
        exit;
    }
    if ( is_singular('dean') ) {
        global $post;
        $redirect_link = get_post_type_archive_link( 'dean' );
        wp_safe_redirect( $redirect_link, 302 );
        exit;
    }
}
add_action( 'template_redirect', 'prefix_redirect_single_cpt' );
