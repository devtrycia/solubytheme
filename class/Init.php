<?php

namespace App;

use App\Enqueues;
use App\PostInformations;

class Init
{
    public function __construct()
    {
        add_action('init', [$this, 'create_posttypes']);
        add_action('widgets_init', [$this, 'create_widgets']);
        add_action('after_setup_theme', [$this, 'solubytheme_setup']);
        new Enqueues();
    }

    public function create_posttypes()
    {
        new PostInformations();
    }

    public function solubytheme_setup()
    {
        load_theme_textdomain('_solubytheme', get_template_directory() . '/languages');
        add_theme_support('automatic-feed-links');
        add_theme_support('title-tag');
        add_theme_support('post-thumbnails');
        add_theme_support('customize-selective-refresh-widgets');

        add_theme_support(
            'html5',
            array(
                'search-form',
                'comment-form',
                'comment-list',
                'gallery',
                'caption',
                'style',
                'script',
            )
        );
        add_theme_support(
            'custom-logo',
            array(
                'height'      => 250,
                'width'       => 250,
                'flex-width'  => true,
                'flex-height' => true,
            )
        );
        register_nav_menus([
            'header' => esc_html__('Main navigation', '_solubytheme'),
        ]);
    }

    public function create_widgets()
    {
        register_sidebar([
            'id'            => 'footer',
            'name'          => esc_html__('Footer', '_solubytheme'),
            'description'   => esc_html__('Add widgets here.', '_solubytheme'),
            'before_widget' => '<section class="description-content--text">',
            'after_widget'  => '</section>',
            'before_title'  => '<h4 class="description__title">',
            'after_title'   => '</h4>',
        ]);
    }
}
