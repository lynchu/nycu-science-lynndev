<div class="navcard navcard_r">
<div class="navcard_right">
<?php
    $post_args = array(
        'numberposts' => 4,
        'post_type' => 'any',
        'category_name' => 'events',
    );

    $posts = get_posts($post_args);

    if($posts):

        foreach(get_posts($post_args) as $post):
?>
<div class="nav_card_item category_item" title="<?php echo $post->post_title; ?>">
    <a href="<?php echo get_permalink($post); ?>">
        <div class="date">
<?php
            $date = new DateTime(get_field('event_begin_date', $post));
            $formatter = new IntlDateFormatter('en_US', IntlDateFormatter::MEDIUM, IntlDateFormatter::NONE, NULL, NULL, "YYYY MM dd");
            $date_arr = explode(" ", $formatter->format($date)); // date_arr[0]: year, date_arr[1]: month, date_arr[2]: day
?>
        <div class="year">
            <?php
                echo $date_arr[0]
            ?>
        </div>
        <div class="day">
            <?php
                echo $date_arr[1].".". $date_arr[2]
            ?>
        </div>
        </div>
        <div class="post_title_content">
        <div class="post_title ellipsis"><?php echo $post->post_title;?></div><br>
        <div class="post_excerpt"><?php the_excerpt();?></div>
        </div>
        
    </a>
</div>
<?php
        endforeach;

    // there's no posts with this category
    else:
?>
<div class="nav_card_item">
    沒有這個分類的文章
</div>
<?php
    endif;
    wp_reset_postdata();
?>
</div>
<div class="nav_card_more">
    <a href="<?php echo home_url().'/category/news/events/'; ?>">more</a>
</div>
</div>
