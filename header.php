<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title><?php wp_title(' - ', true, 'right'); bloginfo('name');?></title>
    <script type="text/javascript">
        const templateUrl = '<?php echo get_bloginfo("template_url"); ?>';
    </script>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?> id="the_top">
    <div id="container">
        <div id="content">
            <header>
                <nav id="navbar">
                    
                        <div class="logo_title">
                        <a href="<?php echo site_url();?>">
                            <img src="<?php echo get_template_directory_uri()?>/images/logo.svg" alt="">
                            <img src="<?php echo get_template_directory_uri()?>/images/title.svg" alt="">
                        </a>
                        </div>
                    
                    <?php wp_nav_menu(); ?>
                    <div class="mobile_wrapper">
                         <button id="searchBtn">
                            <?php get_search_form(); ?>
                        </button>
                        <a id="EN" href="<?php echo site_url();?>/en">
                            EN
                        </a>
                        <button id="navBtn">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <button id="donateBtn">
                            募款活動
                        </button>
                    </div>
                    <div id="blocker"></div>
                </nav>
            </header>
            <main>