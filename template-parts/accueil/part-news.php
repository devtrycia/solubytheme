<section class="container">
<?php if (have_posts($post = 81)) : ?>        
    <article class="flex-article">
            <label>
                <?php the_category() ?>
            </label>
            <?php the_post_thumbnail()?>
            <h4 class="title-blog"><?php the_title() ?></h4>
            <?php the_excerpt() ?>
            <button class="news" href="<?= home_url('/'); ?>">Lire plus</button>
        </article>
        <?php endif; ?>
        <?php if (have_posts($post = 79)) : ?>        
    <article class="flex-article">
            <label>
                <?php the_category() ?>
            </label>
            <?php the_post_thumbnail()?>
            <h4 class="title-blog"><?php the_title() ?></h4>
            <?php the_excerpt() ?>
            <button class="news" href="<?= home_url('/'); ?>">Lire plus</button>
        </article>
        <?php endif; ?>
        <?php if (have_posts($post = 61)) : ?>        
    <article class="flex-article">
            <label>
                <?php the_category() ?>
            </label>
            <?php the_post_thumbnail()?>
            <h4 class="title-blog"><?php the_title() ?></h4>
            <?php the_excerpt() ?>
            <button class="news" href="<?= home_url('/'); ?>">Lire plus</button>
        </article>
        <?php endif; ?>
    </section>
