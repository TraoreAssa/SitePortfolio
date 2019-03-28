<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">


    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>


    <!-- <script src="ajax3.js"></script> -->

    <title>Commentaires</title>
</head>

<body>

    <div class="container">
        <?php 
        require_once('init.php');
        $table = array();


//------------------REQUETE ALLER------------------------
        $result = $bdd->exec("INSERT INTO commentaires (date,pseudo,email,commentaire) VALUES ('21-03-2019 15:22:34', 'biss','assa.traore@lepoles.com','bien le site')"); //TEST!!!!!


        // $result = $bdd->exec("INSERT INTO commentaires (date, pseudo, email, commentaire) VALUES ('$_POST[date]','$_POST[pseudo]','$_POST[email]','$_POST[commentaire]')");

        // var_dump($resultat);

        ?>
        <div id="commentaire">
            <div class="card ">
                <div class="card-header">
                    <h1 class="text-center">Commentaires</h1>
                    <div id="demo"></div>
                    <button type="button" id="action" class="btn btn-dark">Ajouter un commentaire</button>
                </div>
            </div>

            <?php

            // ---------------------------- Recuperation de tout les champs de la BDD --------

            $resultat = $bdd->query("SELECT pseudo, email, commentaire, date FROM commentaires");
            while ($commentaires = $resultat->fetch(PDO::FETCH_ASSOC)){

                $table['resultat'] =  "<div class='card-body'>";
                $table['resultat'] .= "<blockquote class='blockquote mb-0'>";
                $table['resultat'] .= " <p>";
                $table['resultat'] .= "<div class='card w-50 offset-md-3'>";
                $table['resultat'] .= "<div class='card-body'>";
                                // "<h5 class='card-title'> De : <em> <?= $commentaires['pseudo'] 
                                $table['resultat'] .= "<h5 class='card-title'> De : <em> $commentaires[pseudo]</em></h5>";
                                $table['resultat'] .= "<p class='card-text'> <?= $commentaires[commentaire] ?></p>";
                                $table['resultat'] .= "</div>
                         </div>
                    </p>
                    <footer class='blockquote-footer text-center'>
                        <cite title='Source Title'> $commentaires[date] </cite>
                    </footer>
                </blockquote>
            </div>

            <hr>
        </div>
    </div>";
            } 
                // var_dump($commentaires['pseudo']);
                
            //       $resultat = $bdd->query("SELECT pseudo, email, commentaire, date FROM commentaires");
            // while ($commentaires = $resultat->fetch(PDO::FETCH_ASSOC)) :
            //     // var_dump($commentaires['pseudo']);
            //     ?>

            <!-- // <div class='card-body'>
            //     <blockquote class='blockquote mb-0'>
            //         <p>
            //             <div class='card w-50 offset-md-3'>
            //                 <div class='card-body'>
            //                     <h5 class='card-title'> De : <em> <?= $commentaires['pseudo'] ?> </em></h5>
            //                     <p class='card-text'> <?= $commentaires['commentaire'] ?></p>
            //                 </div>
            //             </div>
            //         </p>
            //         <footer class='blockquote-footer text-center'>
            //             <cite title='Source Title'> <?= $commentaires['date'] ?></cite>
            //         </footer>
            //     </blockquote>
            // </div>
            // <hr> -->

            <!-- //  -->

        </div>
    </div>


    <script>
        $(document).ready(function() {
            $('#action').click(function(event) {
                // alert('Tout est OK !');

                $.ajax({
                    url: "formulaire.php", // URL de destination
                    dataType: "text", // Type de donnée
                    success: function(data) {
                        //data est la reponse de ma requete (requete retour (success))
                        /* 
                        En cas de succes de requetes, la réponse de la requete est stockée dans 'data
                        La methode "ajax()" se charge de tout faire, la réponse de la requete est parsé au format JSON, sinon on ne pourrais pas vévivuler des données en HTTP
                        */
                        $('#demo').html(data);
                        /* 
                        On séléctionne la div id " demo" dans la quelle on accroche le resultat de la requete AJAX contenu dans data 
                        */
                    }
                });

            });
        });
    </script>
</body>

</html> 