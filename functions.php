<?php

add_action( 
	'wp_enqueue_scripts', 
	'wpshout_enqueue_styles' 
);

add_action('wp_enqueue_scripts', 'enqueue_style_solubytheme');function enqueue_styles_solubytheme() {
        wp_enqueue_style('style-solubytheme', get_template_directory_uri() . '/style.csss');
}
