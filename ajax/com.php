<?php
// require_once('init/header.php');
// require_once('init.php');
require_once('../init/init.php');
$carte = array();

//------------------REQUETE ALLER------------------------
// $result = $bdd->exec("INSERT INTO commentaires (date,pseudo,email,commentaire) VALUES ('21-03-2019 15:22:34', 'biss','assa.traore@lepoles.com','bien le site')"); //TEST!!!!!

$result = $bdd->exec("INSERT INTO commentaires ( date, pseudo, email, commentaire ) VALUES ('$_POST[date]','$_POST[pseudo]','$_POST[email]','$_POST[commentaire]' )");


//------------------REQUETE RETOUR------------------------
