<?php

// Modify WooCommerce opening & closing HTML tags
add_action( 'woocommerce_before_main_content', 'online_jewelry_store_open_container_row', 5 );
function online_jewelry_store_open_container_row() {
    echo '<div class="container shop-content"><div class="row">';
}

add_action( 'woocommerce_after_main_content', 'online_jewelry_store_close_container_row', 5 );
function online_jewelry_store_close_container_row() {
    echo '</div></div>';
}

add_action( 'woocommerce_before_main_content', 'online_jewelry_store_add_sidebar_tags', 6 );
function online_jewelry_store_add_sidebar_tags() {
    echo '<div class="sidebar-shop col-lg-3 col-md-4 order-2 order-md-1">';
}

// Remove the main WC sidebar from its original position
remove_action( 'woocommerce_sidebar', 'woocommerce_get_sidebar' );

// Place the main WC sidebar back but using other action hook on a different position
add_action( 'woocommerce_before_main_content', 'woocommerce_get_sidebar', 7 );

add_action( 'woocommerce_before_main_content', 'online_jewelry_store_close_sidebar_tags', 8 );
function online_jewelry_store_close_sidebar_tags() {
    echo '</div>';
}

// Modify HTML tags on a shop page
add_action( 'woocommerce_before_main_content', 'online_jewelry_store_add_shop_tags', 9 );
function online_jewelry_store_add_shop_tags() {
    echo '<div class="col-lg-9 col-md-8 col-1 order-md-2">';
}

add_action( 'woocommerce_after_main_content', 'online_jewelry_store_close_shop_tags', 4 );
function online_jewelry_store_close_shop_tags() {
    echo '</div>';
}

// Show excerpts
add_action( 'woocommerce_after_shop_loop_item_title', 'the_excerpt', 1 );