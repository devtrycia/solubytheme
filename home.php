<!-- Page du blog -->
<?php
get_header();
?>

<main id="primary" class="site-main">
    <section class="container">
        <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
        
<article class="flex-article">
<section class="blog--card">

            <label>
                <?php the_category() ?>
            </label>
            <?php the_post_thumbnail()?>
            <h4 class="title-blog"><?php the_title() ?></h4>
            <?php the_excerpt() ?>
            <button class="news" href="<?= home_url('/'); ?>">Lire plus</button>
</section>
        </article>
        <?php endwhile ?>
        <?php endif; ?>
    </section>
</main>

<?php
get_footer();
