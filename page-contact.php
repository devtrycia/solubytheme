<!-- Page de contact -->
<?php
get_header();
?>

<main id="primary" class="site-main">

<?php
get_template_part("template-parts/contact/part", "title");
get_template_part("template-parts/contact/part", "contactform");
?>

</main>

<?php 
get_footer();