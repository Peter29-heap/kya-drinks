<?php
if(!defined('ABSPATH'))exit;
define('KYADRINKS_VERSION','1.0.0');
define('KYADRINKS_URI',get_stylesheet_directory_uri());
function kyadrinks_enqueue_assets(){
wp_enqueue_style('astra-parent-style',get_template_directory_uri().'/style.css');
wp_enqueue_style('kyadrinks-child-style',KYADRINKS_URI.'/style.css',array('astra-parent-style'),KYADRINKS_VERSION);
wp_enqueue_style('kyadrinks-fonts','https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700&family=Montserrat:wght@400;600&display=swap');
}
add_action('wp_enqueue_scripts','kyadrinks_enqueue_assets',15);
function kyadrinks_theme_setup(){
add_theme_support('woocommerce');
add_theme_support('wc-product-gallery-zoom');
add_image_size('kyadrinks-product-thumb',400,400,true);
}
add_action('after_setup_theme','kyadrinks_theme_setup');
