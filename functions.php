<?php

function aphrodite_test_setup(): void
{
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', [
        'search-form',
        'gallery',
        'caption',
        'style',
        'script',
    ]);

    register_nav_menus([
        'sidebar_menu' => __('Sidebar Menu', 'aphrodite-test'),
    ]);
}
add_action('after_setup_theme', 'aphrodite_test_setup');

function aphrodite_test_assets(): void
{
    $theme_version = wp_get_theme()->get('Version');
    $main_css_path = get_template_directory() . '/assets/css/main.css';
    $main_js_path = get_template_directory() . '/assets/js/main.js';

    wp_enqueue_style(
        'aphrodite-theme',
        get_stylesheet_uri(),
        [],
        $theme_version
    );

    wp_enqueue_style(
        'aphrodite-main',
        get_template_directory_uri() . '/assets/css/main.css',
        ['aphrodite-theme'],
        file_exists($main_css_path) ? (string) filemtime($main_css_path) : $theme_version
    );

    wp_enqueue_script(
        'aphrodite-main',
        get_template_directory_uri() . '/assets/js/main.js',
        [],
        file_exists($main_js_path) ? (string) filemtime($main_js_path) : $theme_version,
        true
    );
}
add_action('wp_enqueue_scripts', 'aphrodite_test_assets');

function aphrodite_test_fallback_menu(): void
{
    ?>
    <ul class="sidebar-menu">
        <li><a href="#">Accueil</a></li>
        <li><a href="#">Machines à sous</a></li>
        <li><a href="#">Bonus</a></li>
        <li><a href="#">Casino live</a></li>
        <li><a href="#">Promotions</a></li>
    </ul>
    <?php
}
