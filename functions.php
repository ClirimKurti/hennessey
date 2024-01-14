<?php 
define('MOD_URI', get_template_directory_uri());
define('MOD_TEMPLATE', get_template_directory());

require_once __DIR__ . '/vendor/autoload.php';

$loader = new \Twig\Loader\FilesystemLoader(__DIR__ . '/views');
$twig = new \Twig\Environment($loader);

require_once (MOD_TEMPLATE . '/inc/enqueues.php');

require_once (MOD_TEMPLATE . '/inc/custom-walker-nav-menu.php');

require_once (MOD_TEMPLATE . '/inc/plugins-required.php');


require_once __DIR__ . '/vendor/autoload.php';

$loader = new \Twig\Loader\FilesystemLoader(__DIR__ . '/views');
$twig = new \Twig\Environment($loader);

add_theme_support( 'post-thumbnails' );
add_theme_support( 'responsive-embeds' );
add_theme_support( 'editor-styles' );
add_theme_support( 'menus' );
add_theme_support( 'widgets' ) ;