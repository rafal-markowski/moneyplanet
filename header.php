<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php if(!is_page_template('page-homepage.php') && !is_page_template('page-pozyczka-ratalna.php')): ?>
        <meta name="robots" content="noindex, nofollow">
    <?php endif; ?>
    <title><?php wp_title(); ?></title>
    <link href="https://fonts.googleapis.com/css?family=Kanit:200,300,400,700,800&display=swap&subset=latin-ext" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/styles/bootstrap-4.3.1.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/styles/style.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/styles/rangeslider.css">
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <?php wp_head(); ?>
</head>
<body <?php is_page_template('page-homepage.php') ? body_class('first-tab') : is_page_template('page-pozyczka-ratalna.php') ? body_class('second-tab') : body_class(); ?>>
    <nav class="top-menu">
        <div class="top-menu__wrapper container">
            <a href="<?php echo get_site_url(); ?>" class="logo">
                <span class="logo__span">Money</span>
                Planet
            </a>
            <input type="checkbox" id="checkbox-toggler">
            <div class="top-menu__dropdown">
                <?php 
                    wp_nav_menu(array(
                        'theme_location' => 'header-menu',
                        'container' => 'ul',
                        'menu_class' => 'top-menu__ul'
                    ));
                ?>
            </div>
            <label for="checkbox-toggler" class="top-menu__btn">
                <span></span>
                <span></span>
                <span></span>
            </label>
        </div>
    </nav>