<?php get_header(); ?>

首頁測試頁面
<div class="gallery_container">
    <?php
        $img_ids = parse_blocks(get_the_content())[0]['attrs']['ids'];
        get_template_part('include/widgets/gallery', '', array('slides' => $img_ids));
    ?>
</div>
<style>
.gallery {
    position: relative;
    display: flex;
    flex-direction: row;
    align-items: center;
    width: 70%;
    margin-left: 15%;
}

.gallery_content {
    width: 100%;
}

.gallery .owl-item img{
    border-radius: 20px;
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

    .gallery_prev {
        position: absolute;
        left: 0.3125rem;
        width: 1.2rem;
        z-index: 2;
        cursor: pointer;
    }
    .gallery_next {
        position: absolute;
        right: 0.3125rem;
        width: 1.2rem;
        z-index: 2;
        cursor: pointer;
    }

}
</style>
<?php get_footer(); ?>