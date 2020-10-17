<?php

?>

<footer class="footer">
    <section class="container">
    <section class="flex-grid">
        <section id="contact-us">
            <h4 class="h4">
                RESTONS EN <br> CONTACT
            </h4>
            <p>
            <br>

                25668 AVE. STREET 87 <br>
                ONTARIO, CANADA <br>
                <br>
                1-800-598-8882 <br>
                HELLO@SOLUBY.CA <br>
            </p>
            <img class="icon" src="/wp-content/themes/solubytheme/img/icon_footer.png" alt="icon">
        </section>
    </section>

    <img class="hr" src="/wp-content/themes/solubytheme/img/line_footer.png" alt="hr">

    <section class="flex-grid">
        <section id="contact-menu">

            <!-- <section>
            <a class="navfooter" href="#">ACCUEIL</a> <br>
            <a class="navfooter" href="#">LE PLUGIN</a> <br>
            <a class="navfooter" href="#">ÉQUIPE</a> <br>
            <a class="navfooter" href="#">BLOG</a> <br>
            <a class="navfooter" href="#">CONTACT</a> <br>
        </section> -->
            <?php
                            wp_nav_menu([
                                'theme_location' => 'footer',
                                'menu_id'        => 'primary-menu',
                                'menu_class'     => 'main-navigation'
                            ]);
                            ?>
        </section>
        <p class="copy">
        (C) 2020 - The markus try Germs compagny
All right reserved

        </p>
    </section>

    </section>
</footer>
<?php wp_footer(); ?>
</body>

</html>
