<!-- Page d'accueil -->
<?php


get_header();
?>

<main id="primary" class="site-main">
<?php
get_template_part("template-parts/accueil/part", "hero");
get_template_part("template-parts/accueil/part", "news");
get_template_part("template-parts/accueil/part", "newsletter");
get_template_part("template-parts/accueil/part", "plugin-info");
get_footer();
