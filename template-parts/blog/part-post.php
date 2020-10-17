    <section class="container">
        <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
            <article class="flex-article">
                <label>
                    <?php the_category() ?>
                </label>
                <?php the_post_thumbnail()?>
                <h4 class="title-blog"><?php the_title() ?></h4>
                <?php the_excerpt() ?>
                <button class="news" href="<?php the_permalink(); ?>">En savoir plus</button>
            </article>
        <?php endwhile; ?>
        <?php endif; ?>
    </section>
