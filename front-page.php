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
        padding: 5vh 10%;
        display: flex;
        justify-content: space-between;
    }

    .navcard {
        display: flex;
        flex-direction: column;
        align-items: end;
        margin-bottom: 2vh;
    }

    .navcard_r {
        width: 53.6%;
    }

    .navcard_l {
        width: 42.5%;
    }

    .navcard_left:before {
        content: "";
        display: block;
        width: 10rem;
        height: 4rem;
        background-size: 10rem 4rem;
        background-image: url(<?php bloginfo('template_url');
        ?>/images/front-page_news.svg);
        margin-bottom: -0.2rem;
        margin-right: auto;
        margin-left: 10%;
    }
    .navcard_left{
        width: 100%;
    }

    .navcard_right:before {
        content: "";
        display: block;
        width: 10rem;
        height: 4rem;
        background-size: 10rem 4rem;
        background-image: url(<?php bloginfo('template_url');
        ?>/images/front-page_events.svg);
        margin-bottom: -0.2rem;
        margin-right: 10%;
        margin-left: auto;
    }

    .navcard_right {
        /* box-shadow: 2px 6px 20px 0 rgba(0, 0, 0, 0.16); */
        border-radius: 20px;
    }

    .navcard_right .nav_card_item {
        width: 100%;
        height: 13.5rem;
        /* margin-bottom: 1.5rem; */
        cursor: pointer;
        /* border-bottom: 1px groove; */
    }

    .navcard_left .nav_card_item {
        width: 100%;
        height: 12rem;
        border-radius: 10px;
        box-shadow: 1px 3px 20px 0 rgba(0, 0, 0, 0.16);
        /* background-color: #eeedea; */
        margin-bottom: 1.5rem;
        cursor: pointer;
    }

    .nav_card_item a {
        color: rgb(var(--dark));
        display: block;
        width: inherit;
        height: inherit;
        padding: 2rem 1.5rem;
    }

    .navcard_left a {
        border-radius: 10px;
    }

    .navcard_right a {
        display: flex;
        flex-direction: row;
        /* border-bottom: 1px groove; */
        border-bottom: 1px solid rgb(var(--hr-gray));
        padding-left: 0;
    }

    .navcard_right .nav_card_item .date {
        flex: 1;
        text-align: center;
        font-weight: 300;
        display: flex;
        flex-direction: column;
        justify-content: center;
        /* color: rgba(0, 0, 0, 0.5); */
    }

    .navcard_right .nav_card_item .year,
    .navcard_right .nav_card_item .day {
        font-size: 1.5rem;
    }

    .navcard_right .nav_card_item .year {
        /* margin-top: 2rem; */
        letter-spacing: 2px;
    }

    .navcard_right .nav_card_item .post_title_content {
        flex: 4;
        display: flex;
        flex-direction: column;
        justify-content: center;
    }

    .navcard_right .nav_card_item .post_excerpt {
        text-align: justify;
        font-size: 1.375rem;
        letter-spacing: 3.3px;
    }

    .date {
        font-size: 1.375rem;
        color: rgba(0, 0, 0, 0.5);
    }

    .post_title {
        font-weight: 500;
        font-size: 1.875rem;
        letter-spacing: 4.5px;
        line-height: 1.5;
    }

    .category_name {
        width: 5rem;
        line-height: 1.7;
        color: rgb(var(--white));
        background-color: rgb(var(--dark));
        text-align: center;
        border-radius: 20px;
        font-size: .8rem;
    }

    .nav_card_more {
        width: 6rem;
        height: 2.5rem;
        line-height: 3;
        color: rgb(var(--white));
        background-color: rgb(var(--cornflower));
        text-align: center;
        border-radius: 21px;
        letter-spacing: .2rem;
        position: relative;
        right: 0;
        margin-top: 1rem;
    }

    .nav_card_more a {
        display: block;
        width: inherit;
        height: inherit;
        color: rgb(var(--white));
        font-size: .8rem;
    }

    .navcard_left .nav_card_item a {
        background: linear-gradient(135deg, rgb(var(--cornflower)) 50%, rgb(var(--beige)) 50%);
        position: relative;
    }

    .navcard_left .nav_card_item a:after {
        content: "";
        position: absolute;
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
        background: linear-gradient(135deg, rgb(var(--cornflower)) 50%, transparent 50%);
        z-index: -1;
    }

    .navcard_left .nav_card_item a,
    .navcard_left .nav_card_item a:after {
        background-size: 300%;
        background-position: 100%;
        transition: 1s, font-size 0.2s;
    }

    .navcard_left .nav_card_item a:hover,
    .navcard_left .nav_card_item a:hover:after,
    .navcard_left .nav_card_item a:hover .date {
        color: rgb(var(--white));
        background-position: 0;
    }

    .navcard_right .nav_card_item a,
    .navcard_right .nav_card_item a:after {
        background-size: 300%;
        background-position: 100%;
        transition: 1s, font-size 0.2s;
    }

    .navcard_right .nav_card_item a:hover,
    .navcard_right .nav_card_item a:hover:after,
    .navcard_right .nav_card_item a:hover .date {
        color: rgb(var(--vivid-blue));
        background-position: 0;
    }

    @media screen and (max-width: 800px) {
        .post_title{
            font-size: 1.5rem;
        }
        .gallery_container{
            display: none;
        }
    }

    @media screen and (max-width: 415px) {
        .navcard_container{
            flex-direction: column;
        }
        .navcard_l {
            width: 100%;
        }
        .navcard_r{
            width: 100%;
        }
    }
    .featured_thumb {
        width: 100%;
        position: relative;
        
    }

    .featured_thumb img {
        width: 100%;
        border-radius: 20px;
    }
</style>

<?php get_footer(); ?>