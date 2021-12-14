<?php
// ajax
require get_template_directory() . '/ajax/ajax.php';
require get_template_directory() . '/records/contact_us.php';

add_action('wp_enqueue_scripts', 'header_style');
add_action('after_setup_theme', "theme_register_nav_menu");
add_filter( 'nav_menu_link_attributes', 'change_menu_item_css_classes', 10, 4 );

function change_menu_item_css_classes(  $atts, $item, $args ) {
    if( $item->ID === 68){
        $atts['class'] = 'popup-link';
    }

    return $atts;
}

if(function_exists('acf_add_options_page'))
{
    acf_add_options_page(array(
        'page_title' 	=> 'Настройки сайта',
        'menu_title'	=> 'Настройки сайта',
        'menu_slug' 	=> 'site_main_settings_page',
        'redirect'		=> false
    ));
}

function theme_register_nav_menu() {
    register_nav_menu('top', 'Меню в шапке');
    register_nav_menu('footer', 'Меню в подвале');
    add_theme_support('title-tag');
}

function header_style(){
    wp_enqueue_style('style', get_stylesheet_uri());
    wp_enqueue_style('magnific-popup', get_template_directory_uri() . '/assets/css/magnific-popup.css');
    wp_enqueue_style('main', get_template_directory_uri() . '/assets/css/main.css');
    wp_enqueue_style('pe-icon-set-archives', 'path/to/pe-icon-set-archives/css/pe-icon-set-archives.css');
    wp_enqueue_style('all', 'https://use.fontawesome.com/releases/v5.7.1/css/all.css');
}

add_action('get_footer', 'style_footer');

function style_footer() {
    wp_enqueue_script('jquery', get_template_directory_uri() . '/assets/js/jquery.min.js');
    wp_enqueue_script('magnific_popup', get_template_directory_uri() . '/assets/js/jquery.magnific-popup.min.js');
    wp_enqueue_script('main', get_template_directory_uri() . '/assets/js/main.js');
}