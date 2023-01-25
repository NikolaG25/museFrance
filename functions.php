<?php 

// Ajouter la prise en charge des images mises en avant
add_theme_support( 'post-thumbnails' );

// Ajouter automatiquement le titre du site dans l'en-tête du site
add_theme_support( 'title-tag' );

function register_assets() {

    wp_enqueue_script('jquery' );

    wp_enqueue_script( 
        'MuseFrance', 
        get_template_directory_uri() . '/js/script.js', 
        array( 'jquery' ), 
        '1.0', 
        true
    );
    
    wp_enqueue_script( 
        'Hide', 
        get_template_directory_uri() . '/js/hide.js', 
        array( 'jquery' ), 
        '1.0', 
        true
    );

    wp_enqueue_style( 
        'MuseFrance', 
        get_stylesheet_uri(),
        array(),
        '1.0'
    );
}
add_action( 'wp_enqueue_scripts', 'register_assets' );

register_nav_menus( array (
    "main" => "Menu principal",
    "footer" => "Menu pricipal footer",
    "footer-secondary" => "Menu secondaire footer"
) );

function register_post_types() {
    //CPT biographies
    $labels = array(
        'name' => 'Biographies',
        'all_items' => 'Toutes les biographies',
        'singular_name' => 'Biographie',
        'add_new_item' => 'Ajouter une biographie',
        'edit_item' => 'Modifier la biographie',
        'menu_name' => 'Biographies'
    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'show_in_rest' => true,
        'has_archive' => true,
        'supports' => array( 'title', 'editor','thumbnail' ),
        'menu_position' => 10, 
        'menu_icon' => 'dashicons-format-aside',
    );

    register_post_type( 'biographie', $args );
}
add_action('init', 'register_post_types');