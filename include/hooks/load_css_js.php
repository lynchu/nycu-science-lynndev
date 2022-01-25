<?php

function post_sidebar_css() {
    wp_enqueue_style('post-sidebar', get_template_directory_uri().'/css/post-sidebar.css', 'single', '2021012100', 'screen' );
}
add_action('get_template_part_include/template-parts/post', 'post_sidebar_css');

function theme_css_js() {
    /* css normalize */
        //wp_enqueue_style('normalize', 'https://cdnjs.cloudflare.com/ajax/libs/modern-normalize/1.1.0/modern-normalize.min.css', false, null, 'screen');
        wp_enqueue_style('normalize', get_template_directory_uri().'/css/modern-normalize.min.css', false, '1.1.0', 'screen');
    /* google fonts NotoSansTC */
        wp_enqueue_style('notosanstc', 'https://fonts.googleapis.com/css2?family=Noto+Sans+TC:wght@300;400;600&display=swap', false );
    /* font style */
        wp_enqueue_style('font', get_template_directory_uri().'/css/font.css', array('normalize', 'notosanstc'), '2021051501', 'screen');
    /* general style */
        wp_enqueue_style('general-css', get_template_directory_uri().'/css/general.css', 'font', '2021061701', 'screen');
    /* jQuery */
        wp_enqueue_script('jQuery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js', false, null);
    /* general script */
        wp_enqueue_script('general-js', get_template_directory_uri().'/js/general.js', 'jQuery', false, null);
    /* post & page style */
    if(is_singular() && !is_front_page()) {
        wp_enqueue_style('singular', get_template_directory_uri().'/css/singular.css', 'general-css', '2021012101', 'screen');        
    }
    /* owl carousel gallery*/
    if (is_front_page()){
        wp_enqueue_style('owl-css', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css', 'general-css', null, 'screen');
        wp_enqueue_script('owl-js', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js', 'jQuery', false, null);
        wp_enqueue_script('gallery-js', get_template_directory_uri().'/js/gallery.js', 'general-js', false, null);
    }
    /* news*/
    if (is_category( array('all', 'announcements', 'events', 'awards', 'sdgs') )){
        wp_enqueue_style('news', get_template_directory_uri().'/css/news.css', 'font', '2021012100', 'screen');
    }
    
}
add_action('wp_enqueue_scripts', 'theme_css_js');