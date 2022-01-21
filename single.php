<?php 
get_header(); 
// Start the Loop
while ( have_posts() ) : 
	the_post();
	$post_id = get_the_ID();
	$colabs = get_post_meta( $post_id, '合作單位', true );
	$docs = get_post_meta( $post_id, '側欄附件', false );
?>

<div id="post-title-area">
	<h1 id="post-title"><?php the_title(); ?></h1>
	<div id="top-right-rect"></div>
</div>
<div class="horizontal-divider"></div>
<div id="post-content-area">
	<div id="post-content"><?php the_content(); ?></div>
	<!-- Sidebar Start -->
	<div id="post-sidebar" class="sticky">
		<div id="post-sidebar-info" class="post-sidebar-item">
			<h2 class="post-sidebar-title">
				<div class="post-sidebar-title-eng">Info</div>
				<div class="post-sidebar-title-cht">相關資訊</div>
			</h2>
			<p><?php _e( '類別：', 'nycu-science' ); the_category(' '); ?></p>
			<p><?php _e( '發布日期：', 'nycu-science' ); the_date('Y.m.d'); ?></p>
			<div class="horizontal-divider"></div>
		</div>
		<?php if($colabs): ?>
		<div id="post-sidebar-colab" class="post-sidebar-item">
			<p><?php _e( '合作單位：', 'nycu-science' ); ?></p>
			<p><?php echo $colabs; ?></p>
			<div class="horizontal-divider"></div>
		</div>
		<?php endif; ?>
		<?php if($docs): ?>		
		<div id="post-sidebar-document" class="post-sidebar-item">
			<h2 class="post-sidebar-title">
				<div class="post-sidebar-title-eng">Document</div>
				<div class="post-sidebar-title-cht">附件</div>
			</h2>
			<div id="post-sidebar-document-links">
			<?php foreach ($docs as $val): ?>
				<div class="post-sidebar-document-link">
					<img id='post-sidebar-download-icon'
						src="<?php echo get_template_directory_uri() . '/images/download-icon.png';?>"
						alt="">
					<?php echo $val; ?>
				</div>
			<?php endforeach; ?>
			</div>
			<div class="horizontal-divider"></div>
		</div>
		<?php endif; ?>
		<div id="post-sidebar-share" class="post-sidebar-item">
			<h2 class="post-sidebar-title">
				<div class="post-sidebar-title-eng">Share</div>
				<div class="post-sidebar-title-cht">分享</div>
			</h2>
			<div class='post-sidebar-icons'>
				<img class='post-sidebar-share-icon' 
					src="<?php echo get_template_directory_uri() . '/images/fb-icon.png';?>"
					alt="share post by facebook">
				<img class='post-sidebar-share-icon' 
					src="<?php echo get_template_directory_uri() . '/images/mail-icon.png';?>"
					alt="share post by email">
				<img class='post-sidebar-share-icon' 
					src="<?php echo get_template_directory_uri() . '/images/link-icon.png';?>"
					alt="copy post link">
			</div>
			<div class="horizontal-divider"></div>
		</div>
		<div id="post-sidebar-tags" class="post-sidebar-item">
			<img id='post-sidebar-tag-icon'
					src="<?php echo get_template_directory_uri() . '/images/tag-icon.png';?>"
					alt="post tags: ">
			<p><?php the_tags("","<br>"); ?></p>
		</div>
	</div>
	<!-- Sidebar End -->
</div>
<div id="other-posts-area">
	<h2><?php _e('下則公告', 'nycu-science' ); ?></h2>
</div>

<?php
endwhile; 
// End of the loop. 
get_footer();
?>
