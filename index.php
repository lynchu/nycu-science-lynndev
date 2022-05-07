<?php get_header(); ?>

<!--搜尋結果-->
<div class="page_content">

    <div class="search_result_container">

        <div class="page_content_top">
            <div class="page_title">
                搜尋結果:
                <span id="search_term"><?php echo get_search_query(); ?></span>
            </div>
        </div>

        <div class="search_result_box_container">
<?php
        while(have_posts()):
            the_post();
?>
            <div class="search_result_box">
            <a href="<?php the_permalink(); ?>">
                <div class="title"><?php the_title(); ?></div>
                <div class="content">
                    <?php echo wp_strip_all_tags(get_the_content()); ?>
                </div>
            </a>
            </div>
<?php
        endwhile;
?>
        </div>

        <div class="pagenavi_container">
            <?php echo get_pagenavi($wp_query); ?>
        </div>
    </div>

</div>

<style>
    .page_content{
        width: 80%;
        margin-left: auto;
        margin-right: auto;
    }
    .page_title {
        padding-top: calc(140/1080*100vh);
        font-size: 3.125rem;
        font-weight: 500;
    }

    .title{
        font-size: 1.375rem;
        margin-bottom: .5rem;
        font-weight: 500;
    }
    .content {
        overflow: hidden;
        text-overflow: ellipsis;
        -webkit-box-orient: vertical;
        display: -webkit-box;
        -webkit-line-clamp: 2;
        font-size: 1.125rem;
        line-height: 1.5;
    }

    .search_result_box_container .search_result_box {
        width: 100%;
        padding: 1.5rem 0rem;
        cursor: pointer;
        border-bottom: 1px groove;
    }

    .search_result_box a {
        color: black;
        display: block;
        width: inherit;
        height: inherit;
        padding: 1rem 1rem;
    }

    .search_result_box_container a:hover *{
        color: rgb(var(--vivid-blue));
    }

</style>


<?php get_footer(); ?>