<?php
    get_header();
    $obj = get_queried_object();
    $cat_slug = $obj->slug;
    $category_name = $obj->cat_name;
?>

<div class="page_content">

    <div class="page_container">

        <div class="page_content_top">
            <div class="page_title">
                <?php echo $category_name?>

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
            $paged = get_query_var( 'paged', 1 ); 
            $args = array(
                'post_type' => 'any',
                'category_name' => $cat_slug,
                'posts_per_page' => get_option('posts_per_page'),
                'paged' => $paged,
            );

            $query = new WP_Query($args);

            if($query->have_posts()):
?>
            <div class="rf-info_block">
<?php
                while($query->have_posts()):
                    $query->the_post();
?>
                <div class="rf-text_block">
                <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                <div class="date">
<?php
                $date = new DateTime(get_post_time('Y-m-d', false, $post));
                $formatter = new IntlDateFormatter('en_US', IntlDateFormatter::MEDIUM, IntlDateFormatter::NONE, NULL, NULL, "YYYY MM dd");
                $date_arr = explode(" ", $formatter->format($date)); // date_arr[0]: year, date_arr[1]: month, date_arr[2]: day
?>
                <div class="year">
                    <?php
                        echo $date_arr[0].".".$date_arr[1].".".$date_arr[2];
                    ?>
                </div>
                </div>
                <div class="title-field ellipsis">
                    <?php the_title(); ?>
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
            <div class="pagenavi_container">
            <?php echo get_pagenavi($query); ?>
            </div>
        </div>


    </div>

</div>


<?php get_footer(); ?>