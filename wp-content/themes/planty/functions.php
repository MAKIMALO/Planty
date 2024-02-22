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
?>

<!-- HOOK -->


<?php
    add_filter( 'wp_nav_menu_items', 'add_admin_to_nav_menu', 10, 2 );
   
    function add_admin_to_nav_menu($items, $args) {
        if (is_user_logged_in() && $args->theme_location == 'primary') {
            $items .= '<li class="admin_link"><a href="' . admin_url() .'">Admin</a></li>';
        }
        return $items;
    }  


?>
