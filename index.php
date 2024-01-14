<?php 

require_once __DIR__ . '/app/Controller/FrontPageController.php';

use Hennessey\Controller\FrontPageController;

$controller = new FrontPageController();
$controller->display();