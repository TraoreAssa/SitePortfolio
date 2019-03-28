<?php
require_once 'autoload.php';
//                namespace   class
$controller = new Controller\ExperiencesController; 


// echo '<pre>'; var_dump($controller); echo '</pre>';

$controller->handlerRequest();

