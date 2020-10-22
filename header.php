<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head() ?>
    <link rel="apple-touch-icon" sizes="180x180"
        href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32"
        href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16"
        href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/favicon/favicon-16x16.png">
    <link rel="manifest"
        href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/favicon/site.webmanifest">
    <link rel="mask-icon"
        href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/favicon/safari-pinned-tab.svg"
        color="#5bbad5">
    <link rel="shortcut icon"
        href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/favicon/favicon.ico">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="msapplication-config"
        content="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/favicon/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600;700&display=swap">
    <link rel="preload"
        href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/fonts/custom-icon-font/custom-icon-font.woff"
        as="font" type="font/woff" crossorigin>
    <link rel="stylesheet"
        href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/utils/flexboxgrid/flexboxgrid.min.css">
    <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/style.min.css">
    <link rel="stylesheet"
        href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/utils/animatecss/animate.min.css">
    <link rel="stylesheet"
        href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/utils/slick/slick.min.css">
    <link rel="stylesheet"
        href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/utils/slick/slick-theme.min.css">
</head>

<body <?php body_class(); ?>>
    <div id="particles-js"></div>
    <div id="smoothContainer">
        <div class="header-top-strip">
            <div class="header-top-strip_left">
                <a href="/">Декор-Мебель</a>
            </div>
            <div class="header-top-strip_left">
                
            </div>
        </div>
        <header>
            <div id="header">
                <div class="container navbar">
                    <nav>
                        <a class="navbar-brand" href="/">
                            Декор-Мебель
                        </a>

                        <?php 
                     
                     wp_nav_menu(array(
                        'theme_location' => 'header-menu',            
                        'container'       => 'div',
                        'container_class' => 'collapse navbar-collapse',
                        'container_id'    => 'navbar-header',
                        'menu_class'      => 'navbar-nav mx-auto',
                        'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
                        'walker'          => new WP_Bootstrap_Navwalker(),
                     )); 

                     do_action('wpml_add_language_selector');
                    ?>

                        <span id="toggle-nav" class="toggle-nav">
                            <i class="toggle-nav__icon icon icon-bars"></i>
                        </span>
                    </nav>
                </div>
            </div>
        </header>