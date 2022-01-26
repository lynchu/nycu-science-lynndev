<?php
    // 指定導覽選單要顯示哪個節點的內容
    // Inspired by the solution from: https://stackoverflow.com/questions/5770884/how-to-display-part-of-a-menu-tree
    add_filter("wp_nav_menu_objects", 'my_wp_nav_menu_objects_top_section', 10, 2);

    function my_wp_nav_menu_objects_top_section($sorted_menu_items, $args){

        if(isset($args->top_section)){

            $menu_item_parents = array();
            $curr_section = 0;

            foreach($sorted_menu_items as $key => $item){

                if(empty($item->menu_item_parent)){
                    // this item is one of the root nodes

                    ++$curr_section;

                    // init menu_item_parents
                    if($curr_section === $args->top_section)
                        array_push($menu_item_parents, $item->ID);
                    else
                        // we don't need this top section
                        unset($sorted_menu_items[$key]);

                }elseif(in_array($item->menu_item_parent, $menu_item_parents)){
                    // part of sub-tree: keep!
                    array_push($menu_item_parents, $item->ID);
                }else{
                    // not part of sub-tree: away with it!
                    unset($sorted_menu_items[$key]);
                }

            }

            return $sorted_menu_items;

        }else{
            return $sorted_menu_items;
        }

    }

    // 將 current-menu-item 加回 nav_menu 的項目
    // 發生在該頁面並非 nav_menu 的項目，但事實上瀏覽上屬於該項目的子項目
    add_filter('nav_menu_css_class', 'addBackCurrentIndicator', 10, 3);

    function addBackCurrentIndicator($classes, $item, $args) {

        if(is_singular(array('enrollment', 'announcement', 'talk', 'regulation_post', 'scholarship'))){

            if($item->type === 'taxonomy'){

                $segments = explode('/', $item->url);
                $cat_name = $segments[count($segments) - 2];

                $cats = get_the_category();

                foreach($cats as $cat)
                    if($cat->slug === $cat_name)
                        array_push($classes, 'current-menu-item');

            }

        }elseif(is_tax('field') || is_singular('faculty_info')){

            if($item->type === 'taxonomy'){

                $segments = explode('/', $item->url);
                $term_name = $segments[count($segments) - 2];

                if($term_name === 'faculty')
                    array_push($classes, 'current-menu-item');

            }

        }elseif(is_singular('award')){

            if($item->type === 'post_type'){

                $segments = explode('/', $item->url);
                $page_slug = $segments[count($segments) - 2];

                if(get_the_category()[0]->slug === 'faculty_award' && $page_slug === 'awards-faculty')
                    array_push($classes, 'current-menu-item');
                elseif(get_the_category()[0]->slug === 'student_award' && $page_slug === 'awards-student')
                    array_push($classes, 'current-menu-item');

            }

        }elseif(is_singular('highlight_post')){

            if($item->type === 'post_type'){

                $segments = explode('/', $item->url);
                $page_slug = $segments[count($segments) - 2];

                if($page_slug === 'awards-research_highlights')
                    array_push($classes, 'current-menu-item');

            }

        }elseif(is_singular('album')){

            if($item->type === 'post_type'){

                $segments = explode('/', $item->url);
                $page_slug = $segments[count($segments) - 2];

                if($page_slug === 'highlights')
                    array_push($classes, 'current-menu-item');

            }

        }

        return $classes;
    }
?>
