<div class="container">

    <?php 
        require_once('init/init.php');
        // var_dump($resultat);

        //------------------REQUETE RETOUR------------------------
        ?>


    <section id="commentaires">
        <h2 class='display-4 text-center'>Commentaires</h2>

        <div class="card">

            <div class="card-header">
                <h5 class="text-center">Votre avis m'interesse ! <br> Laissez un petit commentaire</h5>
                <button type="submit" id="ajouter" class="btn btn-dark">Ajouter un commentaire</button>
            </div>

            <div class="row">
                <?php
                    // ---------------------------- Recuperation des champs de la BDD --------

                    $resultat = $bdd->query("SELECT pseudo, email, commentaire, date FROM commentaires ORDER BY date DESC LIMIT 6");
                    while ($commentaires = $resultat->fetch(PDO::FETCH_ASSOC)) :
                        // var_dump($commentaires['pseudo']);
                ?>

                <div class='card-body col-4'>
                    <blockquote class='blockquote'>
                        <p>
                            <div class='card'>
                                <div class='card-body'>
                                    <h5 class='card-title text-center'> Commentaire de <font
                                            style="text-transform: uppercase;"> <em> <?= $commentaires['pseudo'] ?>
                                            </em> </font>
                                    </h5>
                                    <p class='card-text'> <?= $commentaires['commentaire'] ?></p>
                                </div>
                            </div>
                        </p>
                        <footer class='blockquote-footer text-center'>
                            <cite title='Source Title'> Commentaire poster le : <?= $commentaires['date'] ?></cite>
                        </footer>
                    </blockquote>
                </div>

                <?php endwhile; ?>
            </div>
        </div>
    </section>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
    crossorigin="anonymous"></script>
<script src="ajax/com.js"></script>