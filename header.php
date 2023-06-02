<!DOCTYPE html>
<html <?php language_attributes(); ?>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="profile" href="https://gmpg.org/xfn/11" />
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <header class="navigation">
        <section class="navigation__search"><?php get_search_form(); ?></section>
        <section class="navigation__top-bar">
            <div class="navigation__brand">
                <a href="<?php echo home_url( '/' ) ?>">
                    <?php
                    if ( has_custom_logo() ):
                        the_custom_logo();
                    else: ?>
                        <p class="site-title"><?php bloginfo( 'title' ); ?></p>
                        <span><?php bloginfo( 'description' ); ?></span>
                    <?php endif; ?>
                </a>
            </div>
            <div class="navigation__second-column">
                <?php if( class_exists( 'WooCommerce' ) ): ?>
                <div class="navigation__account">
                    <div class="navigation_expand">
                        <ul>
                            <?php if ( is_user_logged_in() ): ?>
                            <li>
                                <a href="<?php echo esc_url( get_permalink( get_option( 'woocommerce_myaccount_page_id' ) ) ); ?>" class="navigation__link">My Account</a>
                            </li>
                            <li>
                                <a href="<?php echo esc_url( wp_logout_url( get_permalink( get_option( 'woocommerce_myaccount_page_id' ) ) ) ); ?>" class="navigation__link">Logout</a>
                            </li>
                            <?php else: ?>
                            <li>
                                <a href="<?php echo esc_url( get_permalink( get_option( 'woocommerce_myaccount_page_id' ) ) ); ?>" class="navigation__link">Login / Register</a>
                            </li>
                            <?php endif; ?>
                        </ul>
                    </div>
                    <div class="cart text-right">
                        <a href="<?php echo wc_get_cart_url(); ?>"><span class="cart-icon"></span></a>
                        <span class="items"><?php echo WC()->cart->get_cart_contents_count(); ?></span>
                    </div>
                </div>
                <?php endif; ?>
                <nav class="navigation__main-menu">
                    <?php
                    wp_nav_menu(
                            array(
                                    'theme_location' => 'online_jewelry_store_main_menu'
                            )
                    );
                    ?>
                </nav>
            </div>
        </section>
    </header>

