<?php get_header(); ?>

<div class="gallery_container">
    <?php
        $img_ids = parse_blocks(get_the_content())[0]['attrs']['ids'];
        get_template_part('include/widgets/gallery', '', array('slides' => $img_ids));
    ?>
</div>

<div class="navcard_container">
    <div class="navcard navcard_left">
        <?php
            get_template_part('include/widgets/navcard-news');
        ?>
    </div>

    <div class="navcard navcard_right">
        <?php
            get_template_part('include/widgets/navcard-events');
        ?>
    </div>

</div>

<style>
    .gallery_container {
        padding-top: 1.5rem;
    }

    .navcard_container {
        width: 75%;
        margin: 5vw 12.5%;
        display: flex;
        justify-content: space-between;
    }

    .navcard {
        position: relative;
    }
    .navcard_left:before{
        content: "";
        display: inline-block;
        width: 10rem;
        height: 4rem;
        background-size: 10rem 4rem;
        background-image: url(<?php bloginfo('template_url'); ?>/images/front-page_news.webp);
        margin-bottom: -0.2rem;
        margin-left: 2rem;
    }
    .navcard_left{
        width: 40%; 
    }
    .navcard_right{
        width: 50%;
    }

    .nav_card_item {
        width: 100%;
        height: 12rem;
        border-radius: 10px;
        box-shadow: 1px 3px 20px 0 rgba(0, 0, 0, 0.16);
        background-color: #eeedea;
        margin-bottom: 1.5rem;
        cursor: pointer;
    }

    .nav_card_item a {
        color: black;
        display: block;
        width: inherit;
        height: inherit;
        padding: 1rem 1rem;
    }

    .date {
        font-size: .8rem;
    }

    .post_title {
        font-weight: bold;
        font-size: 1.2rem;
    }

    .category_name {
        width: 5rem;
        line-height: 1.7;
        color: #f5f5f5;
        background-color: #0d1922;
        text-align: center;
        border-radius: 20px;
        font-size: .8rem;
    }

    .nav_card_more {
        width: 5rem;
        line-height: 3;
        color: #f5f5f5;
        background-color: #0d1922;
        text-align: center;
        border-radius: 10px;
        letter-spacing: .2rem;
        position: absolute;
        right: 0;
        margin-top: 1rem;
    }
    .nav_card_more a{
        display: block;
        width: inherit;
        height: inherit;
        color: #f5f5f5;
        font-size: .8rem;
    }
</style>

<?php get_footer(); ?>