<?php
error_reporting(E_ALL);
ini_set("display_errors", 1); 

include_once 'security/security.php';
include_once 'model/model.php';


include_once 'templates/parts/header.php';

require_once __DIR__ . '/service/MainService.php';
require_once __DIR__ . '/Controller/MainController.php';


use TP7\Controller\MainController;

(new MainController())->UserController();



include_once 'templates/parts/footer.php';
?>
