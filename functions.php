<?php

    function register_my_menus() {
        register_nav_menus(
            array(
                'header-menu' => __('Header Menu'),
                'footer-menu' => __('Footer Menu')
            )
        );
    }
    add_action('init', 'register_my_menus');

    function theme_slug_widgets_init() {
        register_sidebar( array(
            'name' => _('Regulamin'),
            'id' => 'regulations-widget-1',
            'class' => 'regulations-widget',
            'description' => '',
            'before_widget' => '',
            'after_widget' => '',
            'before_title' => '<h2>',
            'after_title' => '</h2>',
        ) );
    }
    add_action( 'widgets_init', 'theme_slug_widgets_init');