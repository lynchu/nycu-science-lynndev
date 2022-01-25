<?php get_header(); ?>

<div class="gallery_container">
    <?php
        $img_ids = parse_blocks(get_the_content())[0]['attrs']['ids'];
        get_template_part('include/widgets/gallery', '', array('slides' => $img_ids));
    ?>
</div>

<div class="navcard_container">

    <?php
        get_template_part('include/widgets/navcard-news');
    ?>

    <?php
        get_template_part('include/widgets/navcard-events');
    ?>

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
        display: flex;
        flex-direction: column;
        align-items: end;
    }

    .navcard_r {
        width: 50%;
    }

    .navcard_l {
        width: 40%;
    }

    .navcard_left:before {
        content: "";
        display: inline-block;
        width: 10rem;
        height: 4rem;
        background-size: 10rem 4rem;
        background-image: url(<?php bloginfo('template_url');
        ?>/images/front-page_news.svg);
        margin-bottom: -0.2rem;
        margin-left: 2rem;
    }

    .navcard_right:before {
        content: "";
        display: inline-block;
        width: 10rem;
        height: 4rem;
        background-size: 10rem 4rem;
        background-image: url(<?php bloginfo('template_url');
        ?>/images/front-page_events.svg);
        margin-bottom: -0.2rem;
        margin-left: 20rem;
    }

    .navcard_right {
        /* box-shadow: 2px 6px 20px 0 rgba(0, 0, 0, 0.16); */
        border-radius: 20px;
    }

    .navcard_right .nav_card_item {
        width: 100%;
        height: 12rem;
        /* margin-bottom: 1.5rem; */
        cursor: pointer;
        /* border-bottom: 1px groove; */
    }

    .navcard_left .nav_card_item {
        width: 100%;
        /* height: 12rem; */
        border-radius: 10px;
        box-shadow: 1px 3px 20px 0 rgba(0, 0, 0, 0.16);
        /* background-color: #eeedea; */
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

    .navcard_left a {
        border-radius: 10px;
    }

    .navcard_right a {
        display: flex;
        flex-direction: row;
        /* border-bottom: 1px groove; */
        border-bottom: 1px solid #c7c8cb;
        padding-left: 0;
    }

    .navcard_right .nav_card_item .date {
        flex: 1;
        text-align: center;
        font-weight: 300;
        /* color: rgba(0, 0, 0, 0.5); */
    }

    .navcard_right .nav_card_item .year,
    .navcard_right .nav_card_item .day {
        font-size: 1.5rem;
    }

    .navcard_right .nav_card_item .year {
        margin-top: 2rem;
        letter-spacing: 2px;
    }

    .navcard_right .nav_card_item .post_title_content {
        flex: 4;
    }

    .navcard_right .nav_card_item .post_excerpt {
        text-align: justify;
    }

    .date {
        font-size: .8rem;
    }

    .post_title {
        font-weight: 600;
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
        width: 6rem;
        height: 2.5rem;
        line-height: 3;
        color: #f5f5f5;
        background-color: #0d1922;
        text-align: center;
        border-radius: 10px;
        letter-spacing: .2rem;
        position: relative;
        right: 0;
        margin-top: 1rem;
    }

    .nav_card_more a {
        display: block;
        width: inherit;
        height: inherit;
        color: #f5f5f5;
        font-size: .8rem;
    }

    .nav_card_item a {
        background: linear-gradient(135deg, #5866f7 50%, #eeedea 50%);
        position: relative;
    }

    .nav_card_item a:after {
        content: "";
        position: absolute;
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
        background: linear-gradient(135deg, #5866f7 50%, transparent 50%);
        z-index: -1;
    }

    .nav_card_item a,
    .nav_card_item a:after {
        background-size: 300%;
        background-position: 100%;
        transition: 1s, font-size 0.2s;
    }

    .nav_card_item a:hover,
    .nav_card_item a:hover:after {
        color: #f5f5f5;
        background-position: 0;
    }
</style>

<?php get_footer(); ?>