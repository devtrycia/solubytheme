<?php

?>

<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soluby</title>
    <?php 
    wp_head(); 
    ?>
</head>
<body>
    <header id="header">
        <section class="flex-grid">
            <nav class="nav">
                <a class="nav--links" href="index.html">ACCUEIL</a>
                <a class="nav--links" href="#">LE PLUGIN</a>
                <a class="nav--links" href="equipe.html">ÉQUIPE</a>
                <a class="nav--links" href="blog.html">BLOG</a>
                <a class="nav--links" href="contact.html">CONTACT</a>
               <?php
                            wp_nav_menu([
                                'theme_location' => 'header',
                                'menu_id'        => 'primary-menu',
                                'menu_class'     => 'main-navigation'
                            ]);
                            ?> 
                            </nav>
                    </section>
            </header>