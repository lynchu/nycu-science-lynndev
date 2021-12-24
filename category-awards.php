<?php
    get_header();
?>

<div class="page_content">

    <div class="page_container">

        <div class="page_content_top">
            <div class="page_title">
                <?php single_cat_title(); ?>
            </div>
        </div>

        <div class="rf-form_list_block news_list">

<?php
            $args = array(
                'post_type' => 'news',
                'category_name' => 'awards',
                'paged' => get_query_var('paged') ? get_query_var('paged') : 1,
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
                    <div class="date-field"><?php the_time('Y-m-d'); ?></div>
                    <div class="title-field ellipsis">
                        <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
                    </div>
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

<?php get_footer(); ?>