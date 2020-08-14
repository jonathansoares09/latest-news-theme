<?php

/* Habilitando utilização de thumbnails em posts */
add_theme_support('post-thumbnails');
set_post_thumbnail_size(180,180);


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

   /* função para redimensionar image da logo */

   function image_redimensioner() {
    wp_enqueue_style('redimensionerlogo', get_template_directory_uri().'/assets/css/css.css');
    }
   add_action('wp_enqueue_scripts','image_redimensioner');
   ?>