<?php
/**
 * Created by PhpStorm.
 * User: HOME
 * Date: 5/7/2016
 * Time: 5:21 PM
 */

define('THEME_URL', get_stylesheet_directory());
define('CORE', THEME_URL . '/core');

require_once(CORE . '/init.php');

if (!isset($content_width)) {
    $content_width = 660;
}

if (!function_exists('mad_theme_setup')) {
    function mad_theme_setup() {
        $language_folder = THEME_URL . '/languages';
        load_theme_textdomain('mad', $language_folder);

        add_theme_support('automatic-feed-links');

        add_theme_support('post-thumbnails');

        add_theme_support('post-formats',
            array(
                'image',
                'video',
                'gallery',
                'quote',
                'link'
            )
        );

        add_theme_support('title-tag');

        $default_background = array(
            'default-color' => '#e8e8e8',
        );
        add_theme_support('custom-background', $default_background);

        register_nav_menu('primary-menu', __('Primary Menu', 'mad'));

        $sidebar = array(
            'name' => __('Main Sidebar', 'mad'),
            'id' => 'main-sidebar',
            'description' => 'Main sidebar for M.A.D theme',
            'class' => 'main-sidebar',
            'before_title' => '<h3 class="widgettitle">',
            'after_sidebar' => '</h3>'
        );
        register_sidebar( $sidebar );
    }
    add_action ('init', 'mad_theme_setup');
}