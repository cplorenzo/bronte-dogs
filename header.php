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
            <div class="row align-items-center">
                <div id="logo-wrapper" class="col">
                    <div id="logo" class="d-flex align-items-center">
                        <a href="<?= get_home_url(); ?>">
                            <img src="<?= get_stylesheet_directory_uri() ?>/images/logo.svg" alt="">
                        </a>
                    </div>
                </div>
                <div id="navigation-wrapper" class="col">
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