<section class="flex-grid">
                <form action="accueil.php" method="post">
                    <input type="text" placeholder=" Prénom" name="nom" value="<?php echo $nom;?>"><br>
                    <input type="text" placeholder="Nom" name="prenom" value="<?php echo $prenom;?>"><br>
                    <input type="text" placeholder="Courriel" name="email" value="<?php echo $email;?>"><br>
                    <input type="text" placeholder="Numéro de téléphone" name="numero" value="<?php echo $numero;?>">
                    <br>
                    <textarea name="message" placeholder="Message" rows="5" cols="40"><?php echo $message;?></textarea>
                    <input type="submit">
                </form>

            </section>
        </section>