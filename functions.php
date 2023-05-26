<?php

function online_jewelry_store_scripts() {
    wp_enqueue_style( 'online-jewelry-store-style', get_stylesheet_uri(), array(), filemtime( get_template_directory() . '/style.css' ), 'all' );
}
add_action( 'wp_enqueue_scripts', 'online_jewelry_store_scripts' );