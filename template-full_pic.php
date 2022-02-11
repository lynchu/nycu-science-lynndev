<?php
/*
    Template Name: 整頁圖片模板
    Template Post Type: page
*/
?>
<?php
get_header();
// Start the Loop
while ( have_posts() ) :
    the_post();
    the_content(); 
endwhile;
// End of the loop.
get_footer();
?>
