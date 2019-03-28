<!doctype html>

<html lang="fr">

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Font Awseome -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css"
            integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
            integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        <!-- JS Commentaires -->
        <!-- <script src="Ajax-commentaires/com.js"></script> -->
        <!-- <script src="Ajax-commentaires/com.js"></script> -->


        <title>Site Portfolio</title>
    </head>
    <body>
    <?php
    // recuperation de PPROFIL
    require_once('CV/profil.php');
    ?>

    <nav class="navbar navbar-dark bg-dark mainMenu" id="maNav">
        <input type="checkbox" name="panel" class="hidden" id="panel">
        <label for="panel" class="menuTitle"></label>
        <div class="clear"></div>
        <ul class="menu">
            <li><a class="navbar-brand" href="#profil">Profil</a></li>
            <li><a class="navbar-brand" href="#experiences">Experiences</a></li>
            <li><a class="navbar-brand" href="#competences">Compétences</a></li>
            <li><a class="navbar-brand" href="#formations">Formations</a></li>
            <li><a class="navbar-brand" href="#contact">Contact</a></li>
            <li><a class="navbar-brand" href="#commentaires">Commentaires</a></li>
        </ul>
    </nav>


      
            <?php
                // recuperation de PPROFIL
                require_once('init/style.php');
                echo '<hr>';

                require_once('CV/experiences.php');
                echo '<hr>';

                require_once('CV/formations.php');
                echo '<hr>';

                require_once('JavaScript/competences.php');
                echo '<hr>';

                require_once('CV/contact.php');
                echo '<hr>';
            ?>
 
            
        <?php
            require('ajax/index.php');
            // require('Ajax-commentaires/commentaires.php');
            // require_once('CV/Ajax-commentaires/formulaire.php');
            echo '<hr>';
        ?>

    <!-- Boutton poure remonter -->
        <a href="#profil"><button class="monter" type="button"><i class="fa fa-arrow-circle-up fa-2x" aria-hidden="true"></i></button></a>

        <!-- FOOTER -->
        <footer class=" footer bg-dark text-center text-white p-2">
            &copy; 2019 - Assa TRAORE - Mon site Portfolio <span class="text-white"> <a href="admin/index.php"
                    color='black'>.</a></span>

            <div class="text-center">
                <a href="http://facebook.com"><i class="fab fa-facebook-square fa-3x p-3 text-white"></i></a>
                <a href="https://fr.linkedin.com"><i class="fab fa-linkedin fa-3x p-3 text-white"></i></a>
                <a href="https://github.com/TraoreAssa"><i class="fab fa-github-square fa-3x p-3  text-white"></i></a>
            </div>

        </footer>

        
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
            crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
            integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
            crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
            integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
            crossorigin="anonymous"></script>
    </body>

</html>