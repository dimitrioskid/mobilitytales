<?php

// Requiring theme customizer
require get_template_directory() . "/inc/customizer.php";

// Requiring TGM plugin activation
require_once get_template_directory() . '/inc/class-tgm-plugin-activation.php';
require_once get_template_directory() . '/inc/required-plugins.php';

// Including stylesheet and script files
function load_scripts() {
    
    // Css files
    wp_enqueue_style('template', get_template_directory_uri() . '/assets/css/template.css', array(), '1.0', 'all');
    
    
    // Bootstrap
    wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/assets/bootstrap/js/bootstrap.min.js', ['jquery'], '5.1.1', true);
    wp_enqueue_style('bootstrap-css', get_template_directory_uri() . '/assets/bootstrap/css/bootstrap.min.css', [], '5.1.1', 'all');


    // JS
    wp_enqueue_script('custom-js', get_template_directory_uri() . '/assets/js/custom.js', ['jquery'], '5.1.1', true);
    wp_enqueue_script('counter-js', get_template_directory_uri() . '/assets/js/jquery.counterup.min.js', ['jquery'], '5.1.1', true);
    wp_enqueue_script('waypoints-js', get_template_directory_uri() . '/assets/js/jquery.waypoints.js', ['jquery'], '5.1.1', true);

    
}
add_action('wp_enqueue_scripts', 'load_scripts');



// Main configuration
function mtBlog_config() {
    // Registering menus
    register_nav_menus([
        'main_menu'    =>  'Main Menu'        
    ]);

    
    $args = array(
        'height'        => 1080,
        'width'         => 1920,
        'flex-width'    => true,
    );
    add_theme_support('custom-header', $args);  
    add_theme_support('post-thumbnails');
    add_theme_support('post-formats', array('video', 'image'));
    add_theme_support('title-tag');
    add_theme_support('custom-logo');

}
add_action('after_setup_theme', 'mtBlog_config', 0);



// Registering About-us section
add_action( 'widgets_init', 'mt_sidebars');
function mt_sidebars(){
    register_sidebar(
        array(
            'id'            =>  'sidebar-1',
            'name'          =>  'About Us',
            'description'   =>  'This is About us section',
            'before_widget' =>  '<div class="widget-wrapper aboutUs"',
            'after_widget'  =>  '</div>',
            'before_title' =>  '<div class="widget-title aboutUs_title"',
            'after_title'  =>  '</div>'
            
        )
    );
}

// TOTAL POSTS COUNTER
function wpb_total_posts() { 
    $total = wp_count_posts()->publish;
    return $total; 
} 
add_shortcode('total_posts','wpb_total_posts');

?>

