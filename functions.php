<?php

//adds the viewport meta tag to the header.php file
function add_viewport_meta_tag() {
        echo '<meta name="viewport" content="width=device-width, initial-scale=1.0"/>';
 }

add_theme_support( "menus" );

// Create New Menu
If(function_exists("register_nav_menus")){
  register_nav_menus( array( $location => $description ) );
}

//This is to activate the featured image in Posts
if(function_exists("add_theme_support")){
    add_theme_support( 'post-thumbnails' );
}

if(function_exists('add_image_size')){
  add_image_size( 'featured', 400, 250, true );
  add_image_size( 'post-thumb', 125, 75, true );
}

function create_post_type(){
  register_post_type( 'post-type-slug-name', 
    array() 
  );
  
}

//Prevents the <p> tag from getting automatically insterted
remove_filter('the_content', 'wpautop');

add_action( 'init', 'create_post_type' );



// this is to add your custom menu to your theme
function wpb_custom_new_menu() {
  register_nav_menu('my-custom-menu',__( 'My Custom Menu' ));
}
add_action( 'init', 'wpb_custom_new_menu' );



// φορτώνουμε το JS αρχείο μας

function wp_load_script() {

    wp_enqueue_script( 'script-name', get_template_directory_uri() . '/script.js', array(), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'wp_load_script' );