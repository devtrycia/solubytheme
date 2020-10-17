<!-- Page de présentation -->
<?php
get_header();
?>

<main id="primary" class="site-main">

<?php
get_template_part("template-parts/equipe/part", "title");
get_template_part("template-parts/equipe/part", "present");
get_template_part("template-parts/accueil/part", "newsletter");

?>

</main>

<?php 
get_footer();

