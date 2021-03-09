<?php

    /* Ajout des styles et des scripts */

    function add_styles_and_scripts(){
        wp_enqueue_style( 'crd-style', get_template_directory_uri() . '/dist/css/main.css' );
        wp_enqueue_script( 'crd-scripts', get_template_directory_uri() . '/src/js/main.js', array('jquery'), '', true );
    }

    add_action('wp_enqueue_scripts', 'add_styles_and_scripts');

    
    function wc_increase_variation_threshold( $product ) {
        return 500;
    }
    add_filter( 'woocommerce_ajax_variation_threshold', 'wc_increase_variation_threshold', 10, 2 );


    // Menus
    add_theme_support( 'menus' );
    register_nav_menu('footer', 'Pied de page');



    /* Ajout des pages d'options */

    if( function_exists('acf_add_options_page') ) {
        acf_add_options_page([
            'page_title' => 'Sections générales',
            'menu_title' => 'Sections',
            'menu_slug' => 'sections',
            'capability' => 'edit_posts',
            'parent_slug' => '',
            'position' => 3, // Position dans la sidebar interface WP
            'icon_url' => false,
            'redirect' => false,
            'post_id' => 'infos',
            'autoload' => false,
            'update_button' => 'Mettre à jour',
        ]);
    }

?>