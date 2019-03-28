<?php
// require_once('init/header.php');
require_once('init/init.php');

$resultat = $bdd->query("SELECT * FROM utilisateur");
$utilisateur = $resultat->fetch(PDO::FETCH_ASSOC);
// echo '<pre>'; print_r($utilisateur); echo '</pre>'; 
?>
<section id="contact" name="contact" class='text-center	'>

    <h2 class='display-4 text-center'>Contact</h2>

    <div class="row">
        <div class="col-lg-6 p-2">
                <div>
                    <p>
                        <h5> <strong> Email :</strong> </h5><?=$utilisateur['email']?>  
                    </p>
                    <br>
					<p>
                        <h5> <strong> Téléphone :</strong> </h5><?=$utilisateur['telephone']?> <br />
                    </p>
                    <br>
                    <p>
                        <h5> <strong> Adresse :</strong> </h5><?=$utilisateur['adresse']?><br /> <?=$utilisateur['code_postal']?> <br /> <?=$utilisateur['ville']?>, <?=$utilisateur['pays']?> <br />
                        <br>
                    
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2621.6412927008637!2d2.023014415904582!3d48.92222610416351!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e689380e5454d1%3A0x4099c2bb5d1729b6!2s60+Avenue+du+Mar%C3%A9chal+Lyautey%2C+78300+Poissy!5e0!3m2!1sfr!2sfr!4v1553001708997" width="450" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </p>
                    <br>
                    
                </div>
            </div>

            <div class="col-lg-6 p3">
                <p>
                    <h3 class="text-center"> FORMULAIRE DE CONTACT</h3>
                </p>
                <form class="contact-form php-mail-form text-center" role="form" action="traitement.php" method="POST">

                <div class="form-group">
                    <label for="contact-name">Votre Nom</label>
                    <input type="name" name="name" class="form-control" id="contact-name" placeholder="Votre Nom" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                    
                    <div class="validate"></div>
                </div>

                <div class="form-group">
                    <label for="contact-name">Votre prenom</label>
                    <input type="name" name="name" class="form-control" id="contact-name" placeholder="Votre prenom" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                        
                    <div class="validate"></div>
                </div>

                <div class="form-group">
                    <label for="contact-email">Votre Email</label>
                    <input type="email" name="email" class="form-control" id="contact-email" placeholder="Votre Email" data-rule="email" data-msg="Please enter a valid email">
                    
                    <div class="validate"></div>
                </div>

                <div class="form-group">
                    <label for="contact-subject">Sujet</label>
                    <input type="text" name="subject" class="form-control" id="contact-subject" placeholder="Sujet" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject">
                    
                    <div class="validate"></div>
                </div>

                <div class="form-group">
                    <label for="contact-message">Message</label>
                    <textarea class="form-control" name="message" id="contact-message" placeholder="Message" rows="8" data-rule="required" data-msg="Please write something for us"></textarea>
                    
                    <div class="validate"></div>
                </div>

                <div class="loading"></div>
                <div class="error-message"></div>
                <div class="sent-message"></div>

                <div class="form-send">
                    <input type="submit" class="btn btn-large bg-dark text-white mb-3" name="envoi" value="Envoyer">
                </div>

            </form>
        </div>
  
</section> 

<?php
// require_once('init/footer.php');
//Footer
?>