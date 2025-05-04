<?php 
//enable support for post thumbnails
add_theme_support( 'post-thumbnails' );



//enqueue styles and scripts
function my_custom_theme_scripts() {
    wp_enqueue_style('my-custom-theme-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'my_custom_theme_scripts');
function portfolio_load_textdomain() {
    load_theme_textdomain( 'portfolio', get_template_directory() . '/languages' );
}
add_action( 'after_setup_theme', 'portfolio_load_textdomain' );
?>