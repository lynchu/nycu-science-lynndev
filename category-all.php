<?php
    get_header();
?>

<div class="page_content">

    <div class="page_container">

        <div class="page_content_top">
            <div class="page_title">
                最新消息

            </div>
            <div class="sidebar" id="single_cat_title">
                <?php
                    wp_nav_menu(
                        array(
                            'container' => '',
                            'top_section' => 1,  // feature added by a hook
                        )
                    );
                ?>
            </div>
        </div>

        <div class="rf-form_list_block news_list">

<?php
            $args = array(
                'post_type' => 'news',
                'paged' => get_query_var('paged') ? get_query_var('paged') : 1,
            );

            $query = new WP_Query($args);

            if($query->have_posts()):
?>
            <div class="rf-info_block">
<?php
                while($query->have_posts()):
                    $query->the_post();
                    $the_cat = get_the_category();
                    $category_name = $the_cat[0]->cat_name;
?>
                <div class="rf-text_block">
                <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                <div class="date">
<?php
                $date = new DateTime(get_post_time('Y-m-d', false, $post));
                $formatter = new IntlDateFormatter('en_US', IntlDateFormatter::MEDIUM, IntlDateFormatter::NONE, NULL, NULL, "YYYY MMM dd");
                $date_arr = explode(" ", $formatter->format($date)); // date_arr[0]: year, date_arr[1]: month, date_arr[2]: day
?>
                <div class="year">
                    <?php
                        echo $date_arr[0]
                    ?>
                </div>
                <div class="day">
                    <?php
                        echo $date_arr[1]."<br>". $date_arr[2]
                    ?>
                </div>
                </div>
                <div class="title-field ellipsis">
                    <?php the_title(); ?>
                    <br>
                    <br>
                    <div class="category_name"><?php echo $category_name ?></div>
                </div>
                </a>
                </div>
<?php
                endwhile;
?>
            </div>
<?php
            else:
?>
            <div class="rf-info_block">
                <div class="rf-text_block subtitled"><?php echo __('此頁沒有文章喔！', ''); ?></div>
            </div>
<?php
            endif;
            wp_reset_postdata();
?>
        </div>


    </div>

</div>

<style>
    .sidebar {
        border-bottom: 1px groove ;
    }
    .sidebar ul{
        padding: 0;
        list-style: none;
        display:flex;
        
    }
    .sidebar li ul li a{
        margin-right: 1rem;
    }
    .page_container{
        width: 80%;
        margin-left: auto;
        margin-right: auto;
    }
    .page_title{
        font-size: 3rem;
        font-weight: bold;
    }
   .rf-info_block .rf-text_block{
        width: 100%;
        height: 12rem;
        margin-bottom: 1.5rem;
        cursor: pointer;
        border-bottom: 1px groove ;
    }

    .rf-text_block a {
        color: black;
        display: block;
        width: inherit;
        height: inherit;
        padding: 1rem 1rem;
    }
    .rf-info_block a{
        display: flex;
        flex-direction: row;
    }
    .rf-info_block .rf-text_block .date{
        flex: 1;
        text-align: center;
        font-weight: 600;
    }
    .rf-info_block .rf-text_block .year{
        font-size: 1rem;
    }
    .rf-info_block .rf-text_block .day{
        margin-top: 1.5rem;
        font-size: 1.5rem;
        line-height: 1.5;
    }
    .rf-info_block .rf-text_block .title-field {
        flex: 9;
    }
    .rf-info_block .rf-text_block .post_excerpt {
        text-align: justify;
    }
    .date {
        font-size: .8rem;
    }

    .title-field {
        font-weight: 600;
        font-size: 1.5rem;
    }

    .category_name {
        width: 7rem;
        line-height: 2;
        color: #f5f5f5;
        background-color: #0d1922;
        text-align: center;
        border-radius: 20px;
        font-size: 1rem;
    }
</style>

<?php get_footer(); ?>