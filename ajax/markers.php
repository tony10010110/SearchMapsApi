<?php
/**
 * Created by PhpStorm.
 * User: tony
 * Date: 14.12.17
 * Time: 0:03
 */

include_once $_SERVER['DOCUMENT_ROOT'].'/Controllers/MarkersController.php';

$controller = MarkersController::getInstance();

echo $controller->getMarkers();
header("Content-type: application/json");