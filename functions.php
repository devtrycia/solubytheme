<?php
require __DIR__ . '/vendor/autoload.php';

use App\Init;

add_action('wp_enqueue_scripts', 'enqueue_styles_soluby');
function enqueue_styles_soluby()
{
    wp_enqueue_style('style-soluby', get_template_directory_uri() . '/style.css');
}

require get_template_directory() . '/inc/apparence.php';
require get_template_directory() . '/inc/template-tags.php';
require get_template_directory() . '/inc/template-functions.php';


new Init();