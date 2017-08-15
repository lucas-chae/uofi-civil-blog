<?php

function theme_styles() {

	wp_enqueue_style( 'bootstrap_css', get_template_directory_uri() . '/css/bootstrap.min.css' );
	wp_enqueue_style( 'main_css', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'animate_css', get_template_directory_uri() . '/css/animate.min.css' );
    wp_enqueue_style( 'morphext_css', get_template_directory_uri() . '/css/morphext.css' );
   

}

add_action( 'wp_enqueue_scripts', 'theme_styles');

function theme_js() {

	global $wp_scripts;

	wp_enqueue_script( 'bootstrap_js', get_template_directory_uri() . '/js/bootstrap.min.js' );
    wp_enqueue_script( 'morphext_js', get_template_directory_uri() . '/js/morphext.min.js' );
    
    
	

}

add_action( 'wp_enqueue_scripts', 'theme_js');
add_action (' $("#js-rotating").Morphext();');


add_theme_support( 'menus' );


function get_ancestor_id() {
    
    global $post;
    if($post->post_parent) {
        $ancestors = array_reverse(get_post_ancestors($post->ID));
        return $ancestors[0];
    }
    
    
    return $post->ID;
}



?>
