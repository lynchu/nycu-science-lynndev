<?php
    //  頁數導覽列
    /*
     *  @param  WP_Query $query     Wordpress query object
     *  @return String              page navigator in HTML
     */
    function get_pagenavi($query) {

        $max = $query->max_num_pages;

        if($max <= 1)
            return '';

        if(!($current = $query->query_vars['paged']))
            $current = 1;

        $args = array(
            'base' => str_replace(999999999, '%#%', get_pagenum_link(999999999)),
            'total' => $max,
            'current' => $current,
            'prev_text' => '<',
            'next_text' => '>'
        );

        return '<div class="pagenavi">' . paginate_links($args) . '</div>';

    }
?>
