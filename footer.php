        <footer>
            <section class="footer__widgets">Footer Widgets</section>
            <section>
                <div class="footer__copyright">
                    <p><?php echo get_theme_mod( 'set_copyright', 'Copyright X - All Rights Reserved' ); ?></p>
                </div>>
                <nav class="footer__menu">
                    <?php
                    wp_nav_menu(
                            array(
                                    'theme_location' => 'online_jewelry_store_footer_menu'
                            )
                    );
                    ?>
                </nav>
            </section>
        </footer>
    </div>
<?php wp_footer(); ?>
</body>
</html>
