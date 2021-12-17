<?php

function custom_post_type(){
    register_post_type(
        'news',
        array(
            'label' => __('最新消息', ''),
            'menu_position' => 4,
            'taxonomies' => array('category'),
            'public' => true,
            'show_in_rest' => true,
            'supports' => array('title', 'editor', 'revisions')
        )
    );
}
add_action('init', 'custom_post_type');