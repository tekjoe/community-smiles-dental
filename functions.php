<?php

function community_smiles_setup()
{
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Mulish:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,600&display=swap');
    wp_enqueue_style('styles', get_theme_file_uri('/styles/styles.css'), microtime());
    wp_enqueue_script('jquery', 'https://code.jquery.com/jquery-3.5.1.js');
    wp_enqueue_script('main-js', get_template_directory_uri() . '/javascripts/main.js');
    if (is_page("locations")) {
        wp_enqueue_style('leaflet-css', "https://unpkg.com/leaflet@1.7.1/dist/leaflet.css");
        wp_enqueue_script('leaflet-js', "https://unpkg.com/leaflet@1.7.1/dist/leaflet.js");
        wp_enqueue_script('map-js', get_theme_file_uri('/javascripts/map.js'));
    }
}

function register_menus()
{
    register_nav_menus(
        array(
            'footer-menu' => __('Footer Menu'),
            'header-menu'=> __('Header Menu'),
        )
    );
}


add_action('wp_enqueue_scripts', 'community_smiles_setup');
add_action('init', 'register_menus');