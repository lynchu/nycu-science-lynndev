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
            <img src="<?php echo wp_get_attachment_image_url($slide, 'large'); ?>" />
<?php
                else:
?>
            <a href="<?php echo $link; ?>">
                <img src="<?php echo wp_get_attachment_image_url($slide, 'large'); ?>" />
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

<style>
    .gallery {
        position: relative;
        display: flex;
        flex-direction: row;
        align-items: center;
        width: 60vw;
        margin-left: 20%;
    }

    .gallery_content {
        width: 100%;
        height: 30vw;
        border-radius: 20px;
        overflow: hidden;
    }

    .gallery .owl-item {
        width: 100%;
        height: 30vw;
        position: relative;
    }

    .gallery .owl-item img {
        width: 100%;
        position: absolute;
        top:50%;
        left: 50%;
        transform: translate(-50%, -50%);
    }

    /* Mobile Style */
    @media only screen and (max-width: 768px) {

        .gallery_prev,
        .gallery_next {
            display: none;
        }

    }

    /* Desktop Style */
    @media screen and (min-width: 769px) {

        .gallery_prev,
        .gallery_next {
            position: absolute;
            width: 35px;
            height: 35px;
            z-index: 2;
            cursor: pointer;
        }

        .gallery_prev {
            left: -1rem;
        }

        .gallery_next {
            right: -1rem;
        }

        .gallery_next img,
        .gallery_prev img {
            width: 35px;
            height: 35px;
        }

    }
</style>