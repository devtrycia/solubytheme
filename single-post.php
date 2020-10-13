<?php get_header(); ?>

<main id="primary" class="site-main">
    <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
            <section class="container">
                <section class="flex-grid">
                    <h4><?php the_title() ?></h4>
                    <article class="">
                        <?php the_content() ?>
                    </article>
                    <a href="<?= home_url('/'); ?>" class="back-button">Retour</a>
                </section>
            </section>
        <?php endwhile ?>
    <?php endif; ?>
</main>

<?php get_footer(); ?>