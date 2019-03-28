<?php
// require_once('init/header.php');
//Header

require_once('init/init.php');
//BDD

// $resultat = $bdd->query("SELECT * FROM formations");
// while ($formations = $resultat->fetch(PDO::FETCH_ASSOC)) :

//Header
?>


<section  id='formations'>
<h2 class='display-4 text-center'>Mes Formations</h2>

<div class="row">
    <?php
        $resultat = $bdd->query("SELECT * FROM formations ORDER BY date_debut DESC ");
        while ($formations = $resultat->fetch(PDO::FETCH_ASSOC)) :
      ?>

      <div class='card m-3 p-1 text-center rounded-circle' style='width: 21rem;'>
        <div class='card-body'>
        <i class="fas fa-graduation-cap fa-3x"></i> <br>
          <h4 class='card-title'><?= $formations['titre'] ?></h4>
          <h6 class='card-subtitle mb-2 text-muted'><?= $formations['lieu'] ?></h6>
          <p class='card-text'><?= $formations['date_debut'] ?> à <?= $formations['date_fin'] ?></p>
          <p class='card-text'><?= $formations['description'] ?></p>

        </div>
      </div>

      <?php endwhile; ?>

  </div>

</section>

<?php
// require_once('init/footer.php');
//Footer
?>


