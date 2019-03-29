<?php
// var_dump($donnees);
// echo '<pre>';print_r($donnees); echo '</pre>';
// echo '<pre>';var_dump($donnees); echo '</pre>';
?>
<!------------------------------ Récuperer les données ------------------------------>

<!-- Autre presentation d'affichage-->

<ul class="col-md-4 offset-md-4 list-group texte-center mb-4">
<?php foreach ($donnees as $key=> $value):?>
<li class="list-group-item text-center"><?=$value?></li>
<?php endforeach;?>
<li class="list-group-item text-center"> <a href="?op=update&id=<?=$donnees[$id] ?>" class="text-dark"><i class="fas fa-wrench"></i></a></li>
<li class="list-group-item text-center"><a href="?op=delete&id=<?=$donnees[$id] ?>" class="text-dark"><i class="fas fa-trash-alt"></i></a></li>

</ul>
