<?php
// require_once('init/header.php');
// require_once('../init.php');
require_once('init/init.php');
$resultat = $bdd->query("SELECT * FROM realisations");

?>




<section id='competences'>

    <h2 class='display-4 text-center' id='competence'>Mes Compétences</h2>
    <ul class="comp">
        <div class='justify-content-center row'>
            <li>
                <img onclick="" src="image/html-css.jpg" title="Clique pour voir mes Réalisations en HTML - CSS" id="HTML">
            
            </li>
            <li>
                <img onclick="" src="image/js.jpg"  title="Clique pour voir mes Réalisations en JS" id="JS">
            </li>
        </div>

        <div class="row justify-content-center">
            <li>
                <img onclick="" src="image/gimp.jpeg" title="Clique pour voir mes Réalisations en GIMP" id="GIMP">
            </li>

            <li>
                <img onclick="" src="image/php.jpg" title="Autres compétences"  id="PHP">
            </li>
        </div>
    </ul>

    <div class="row">
        <?php
            while ($realisation = $resultat->fetch(PDO::FETCH_ASSOC)) :
        ?>
                
        <div class="text-center col-3">
            <p><?= $realisation['competences'] ?> <br>
            <?= $realisation['date_rea'] ?> </p>
        </div>
                    
        <?php endwhile; ?>
    </div>
    

    <script>

        //H2
        // Au survole de ma souris mon h2 change
        var monH2 = document.getElementById("competence");
        monH2.addEventListener("mouseover", changerTxt);

        function changerTxt() {
            monH2.innerHTML = "Mes Réalisations ";
        }

        //Lorsque la souris n'est plus dessus il revient comme au depart
        monH2.addEventListener("mouseout", function () {
            monH2.innerHTML = "Mes Compétences";
        });


        //IMAGES

        //----------- HTML ----------------
        var button = document.querySelector('#HTML');

        button.addEventListener('click', carrousel);

        function carrousel() {
            var monImage = document.querySelector("#HTML");
            var monImageSource = monImage.getAttribute("src");

            switch (monImageSource) {
                case "image/html-css.jpg":
                    monImage.src = "image/Forum.png";
                    break;
                case "image/Forum.png":
                    monImage.src = "image/pomme.png";
                    break;
                case "image/pomme.png":
                    monImage.src = "image/voeux.png";
                    break;
                case "image/voeux.png":
                    monImage.src = "image/maquettes.jpg";
                    break;
                case "image/maquettes.jpg":
                    monImage.src = "image/graphisme-catalogue.jpg";
                    break;
                case "image/graphisme-catalogue.jpg":
                    monImage.src = "image/html-css.jpg";
                    break;


            }
        }

        //----------- JS ----------------
        var buttonjs = document.querySelector('#JS');

        buttonjs.addEventListener('click', carrouseljs);

        function carrouseljs() {
            var js = document.querySelector("#JS");
            var jsSource = js.getAttribute("src");

            switch (jsSource) {
                case "image/js.jpg":
                    js.src = "image/facture.png";
                    break;
                case "image/facture.png":
                    js.src = "image/js.jpg";
                    break;

            }
        }

        //----------- Autre competences ----------------
        var buttonphp = document.querySelector('#PHP');

        buttonphp.addEventListener('click', carrouselphp);

        function carrouselphp() {
            var php = document.querySelector("#PHP");
            var phpSource = php.getAttribute("src");

            switch (phpSource) {
                case "image/php.jpg":
                    php.src = "image/sql.png";
                    break;
                case "image/sql.png":
                    php.src = "image/bootstrap.png";
                    break;
                case "image/bootstrap.png":
                    php.src = "image/wp.jpg";
                    break;
                case "image/wp.jpg":
                    php.src = "image/Angular.png";
                    break;
                case "image/Angular.png":
                    php.src = "image/symfony.png";
                    break;
                case "image/symfony.png":
                    php.src = "image/office.jpg";
                    break;
                case "image/office.jpg":
                    php.src = "image/php.jpg";
                    break;
            }
        }

        //----------- GIMP ----------------
        var buttongimp = document.querySelector('#GIMP');

        buttongimp.addEventListener('click', carrouselgimp);

        function carrouselgimp() {
            var gimp = document.querySelector("#GIMP");
            var gimpSource = gimp.getAttribute("src");

            switch (gimpSource) {
                case "image/gimp.jpeg":
                    gimp.src = "image/gondole.png";
                    break;
                case "image/gondole.png":
                    gimp.src = "image/peinture.png";
                    break;
                case "image/peinture.png":
                    gimp.src = "image/camionnette.png";
                    break;
                case "image/camionnette.png":
                    gimp.src = "image/gamins.png";
                    break;
                case "image/gamins.png":
                    gimp.src = "image/gimp.jpeg";
                    break;
            }
        }



    </script>

</section>

<?php
// require_once('init/footer.php');
//Footer
?>