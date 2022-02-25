<?php
get_header();
// Start the Loop
while ( have_posts() ) : the_post();
	$post_id = get_the_ID();
?>

<div id="post-title-area">
    <h1 id="post-title"><?php the_title(); ?></h1>
    <div id="top-right-rect"></div>
</div>
<div class="horizontal-divider"></div>
<div id="post-content-area">
    <div id="post-content"><?php the_content(); ?></div>
    <?php if( is_single() ) { get_template_part('include/template-parts/post', 'sidebar'); } ?>
</div>

<?php endwhile; ?>
<!-- End of the loop. -->

<?php if ( is_post_in_category('news', $post_id) ) { get_template_part('include/template-parts/post', 'nav-list'); } ?>

<?php 
get_footer();
?>
