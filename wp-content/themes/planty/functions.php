<?php
    add_action('wp_enqueue_scripts', 'theme_enqueue_styles');
    function theme_enqueue_styles()
    {
        wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
        wp_enqueue_style('theme-style', get_stylesheet_directory_uri() . '/theme.css', array(), 
        filemtime(get_stylesheet_directory() . '/theme.css'));
    }

    function montheme_menu_class($classes)
    {
        $classes[] = 'menu-item';
        return $classes;
    }
    add_filter('nav_menu__css_class', 'montheme_menu_class');
