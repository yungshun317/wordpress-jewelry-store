        <footer>
            <section class="footer__widgets">Footer Widgets</section>
            <section class="footer__copyright">
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
