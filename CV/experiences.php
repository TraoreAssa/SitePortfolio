<?php
// require_once('init/init.php');
// require_once('init/header.php');
require_once('init/init.php');

//Header
?>

<section id='experiences'>
  <h2 class='display-4 text-center'> Mes Expériences</h2>

  <div class="row">
    <?php
        $resultat = $bdd->query("SELECT * FROM experiences ORDER BY date_debut DESC");
        while ($experiences = $resultat->fetch(PDO::FETCH_ASSOC)) :
      ?>

      <div class='card m-4 p-1 text-center' style='width: 20.5rem;'>
        <div class='card-body'>
        <i class="fas fa-suitcase fa-3x"></i> <br>
          <h4 class='card-title'><?= $experiences['poste'] ?></h4>
          <h6 class='card-subtitle mb-2 text-muted'><?= $experiences['entreprise'] ?></h6>
          <p class='card-text'><?= $experiences['date_debut'] ?> à <?= $experiences['date_fin'] ?></p>
          <p class='card-text'><?= $experiences['description'] ?></p>

        </div>
      </div>

      <?php endwhile; ?>

  </div>


</section>
<?php
// require_once('init/footer.php');
//Footer
?>
