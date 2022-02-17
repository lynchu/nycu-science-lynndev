<div class="navcard navcard_l">
<div class="navcard_left">
<?php

    $post_args = array(
        'numberposts' => 5,
        'post_type' => 'any',
        'category_name' => 'announcements,awards,sdgs',
    );

    $posts = get_posts($post_args);

    if($posts):

        foreach(get_posts($post_args) as $post):
            $the_cat = get_the_category();
            $category_name = $the_cat[0]->cat_name;
?>
<div class="nav_card_item category_item" title="<?php echo $post->post_title; ?>">
    <a href="<?php echo get_permalink($post); ?>">
        <div class="date">
<?php
            if($title === 'events')
                echo '演講日期 ｜' . get_field('event_begin_date', $post) . ' ~ ' . get_field('event_end_date', $post);
            else
                echo get_post_time('Y.m.d', false, $post);
?>
        </div><br>
        <div class="post_title ellipsis"><?php echo $post->post_title; ?></div><br><br><br>
        <!-- <div class="category_name"><?php #echo $category_name ?></div> -->
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
    <a href="<?php echo home_url().'/category/news/all/'; ?>">more</a>
</div>
</div>