<?php


class WPKC_Theme {

    public function __construct() {

        // Actions
        add_action( 'wp_enqueue_scripts', array( $this, 'enqueueFiles' ) );

        // Theme Supports
        add_theme_support( 'custom-header' );
        add_theme_support( 'custom-background' );

        // Nav Menu Locations
        register_nav_menu( 'wpkc-top-menu', "Header Menu" );

    }

    public function enqueueFiles() {

        wp_enqueue_style( 'bootstrap-css', get_stylesheet_directory_uri() . '/assets/css/bootstrap.min.css' );
        wp_enqueue_style( 'custom-css', get_stylesheet_directory_uri() . '/assets/css/custom.css' );
        wp_enqueue_script( 'jquery' );
        wp_enqueue_script( 'bootstrap-js', get_stylesheet_directory_uri() . '/assets/js/bootstrap.min.js', array(), '1.0.0', true );

    }

}

$WPKC = new WPKC_Theme();






class Walker_Nav_Menu_WPKC extends Walker_Nav_Menu
{

    function start_lvl( &$output, $depth = 0, $args = Array() ) {
        parent::start_lvl($output, $depth,$args);
    }

    function end_lvl( &$output, $depth = 0, $args = Array() ) {
        parent::end_lvl($output, $depth,$args);
    }

    function end_el( &$output, $item, $depth = 0, $args = Array() ) {
        parent::end_el($output, $item, $depth, $args);
    }

    function start_el( &$output, $item, $depth = 0, $args = Array(), $id = 0 ) {
        parent::start_el( $output, $item, $depth, $args, $id );
    }
}



