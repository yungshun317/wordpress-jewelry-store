<?php
get_header();
?>
<main>
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
