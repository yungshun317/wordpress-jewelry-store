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
        <section class="navigation__search">Search</section>
        <section class="navigation__top-bar">
            <div class="navigation__brand">Logo</div>
            <div class="navigation__second-column">
                <div class="navigation__account">Account</div>
                <nav class="navigation__main-menu">Menu</nav>
            </div>
        </section>
    </header>

