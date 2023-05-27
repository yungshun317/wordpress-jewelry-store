<?php
get_header();
?>
<main>
    <section class="section-slider">Slider</section>
    <section class="section-popular-products">Popular Products</section>
    <section class="section-new-arrivals">New Arrival</section>
    <section class="section-deal-of-the-week">Deal of the Week</section>
    <section class="section-blog">
        <?php
        if( have_posts() ):
            while( have_posts() ):
                the_post();
        ?>
            <article>
                <h2><?php the_title(); ?></h2>
                <div><?php the_content(); ?></div>
            </article>
        <?php
            endwhile;
        else:
        ?>
        <p>Nothing to Display.</p>
        <?php endif; ?>
    </section>
</main>
<?php
get_footer();
?>
