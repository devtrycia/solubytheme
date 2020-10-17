<?php

namespace App;

/**
 * Enqueue scripts and styles.
 */
 class Enqueues
 {
     public function __construct()
     {
         add_action('wp_enqueue_scripts', [$this, 'solubytheme_scripts']);
     }

     public function solubytheme_scripts()
     {
        wp_enqueue_style('style-soluby', get_template_directory_uri() . '/style.css');
         wp_style_add_data('_solubytheme-style', 'rtl', 'replace');
         wp_deregister_script('jquery');
         wp_register_script('jquery', 'http://code.jquery.com/jquery-3.5.1.js');
         wp_enqueue_script('jquery');

         if (is_singular() && comments_open() && get_option('thread_comments')) {
             wp_enqueue_script('comment-reply');
         }
     }
 }
new Enqueues();
