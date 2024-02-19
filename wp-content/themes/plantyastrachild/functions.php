<?php
/**
 * Astra Child Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Astra Child
 * @since 1.0.0
 */

/**
 * Define Constants
 */
define( 'CHILD_THEME_ASTRA_CHILD_VERSION', '1.0.0' );

/**
 * Enqueue styles
 */
function child_enqueue_styles() {

	wp_enqueue_style( 'astra-child-theme-css', get_stylesheet_directory_uri() . '/style.css', array('astra-theme-css'), CHILD_THEME_ASTRA_CHILD_VERSION, 'all' );
	wp_enqueue_style('theme-style', get_stylesheet_directory_uri() . '/css/theme.css', array(), filemtime(get_stylesheet_directory() . '/css/theme.css'));
}

add_action( 'wp_enqueue_scripts', 'child_enqueue_styles', 15 );
function display_button_for_admin($items, $args)
{
	
    if ($args->theme_location === 'primary' && is_user_logged_in()) {
        // Trouver le milieu du menu
        $menu_items = wp_get_nav_menu_items($args->menu);
        

        // Ajouter le bouton "Admin" dans le menu
        $nouveau_bouton = '<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-144"><a href="http://localhost/planty/wp-admin/index.php" class="admin-button">Admin</a></li>';

        // Ajouter le bouton "Admin" après le milieu du menu
		$items .=  $nouveau_bouton ;
    }

    return $items;
}

add_filter('wp_nav_menu_items', 'display_button_for_admin', 10, 2);