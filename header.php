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
            <div class="navigation__brand">Logo</div>
            <div class="navigation__second-column">
                <div class="navigation__account">
                    <div class="cart text-right">
                        <a href="<?php echo wc_get_cart_url(); ?>"><span class="cart-icon"></span></a>
                        <span class="items"><?php echo WC()->cart->get_cart_contents_count(); ?></span>
                    </div>
                </div>
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

