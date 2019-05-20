<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php wp_title(); ?></title>
    <link href="https://fonts.googleapis.com/css?family=Kanit:200,300,400,700,800&display=swap&subset=latin-ext" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/styles/bootstrap-4.3.1.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/styles/style.css">
    <?php wp_head(); ?>
</head>
<body <?php body_class('first-tab'); ?>>
    <nav class="top-menu">
        <div class="top-menu__wrapper container">
            <a href="/" class="logo">
                <span class="logo__span">Money</span>
                Planet
            </a>
            <div class="top-menu__dropdown">
                <?php 
                    wp_nav_menu(array(
                        'theme_location' => 'header-menu',
                        'container' => 'ul',
                        'menu_class' => 'top-menu__ul'
                    ));
                ?>
            </div>
            <button class="top-menu__btn">
                <span></span>
                <span></span>
                <span></span>
            </button>
        </div>
    </nav>