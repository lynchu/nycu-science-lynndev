<?php 
$post_id = get_the_ID();
$args = array(  
    'post__not_in' => array($post_id),
    'category_name' => 'news',
    'post_status' => 'publish',
    'posts_per_page' => 4, 
    'orderby' => 'date', 
    'order' => 'DEC', 
);
$loop = new WP_Query( $args ); 
if ( $loop->have_posts() ) :
?>
<div id="post-list-area">
	<h2><?php _e( '下則公告', 'nycu-science' ); ?></h2>
	<div id="post-list-wrap">
		<div id="arrow-previous" class="arrow"></div>
		<ul id="post-list">
<?php 
    while ( $loop->have_posts() ) : $loop->the_post(); 
?>		
		<li class="post-list-item">
			<div class="round-edge"></div>
			<div class="info">
				<div class="text-wrapper">
					<div class="date"><?php echo get_the_date('Y.m.d'); ?></div>
					<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
				</div>
				<div class="post-list-tags">
					<img class='tag-icon'
							src="<?php echo get_template_directory_uri() . '/images/tag-icon.png';?>"
							alt="post tags: ">
					<p><?php the_tags("","·"); ?></p>
				</div>
			</div>
		</li>
<?php
    endwhile; 
?>
		</ul>
		<div id="arrow-next" class="arrow"></div>
	</div>
</div>
<?php 
endif;
?>