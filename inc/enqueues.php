<?php 
// Enqeue script 
function enqueue_scripts_styles() {
	wp_enqueue_style( 'tailwind', get_template_directory_uri() . '../dist/output.css');
	wp_enqueue_style( 'style', get_template_directory_uri() . '/src/css/style.css' );
	// wp_enqueue_script( 'script-name', get_template_directory_uri() . '/src/js/app.js', array(), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'enqueue_scripts_styles' );

function mytheme_enqueue_scripts() {
    wp_enqueue_script('mytheme-app', get_template_directory_uri() . '/dist/js/bundle.js', array(), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'mytheme_enqueue_scripts');


// Add theme support for menu
add_theme_support( 'menus' );

function mytheme_register_menus() {
    register_nav_menus(
        array(
            'primary' => __( 'Primary Menu', 'mytheme' ),
            'footer'  => __( 'Footer Menu', 'mytheme' ),
        )
    );
}
add_action( 'after_setup_theme', 'mytheme_register_menus' );