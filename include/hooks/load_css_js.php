<?php

function post_template_part_css() {
    wp_enqueue_style('post-sidebar', get_template_directory_uri().'/css/post-sidebar.css', 'single', '20210317', 'screen' );
    wp_enqueue_script('post-sidebar-js', get_template_directory_uri().'/js/post-sidebar.js', 'jQuery', '20220317', null);
    wp_enqueue_style('post-nav-list', get_template_directory_uri().'/css/post-nav-list.css', 'single', '2021021800', 'screen' );
}
add_action('get_template_part_include/template-parts/post', 'post_template_part_css');

function theme_css_js() {
    /* css normalize */
        //wp_enqueue_style('normalize', 'https://cdnjs.cloudflare.com/ajax/libs/modern-normalize/1.1.0/modern-normalize.min.css', false, null, 'screen');
        wp_enqueue_style('normalize', get_template_directory_uri().'/css/modern-normalize.min.css', false, '1.1.0', 'screen');
    /* google fonts NotoSansTC */
        wp_enqueue_style('notosanstc', 'https://fonts.googleapis.com/css2?family=Noto+Sans+TC:wght@300;400;500;600;700&display=swap', false);
    /* font style */
        wp_enqueue_style('font', get_template_directory_uri().'/css/font.css', array('normalize', 'notosanstc'), '2021051501', 'screen');
    /* general style */
        wp_enqueue_style('general-css', get_template_directory_uri().'/css/general.css', 'font', '2021061701', 'screen');
    /* jQuery */
        wp_enqueue_script('jQuery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js', false, null);
    /* general script */
        wp_enqueue_script('general-js', get_template_directory_uri().'/js/general.js', 'jQuery', '20220304', null);
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
    /* office member */
    if (is_post_type_archive('staff')) {
        wp_enqueue_style('staff', get_template_directory_uri().'/css/archive-staff.css', 'general-css', '2021022500', 'screen'); 
    }
    /* departments */
    if (is_page('departments')) {
        wp_enqueue_script('depart-js', get_template_directory_uri().'/js/department.js', 'general-js', false, null);
    }
    /* dean */
    if (is_post_type_archive('dean')) {
        wp_enqueue_style('dean', get_template_directory_uri().'/css/archive-dean.css', 'general-css', '20210317', 'screen'); 
    }
    /* regulations */
    if (is_page('regulations')) {
        wp_enqueue_style('regulations-css', get_template_directory_uri().'/css/regulations.css', 'singular', '2022040800', 'screen');
        wp_enqueue_script('regulations-js', get_template_directory_uri().'/js/regulations.js', 'general-js', false, null);
    }
    if (is_page('research_areas')) {
        wp_enqueue_style('research_areas-css', get_template_directory_uri().'/css/research_areas.css', 'singular', '2022041500', 'screen');
        wp_enqueue_script('research_areas-js', get_template_directory_uri().'/js/research_areas.js', 'general-js', false, null);
    }
    if (is_page('student_abroad')) {
        wp_enqueue_style('student_abroad-css', get_template_directory_uri().'/css/student_abroad.css', 'singular', '2022041500', 'screen');
        wp_enqueue_script('student_abroad-js', get_template_directory_uri().'/js/student_abroad.js', 'general-js', false, null);
    }
}
add_action('wp_enqueue_scripts', 'theme_css_js');


function add_async_attr_to_script( $tag, $handle, $src ) 
{
    $scriptArr = array();

    if (in_array($handle, $scriptArr)) 
    {
        $tag = str_replace( 'src=', 'async src=', $tag );
    }
    return $tag;
}
//add_filter( 'script_loader_tag', 'add_async_attr_to_script', 10, 3 );


function add_defer_attr_to_script( $tag, $handle, $src ) 
{
    $scriptArr = array();

    if (in_array($handle, $scriptArr)) 
    {
        $tag = str_replace( 'src=', 'defer src=', $tag );
    }
    return $tag;
}
//add_filter( 'script_loader_tag', 'add_defer_attr_to_script', 10, 3 );

function make_stylesheet_async( $html, $handle, $href, $media )
{
    $styleArr = array('notosanstc');
    if(in_array($handle, $styleArr))
    {
        return str_replace('media=\''.$media.'\'', 'media="print" onload="this.media=\''.$media.'\'"', $html);
    }
    else
    {
        return $html;
    }
}
add_filter( 'style_loader_tag', 'make_stylesheet_async', 10, 4);


