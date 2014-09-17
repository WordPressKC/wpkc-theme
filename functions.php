<?php


class WPKC_Theme {

    public function __construct() {

        add_action( 'wp_enqueue_scripts', array( $this, 'enqueueFiles' ) );
        add_theme_support( 'custom-header' );

    }

    public function enqueueFiles() {

        wp_enqueue_style( 'bootstrap-css', get_stylesheet_directory_uri() . '/assets/css/bootstrap.min.css' );
        wp_enqueue_style( 'custom-css', get_stylesheet_directory_uri() . '/assets/css/custom.css' );
        wp_enqueue_script( 'jquery' );
        wp_enqueue_script( 'bootstrap-js', get_stylesheet_directory_uri() . '/assets/js/bootstrap.min.js', array(), '1.0.0', true );

    }

}

$WPKC = new WPKC_Theme();










