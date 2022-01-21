<?php 
get_header(); 
// Start the Loop
while ( have_posts() ) : 
	the_post();
?>

<div id="post-title-area">
	<h1 id="post-title"><?php the_title(); ?></h1>
	<div id="top-right-rect"></div>
</div>
<div class="horizontal-divider"></div>
<div id="post-content-area">
	<div id="post-content"><?php the_content(); ?></div>
	<?php if(is_single()) { get_template_part('include/template-parts/post', 'sidebar'); } ?>
</div>
<div id="other-posts-area">
	<h2><?php _e('下則公告', 'nycu-science' ); ?></h2>
</div>

<?php
endwhile; 
// End of the loop. 
get_footer();
?>
