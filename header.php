<!DOCTYPE html>
<html lang="en">

<head>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>

    <nav class="side-menu d-xl-none initial-opacity" style="transform: translateX(110%);">
        <div class="inner">
            <?php wp_nav_menu([
                'theme_location' => 'mobile-menu',
                'menu_class' => 'menu menu-mobile',
                'container' => '',
                'depth' => 2,
            ]); ?>
        </div>
    </nav>


    <header id="site-header">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div id="logo-wrapper" class="col-md-4">
                    <div id="logo">
                        <a href="<?php echo get_home_url(); ?>">
                            <img src="<?php echo get_stylesheet_directory_uri() ?>/images/logo.svg" alt="">
                        </a>
                    </div>
                </div>
                <div id="navigation-wrapper" class="col-md-8">
                    <nav id="primary" class="menu-main">
                        <?php wp_nav_menu(
                            [
                                'theme_location' => 'header-menu',
                                'container' => '',
                                'menu_class' => 'menu menu-header',
                                'depth' => 1,
                            ]
                        ); ?>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <main>