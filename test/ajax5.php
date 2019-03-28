<?php
// require_once('init/header.php');
require_once('init.php');
$table = array();
$today = date("d-m-Y H:i:s");


//------------------REQUETE ALLER------------------------
// $result = $bdd->exec("INSERT INTO commentaires (date,pseudo,email,commentaire) VALUES ('21-03-2019 15:22:34', 'biss','assa.traore@lepoles.com','bien le site')"); //TEST!!!!!
    $result = $bdd->exec("INSERT INTO commentaires (date, pseudo, email, commentaire) VALUES ('$_POST[date]','$_POST[pseudo]','$_POST[email]','$_POST[commentaire]')");

//------------------REQUETE RETOUR------------------------

    // $resultat = $bdd->query("SELECT * FROM commentaires");

    // $table['resultat'] = '<table class="table table-bordered"><tr>';
    
    // for($i = 0; $i < $resultat-> columnCount(); $i++ )//compte le nombre de colonne dans ma BDD
    // {
    //     $colonne = $resultat ->getColumnMeta($i); // Recolte les email des colonnes de ma BDD
    //     // echo '<pre>'; print_r($colonne); echo '</pre>';
    //     $table['resultat'] .="<th>$colonne[name]</th>";
    // }
    // $table['resultat'] .= '</tr>';

    // while($commentaire = $resultat->fetch(PDO::FETCH_ASSOC))
    // {
    //     $table['resultat'] .= '<tr>';   
    //     foreach($commentaire as $value) //revu de la bdd
        
    //     {
    //         $table['resultat'] .= "<td>$value</td>";               
    //     }
    //     $table['resultat'] .= '</tr>';   
        
    // }
    // $table['resultat'] .= '</table>';
 


    


    echo json_encode($table);