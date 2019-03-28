<div class="container">
    <?php

                // echo '<pre>';    
                // print_r($_FILES); //l'image se stock dans $_FILES
                // echo '</pre>';    

                $bdd = new PDO('mysql:host=localhost;dbname=siteportfolio', 'root', '');

                // if(!empty($_FILES['image']['name']))
                if(!empty($_FILES['photo']['name']))
                {
                    $nom_photo = $_FILES['photo']['name'];
                    // $nom_photo = uniqid() . '-' . $_FILES['photo']['name'];
                    //uniqid() permet de définir un identifiant unique
                    // echo 'nom photo :' . $nom_photo . '<br>'; //Nom de la photo

                    $photoBdd = "http://localhost/Cours/SitePortfolio/image/$nom_photo";
                    // $photoBdd = "http://localhost/Cours/SitePortfolio/admin/img/$nom_photo";
                    // $photoBdd = "http://localhost/support_poissy_2018/support-poissy-2018/Site-Portfolio/admin/img/$nom_photo";
                    //on déclare l'URL de la photo/image  qui sera conservé dans la BDD
                    // echo 'Photo Bdd : ' . $photoBdd . '<br> <br>'; //URL de l'image 
    
                    $photoDossier = $_SERVER['DOCUMENT_ROOT'] . "/Cours/SitePortfolio/image/$nom_photo";
                    // $photoDossier = $_SERVER['DOCUMENT_ROOT'] . "/Cours/SitePortfolio/admin/img/$nom_photo";
                    // $photoDossier = $_SERVER['DOCUMENT_ROOT'] . "/support_poissy_2018/support-poissy-2018/Site-Portfolio/admin/img/$nom_photo";
                    //On déclare le chemin physique de la photo, ou elle sera stockée
                    // echo 'Dossier photo : ' . $photoDossier . '<br> <br>';

                    copy($_FILES['photo']['tmp_name'], $photoDossier);
                    //Permet de copier la photo / image dans le dossier sur le serveur

                    $resultat = $bdd->exec("INSERT INTO photo (photo) VALUES ('$photoBdd')");
                    //Insert en BDD de l'URL de l'image / photo. On ne conserve jamais l'image elle même dans la BDD, ce sreait trop lourd pour le serveur
       
                }

            ?>

    <form method="post" action="" enctype="multipart/form-data" class="col-md-6 offset-md-3 text-center">
        <!-- multipart/form-data obligatoire pour inserer une image -->
        <div class="form-group">
            <label for="photo">photo</label>
            <input type="file" class="form-control" id="photo" name="photo">
            <small id="emailHelp" class="form-text text-muted">Uploder une photo</small>
        </div>

        <button type="submit" class="col-md-6 btn btn-info mb-5" >Upload</button>

    </form>

    <div class="row">

        <!------------------------------ Récuperer les données ------------------------------>
        <table class="table table-hover text-center">

            <thead>
                <tr>
                    <th>ID</th>
                    <?php foreach($fields as $colonne):?>

                    <th>
                        <?= $colonne['Field']; ?>
                    </th>

                    <?php endforeach;?>

                    <th>modifier</th>
                    <th>Supp</th>

                </tr>
            </thead>

            <!----------- Récuperer les données interieur du tableau ----------->
            <?php foreach ($donnees as $value):
?>

            <tr>
                <td>
                    <?=implode('</td><td>', $value)?>
                </td>

                <td>
                    <a href="?op=update&id=<?=$value[$id] ?>"class="text-dark"><i class="fas fa-pen"></i></a>
                </td>
                <td>
                    <a href="?op=delete&id=<?=$value[$id] ?>" class="text-dark"><i class="fas fa-trash-alt"></i></a>
                </td>
            </tr>
            <?php endforeach;?>

        </table>
        <?php
            $result = $bdd->query("SELECT photo FROM photo");
            //  echo '<pre>';    
            //  print_r($result); 
            //  echo '</pre>'; 

            while($data = $result->fetch(PDO::FETCH_ASSOC)):
                /* 
                    ()  = recuperer dans la base de données
                    les : remplace les {} pour pouvoir mettre du HTML 
                */
                // echo '<pre>';    
                // print_r($data); 
                // echo '</pre>';
                
            ?>
        <div class="col-md-4 text-center p-2">
            <img src="<?= $data['photo'] ?>" alt="" class="col-md-6">
            <!-- reouverture d'une balise php -->
        </div>
        <?php endwhile; ?>
    

    </div>
</div>