<?php


// Mobile Navigation Menu Walker
class CSD_Menu_Walker extends Walker_Nav_Menu
{
    public function start_el(&$output, $item, $depth=0, $args=[], $id=0)
    {
        $output .= "<li class='" .  implode(" ", $item->classes) . "'>";
 
        if ($item->url && $item->url != '#') {
            $output .= '<a href="' . $item->url . '">';
        } else {
            $output .= '<span>';
        }
 
        $output .= $item->title;
 
        if ($item->url && $item->url != '#') {
            $output .= '</a>';
        } else {
            $output .= '</span>';
        }
 
        if ($args->walker->has_children) {
            $output .= '<div class="expand-menu" id="expand-menu">+</div>';
        }
    }
}

function wpdocs_custom_excerpt_length($length)
{
    return 25;
}



function community_smiles_setup()
{
    wp_enqueue_style('styles', get_theme_file_uri('/styles/styles.css'), array(), wp_get_theme()->get('Version'), 'all');
    wp_enqueue_script('jquery', 'https://code.jquery.com/jquery-3.5.1.js');
    wp_enqueue_script('gsap', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/gsap.min.js');
    wp_enqueue_script('main-js', get_template_directory_uri() . '/javascripts/main.js');
    if (is_page("clinic-locations")) {
        wp_enqueue_style('leaflet-css', "https://unpkg.com/leaflet@1.7.1/dist/leaflet.css");
        wp_enqueue_script('leaflet-js', "https://unpkg.com/leaflet@1.7.1/dist/leaflet.js");
        wp_enqueue_script('map-js', get_theme_file_uri('/javascripts/map.js'));
    }
    // if (is_page("laugh-for-a-smile")) {
    //     wp_enqueue_script('registration-js', get_theme_file_uri('/javascripts/registration.js'));
    // }
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

if (function_exists('acf_add_options_page')) {
    acf_add_options_page();
}

// function after_sub_redirection($response)
// {
//     $response['redirect_to']='https://forms.donorsnap.com/form?id=9a9a1602-d0bb-4614-8cd1-8b179122dbe6';
//     return $response;
// }


add_action('wp_enqueue_scripts', 'community_smiles_setup');
add_action('init', 'register_menus');
add_theme_support('post-thumbnails');
add_filter('wpcf7_autop_or_not', '__return_false');
add_filter('excerpt_length', 'wpdocs_custom_excerpt_length', 999);
// add_filter('erf_ajax_before_sub_response', 'after_sub_redirection');