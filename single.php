<?php

/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package _Solubytheme
 */

get_header();
?>

<main id="primary" class="site-main">

    <?php
    while (have_posts()) :
        the_post();

        get_template_part('template-parts/content', get_post_type());

        the_post_navigation(
            array(
                'prev_text' => '<span class="bloc-page nav-subtitle">' . esc_html__('Previous:', '_solubytheme') . '</span> <span class="bloc-page nav-title">%title</span>',
                'next_text' => '<span class="bloc-page nav-subtitle">' . esc_html__('Next:', '_solubytheme') . '</span> <span class="bloc-page nav-title">%title</span>',
            )
        );
        if (comments_open() || get_comments_number()) :
            comments_template();
        endif;

    endwhile;
    ?>

</main>

<?php
get_footer();
