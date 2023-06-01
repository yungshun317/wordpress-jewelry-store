<?php

function online_jewelry_store_scripts() {
    wp_enqueue_style( 'online-jewelry-store-style', get_stylesheet_uri(), array(), filemtime( get_template_directory() . '/style.css' ), 'all' );
}
add_action( 'wp_enqueue_scripts', 'online_jewelry_store_scripts' );

function online_jewelry_store_config() {
    register_nav_menus(
        array(
            'online_jewelry_store_main_menu' => 'Online Jewelry Store Main Menu',
            'online_jewelry_store_footer_menu' => 'Online Jewelry Store Footer Menu'
        )
    );

    add_theme_support( 'widgets' );
    add_theme_support( 'widgets-block-editor' );
    add_theme_support( 'customize-selective-refresh-widgets' );

    add_theme_support( 'woocommerce', array(
        'thumbnail_image_width' => 255,
        'single_image_width' => 255,
        'product_grid' => array(
            'default_rows' => 10,
            'min_rows' => 5,
            'max_rows' => 10,
            'default_columns' => 1,
            'min_columns' => 1,
            'max_columns' => 5
        )
    ));
    add_theme_support( 'wc-product-gallery-zoom' );
    add_theme_support( 'wc-product-gallery-lightbox' );
    add_theme_support( 'wc-product-gallery-slider' );

    if ( ! isset( $content_width ) ) {
        $content_width = 600;
    }
}
add_action( 'after_setup_theme', 'online_jewelry_store_config', 0 );

if ( class_exists( 'WooCommerce' ) ) {
    require get_template_directory() . '/inc/wc-modifications.php';
}