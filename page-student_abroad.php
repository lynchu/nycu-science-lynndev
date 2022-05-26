<?php
get_header();
// Start the Loop
while ( have_posts() ) : the_post();
	$post_id = get_the_ID();
?>

<div class="left_block">
    <div class="left_sb">
        <h1>出國計畫</h1>
        <a class="left_sb_a" href="#the_top">出國交換學生計畫</a>
        <a class="left_sb_a" href="#short_term_program">出國短期研究計畫</a>
        <a class="left_sb_a" href="#short_term_course">姊妹校短期課程</a>
        <a class="left_sb_a" href="#overseas">海外實習</a>
        <a class="left_sb_a" href="#dual_degree">雙聯學位</a>
        <a class="left_sb_a" href="#virtual">國外校際選修線上課程</a>
    </div>
</div>


<div class="right_block">

<div id="post-content-area">
    <div id="post-content"><?php the_content(); ?></div>
    <?php if( is_single() ) { get_template_part('include/template-parts/post', 'sidebar'); } ?>
</div>

<?php endwhile; ?>
<!-- End of the loop. -->

<?php if ( is_post_in_category('news', $post_id) ) { get_template_part('include/template-parts/post', 'nav-list'); } ?>

</div>

<style>
    h1{
        margin-bottom: 3rem;
        font-size: 2.5rem;
    }
    section{
        padding-top: 10rem;
        display: flex;
        flex-direction: row;
    }
    section:first-of-type{
        padding-top: 5rem;
    }
    section .right_block_left{
        flex: 2;
    }
    section .right_block_right{
        flex: 1;
        display: flex;
        justify-content: center;
        align-items: end;
    }
    section hr{
        margin-bottom: 5rem;
    }
    section img{
        height: 180px;
    }
    main{
        padding: unset;
        display: flex;
        flex-direction: row;
    }
    .left_block{
        padding-left: 3%;
        flex: 1;
    }
    .left_sb{
        position: sticky;
        top: 10rem;
        display: block;
    }
    .left_sb a{
        display: inline-block;
        width: 100%;
        font-size: 1.125rem;
        font-weight: 400;
        color: rgb(var(--dark));
        line-height: 3;
        letter-spacing: 2.7px;
        border-left: solid 2px rgb(var(--hr-gray));
        padding-left: .5rem;
    }
    .office_addr{
        font-weight: 500;
    }
    .right_block{
        flex: 4;
        padding-left: 1rem;
    }
    section h2::after{
        content: "";
        display: inline-block;
        width: 1rem;
        height: 1rem;
        background-size: 1rem 1rem;
        background-image: url(<?php bloginfo('template_url');
        ?>/images/octicons.svg);
    }
    p{
        text-align: justify;
    }
    /*for screen size like iPhone5*/
    @media only screen and (max-width: 1440px) and (min-width: 769px) {
        section{
            padding-top: 5rem;
        }
        section:first-of-type{
            padding-top: 5rem;
        }
    }
    @media only screen and (max-width: 768px) {
        .left_sb_a{
            display: none!important;
        }
        main {
            flex-direction: column;
        }
        section {
            padding-top: 10rem;
            display: flex;
            flex-direction: column;
        }
        .left_block, .right_block{
            padding: 0 10%;
        }
    }
</style>
<?php get_footer(); ?>
