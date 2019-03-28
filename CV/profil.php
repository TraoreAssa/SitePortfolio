<?php
require_once('init/init.php');
//BDD
?>
<p>Bienvenue sur mon Site-PortFolio <br></p>
<?php
// ---------------------------- Recuperation Des champs de la BDD --------

//  ------------ titre ------------
  $resul = $bdd->query("SELECT titre_cv, description FROM titre_cv");
  while ($cv = $resul->fetch(PDO::FETCH_ASSOC)) {
    foreach ($cv as $key => $value) {
      echo '<h1 class="display-3 border-raduis text-center">' .  $value . ' </h1>' . '<br>';
    }
  }

?>

<section id='profil'>
  <div class='jumbotron col-10 offset-1'>
      <h2 class='display-4 text-center' >Présentation: </h2>
      <hr class='my-4'>
      <div class="row">
        <?php
              
          echo ' <div class="col-12 display-5 text-center"> ';

          //  ------------ Requette NOM, PRENOM .. ------------

          $resultat = $bdd->query("SELECT * FROM utilisateur WHERE id_utilisateur = 1");
          while ($utilisateur = $resultat->fetch(PDO::FETCH_ASSOC)) :

            //  ------------ AVATAR ------------
            $result = $bdd->query("SELECT photo FROM photo WHERE details = 'Avatar' ");
            // var_dump($result) ; 

            while ($photo = $result->fetch(PDO::FETCH_ASSOC)) {
              foreach ($photo as $key => $value) {
                echo '<img src ="' . $value . '" alt="Mon Avatar"  width="300" height="300"/>';
              }
            }

          ?>

          <h2 class='display-3'><?= $utilisateur['nom'] ?> <?= $utilisateur['prenom'] ?></h2>
          <!-- <p>née le :<?= $utilisateur['date_naissance'] ?></p> -->
          <a href="<?= $utilisateur['site_web'] ?>">Mon site CV</a>
          <br>
          <!-- <p></p> -->
          <label for="cv-pdf">Télécharger mon cv en format PDF</label> <br>
          <input type="button" class='bg-dark text-white p-2' value="Télécharger" onclick="window.location='CV-Traore-Assa-Developpeur-Web.pdf'">



          <?php endwhile; ?>
          </div>
      </div>
  </div>
</section>


<?php
// require_once('init/footer.php');
//Footer
?> 