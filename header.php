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
    <header>

            <!-- <nav class="nav"> -->
                <!-- <a class="nav--items" href="index.php">ACCUEIL</a>
                <a class="nav--items" href="#">LE PLUGIN</a>
                <a class="nav--items" href="equipe.php">ÉQUIPE</a>
                <a class="nav--items" href="blog.php">BLOG</a>
                <a class="nav--items" href="contact.php">CONTACT</a> -->
               <?php
                            wp_nav_menu([
                                'theme_location' => 'header',
                                'menu_id'        => 'primary-menu',
                                'menu_class'     => 'main-navigation'
                            ]);
                            ?> 
                            <!-- </nav>  -->
            </header>

