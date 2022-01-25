<?php

require get_template_directory() . '/include/hooks/disable_comments.php';
require get_template_directory() . '/include/hooks/disable_author.php';
require get_template_directory() . '/include/hooks/hide_html-comment.php';
require get_template_directory() . '/include/hooks/hide_many.php';
require get_template_directory() . '/include/hooks/disable_wp-emoji.php';
require get_template_directory() . '/include/hooks/disable_wp-embed.php';
require get_template_directory() . '/include/hooks/load_css_js.php';
require get_template_directory() . '/include/hooks/restrict_restapi.php';
require get_template_directory() . '/include/hooks/custom_post_type.php';
require get_template_directory() . '/include/hooks/modify_post_content.php';
require get_template_directory() . '/include/hooks/sidebar.php';

add_theme_support('menus');

require get_template_directory() . '/include/ACF/event_date.php';


//require get_template_directory() . '/include/widgets/pagenavi.php';

