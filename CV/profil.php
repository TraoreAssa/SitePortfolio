<?php
require_once('init/init.php');
//BDD
?>
<?php
// ---------------------------- Recuperation Des champs de la BDD --------

//  ------------ titre ------------
  $resul = $bdd->query("SELECT titre_cv, description FROM titre_cv");
  while ($cv = $resul->fetch(PDO::FETCH_ASSOC)) {
    foreach ($cv as $key => $value) {
      echo '<h1 class="display-1 border-raduis text-center">' .  $value . ' </h1>' . '<br>';
    }
  }

?>

<p class="text-center display-5 site">Bienvenue sur mon Site-PortFolio <br></p>


<section id='profil' class="p-50">
  <div >

    <div class="row justify-content-center">
      <div class="card">
        <div class="img text-center ">
           <span>Presentation :</span>
        
        </div>
        <div class="content">
          <?php
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
          <input type="button" class='bg-dark text-white p-2' value="Télécharger"
            onclick="window.location='CV-Traore-Assa-Developpeur-Web.pdf'">



          <?php endwhile; ?>

        </div>
      </div>
    </div>
  </div>
  </div>
  <hr>




</section>







<?php
// require_once('init/footer.php');
//Footer
?>