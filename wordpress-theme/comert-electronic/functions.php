<?php

function comert_electronic_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');

    register_nav_menus(
        array(
            'primary' => __('Meniu principal', 'comert-electronic'),
        )
    );
}
add_action('after_setup_theme', 'comert_electronic_setup');

function comert_electronic_assets() {
    wp_enqueue_style(
        'comert-electronic-styles',
        get_template_directory_uri() . '/assets/css/styles.css',
        array(),
        '1.0.0'
    );

    wp_enqueue_script(
        'comert-electronic-app',
        get_template_directory_uri() . '/assets/js/app.js',
        array(),
        '1.0.0',
        true
    );
}
add_action('wp_enqueue_scripts', 'comert_electronic_assets');

function comert_electronic_fallback_menu() {
    $items = array(
        array('label' => 'Home', 'slug' => ''),
        array('label' => 'Produse', 'slug' => 'produse'),
        array('label' => 'Abonament', 'slug' => 'abonament'),
        array('label' => 'Rent', 'slug' => 'inchiriere'),
        array('label' => 'Editare imagini', 'slug' => 'galerie'),
        array('label' => 'Contact', 'slug' => 'contact'),
        array('label' => 'Blog', 'slug' => 'blog'),
    );

    foreach ($items as $item) {
        $url = $item['slug'] === '' ? home_url('/') : home_url('/' . $item['slug'] . '/');
        printf(
            '<li><a href="%1$s">%2$s</a></li>',
            esc_url($url),
            esc_html($item['label'])
        );
    }
}
