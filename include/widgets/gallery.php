<?php
    // 相片藝廊
    /*
     *  @param  Array $slides   an array of image's ids of slides in the media library
     */
?>
<div class="gallery">

    <div class="gallery_prev">
        <img src="<?php bloginfo('template_url'); ?>/images/gallery-prev.svg" />
    </div>

    <div class="gallery_content">
        <div class="owl-carousel gallery_carousel">
<?php
            foreach($args['slides'] as $slide):
                $link = wp_get_attachment_caption($slide);
                if($link === ''):
?>
            <img src="<?= wp_get_attachment_image_url($slide, 'large'); ?>" />
<?php
                else:
?>
            <a href="<?= $link; ?>">
                <img src="<?= wp_get_attachment_image_url($slide, 'large'); ?>" />
            </a>
<?php
                endif;
            endforeach;
?>
        </div>
    </div>

    <div class="gallery_next">
        <img src="<?php bloginfo('template_url'); ?>/images/gallery-next.svg" />
    </div>

</div>