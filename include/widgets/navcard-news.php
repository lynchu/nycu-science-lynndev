<div class="navcard navcard_l">
<div class="navcard_left">
<?php
    
    $counter = 0; // # of sticky posts
    $posts_per_page = 5;
    $sticky = get_option( 'sticky_posts' ); // Get all sticky posts
    $args = array(  
        'category_name' => 'announcements,awards,sdgs',
        'post_status' => 'publish',
        'posts_per_page' => $posts_per_page, 
        'orderby' => 'date', 
        'order' => 'DEC',
        'post__in' => $sticky
    );
    /* 
        Passing an empty array to post__in will return has_posts() as true (and all 
        posts will be returned). Logic should be used before hand to determine if 
        WP_Query should be used in the event that the array being passed to 
        post__in is empty.
     */
    if( isset( $sticky[0] )):

        $loop = new WP_Query( $args ); 
        // Loop for sticky posts
        if( $loop->have_posts() ):

            while ( $loop->have_posts() ) : $loop->the_post(); 
                $post_id = get_the_ID();
                $the_cat = get_the_category();
                $category_name = $the_cat[0]->cat_name;
?>
<div class="nav_card_item category_item" title="<?php the_title(); ?>">
    <a href="<?php the_permalink(); ?>">
        <div class="date">
<?php
                if($title === 'events')
                    echo '演講日期 ｜' . get_field('event_begin_date', $post_id) . ' ~ ' . get_field('event_end_date', $post_id);
                else
                    echo get_the_date('Y.m.d'); 
?>
        </div><br>
        <div class="post_title ellipsis"><?php the_title(); ?></div><br><br><br>
        <!-- <div class="category_name"><?php #echo $category_name ?></div> -->
    </a>
</div>
<?php
            $counter++;
            endwhile;
        endif;
        wp_reset_postdata();
    endif;
?>
<?php
    // Second loop for non-sticky posts
    $args = array(  
        'category_name' => 'announcements,awards,sdgs',
        'post_status' => 'publish',
        'posts_per_page' => $posts_per_page-$counter, 
        'orderby' => 'date', 
        'order' => 'DEC',
        'post__not_in' => $sticky
    );
    $loop = new WP_Query( $args ); 

    if( $loop->have_posts() ):

        while ( $loop->have_posts() ) : $loop->the_post(); 
            $post_id = get_the_ID();
            $the_cat = get_the_category();
            $category_name = $the_cat[0]->cat_name;
?>
<div class="nav_card_item category_item" title="<?php the_title(); ?>">
<a href="<?php the_permalink(); ?>">
    <div class="date">
<?php
        if($title === 'events')
            echo '演講日期 ｜' . get_field('event_begin_date', $post_id) . ' ~ ' . get_field('event_end_date', $post_id);
        else
            echo get_the_date('Y.m.d'); 
?>
    </div><br>
    <div class="post_title ellipsis"><?php the_title(); ?></div><br><br><br>
    <!-- <div class="category_name"><?php #echo $category_name ?></div> -->
</a>
</div>
<?php
        $counter++;
        endwhile;
    endif;
    wp_reset_postdata();
    
    if ( $counter == 0 ):
?>
<div class="nav_card_item">
    沒有這個分類的文章
</div>
<?php 
    endif;
?>
</div>
<div class="nav_card_more">
    <a href="<?php echo home_url().'/category/news/all/'; ?>">more</a>
</div>
</div>