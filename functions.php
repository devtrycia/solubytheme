<?php
require __DIR__ . '/vendor/autoload.php';

use App\Init;

require get_template_directory() . '/inc/apparence.php';
require get_template_directory() . '/inc/template-tags.php';
require get_template_directory() . '/inc/template-functions.php';


new Init();