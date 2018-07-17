<?php
/**
** activation theme
**/

add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
}

// s'il y a plusieurs menus à rajouter, voici le code :
function register_my_menus() {
 register_nav_menus(
 array(
 'private-menu' => __( 'Menu Privé' ),
 'footer-menu' => __( 'Menu Footer' ),
 )
 );
}
add_action( 'init', 'register_my_menus' );

// Notre fonction Article Personnalisé (Custom Post)
function create_post_type() {
  
    register_post_type( 'Produits',
        array(
            'labels' => array(
                'name' => __( 'Produits' ),
                'singular_name' => __( 'Produits' ),
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'Produits'),
        )
    );
}
add_action( 'init', 'create_post_type' );
?>