<?php
try
{
    $bdd = new PDO('mysql:host=localhost;dbname=siteportfolio', 'root', '');
    // echo "vous etes bien connecté a la BDD";
}               
catch(Exception $e){
    die('Erreur : ' .$e->getMessage());

}