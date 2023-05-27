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
}
add_action( 'after_setup_theme', 'online_jewelry_store_config', 0 );