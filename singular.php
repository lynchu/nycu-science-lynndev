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
    <?php if(is_single()) { get_template_part('include/template-parts/post', 'sidebar'); } ?>
</div>

<script>
    $(()=>{
        if($('figure').hasClass('full-pic')){
            $('#post-content').css('max-width', 'unset');
        }
    });
</script>

<?php endwhile; ?>
<!-- End of the loop. -->
<?php 
if ( get_post_type( $post_id ) == 'news' ) :
	$args = array(  
		'post__not_in' => array($post_id),
		'post_type' => 'news',
		'post_status' => 'publish',
		'posts_per_page' => 4, 
		'orderby' => 'date', 
		'order' => 'DEC', 
	);
?>
<div id="post-list-area">
	<h2>下則公告</h2>
	<div id="post-list-wrap">
		<div id="arrow-previous" class="arrow">←</div>
		<ul id="post-list">
<?php 
	$loop = new WP_Query( $args ); 
	while ( $loop->have_posts() ) : $loop->the_post(); 
?>		
		<li class="post-list-item">
			<dev class="round-edge"></dev>
			<dev class="date"><?php echo get_the_date('Y.m.d'); ?></dev>
			<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
		</li>
<?php
		//the_tags( 'Tags: ', ', ', '<br />' );
	endwhile; 
?>
		</ul>
		<div id="arrow-next" class="arrow">→</div>
	</div>
</div>

	<!-- Do special_cat stuff... -->
<?php 
endif;
get_footer();
?>
