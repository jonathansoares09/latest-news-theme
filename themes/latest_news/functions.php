<?php

/* Habilitando utilização de thumbnails em posts */
add_theme_support('post-thumbnails');
set_post_thumbnail_size(120,120);


/* Registrando Menus de Navegação */

function register_my_menus() {
    register_nav_menus(
      array(
        'header-menu' => __( 'Header Menu' ),
        'extra-menu' => __( 'Extra Menu' )
       )
     );
   }
   add_action( 'init', 'register_my_menus' );

   add_theme_support( 'custom-header' );
?>