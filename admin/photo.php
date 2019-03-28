<?php
require_once 'autoload.php';

 /* 
    Etape 1 = autoload => require 'Controller.php'; dans controller -> new \model\EntityRepository;
    Etape 2 = donc autoload => require 'EntityRepository.php'; 
 */
//                namespace   class
$controller = new Controller\PhotoController; 


// echo '<pre>'; var_dump($controller); echo '</pre>';

$controller->handlerRequest();

