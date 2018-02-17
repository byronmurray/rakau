<?php 
function register_theme_menus() {
  register_nav_menus(
    array(
      'primary' => __( 'Primary Menu' ),
      'footer' => __( 'Footer Menu' )
    )
  );
}


add_action( 'init', 'register_theme_menus' );
// add_filter( 'show_admin_bar', '__return_false' );

add_theme_support( 'post-thumbnails' );
add_post_type_support( 'page', 'excerpt' );


add_image_size( 'blog_thumb', 530, 353, array( 'center', 'center' ) );

