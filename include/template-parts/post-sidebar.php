	<?php
    $post_id = get_the_ID();
	$colabs = get_post_meta( $post_id, '合作單位', true );
	//$docs = get_post_meta( $post_id, '側欄附件', false );
	$acf_docs = array(
		get_field( 'document1', $post_id ),
		get_field( 'document2', $post_id ),
		get_field( 'document3', $post_id ),
		get_field( 'document4', $post_id ),
		get_field( 'document5', $post_id )
	);
	$docs = array();
	foreach ($acf_docs as $val):
		if($val):
			array_push($docs, $val);
		endif;
	endforeach;
    ?>
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
					<a href="<?php echo $val['url']; ?>"><?php echo $val['filename']; ?></a>
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
				<a href="<?php echo "https://www.facebook.com/sharer/sharer.php?u=".get_permalink(); ?>" target="_blank">
					<img class='post-sidebar-share-icon' 
						src="<?php echo get_template_directory_uri() . '/images/fb-icon.png';?>"
						alt="share post by facebook">
				</a>
				<!--<img class='post-sidebar-share-icon' 
					src="<//?php echo get_template_directory_uri() . '/images/mail-icon.png';?>"
					alt="share post by email">-->
				<a id="copy-link-btn" data-clipboard-text="<?php echo get_permalink(); ?>">
					<img class='post-sidebar-share-icon' 
						src="<?php echo get_template_directory_uri() . '/images/link-icon.png';?>"
						alt="copy post link">
					<span class="tooltip"><span class="tooltiptext"><?php _e("已複製", "nycu-science"); ?></span></span>
				</a>
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