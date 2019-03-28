<?php
// echo '<pre>';    
// print_r($donnees); 
// echo '</pre>';
// var_dump($donnees);
// echo '<pre>';print_r($fields); echo '</pre>';
// echo '<pre>';print_r($donnees); echo '</pre>';
?>
<div>
    <a href="?op=add" class="btn btn-larg btn-info"><i class="fas fa-plus"></i> Ajouter</a>
    <br>
</div> <br>
 
<!------------------------------ Récuperer les données ------------------------------>
<table class="table table-hover text-center">

    <thead><tr>
        <th>ID</th> 
        <?php foreach($fields as $colonne):?>
        
        <th>
            <?= $colonne['Field']; ?>
        </th>

        <?php endforeach;?>

       
        <th>Modif</th>
        <th>Supp</th>

    </tr></thead>
   

    <!----------- Récuperer les données interieur du tableau ----------->
    <?php 
    
    foreach ($donnees as $value):
    ?>
   
    <tr>
        <td>
        <?=implode('</td><td>', $value)?>
        </td>
    

        <td>
        <a href="?op=update&id=<?=$value[$id] ?>"class="text-dark"><i class="fas fa-pen"></i></a>
        </td>
        <td>
        <a href="?op=delete&id=<?=$value[$id] ?>" class="text-dark"><i class="fas fa-times"></i></a>
        </td>
    </tr>
    <?php endforeach;?>

        


</table>

            
