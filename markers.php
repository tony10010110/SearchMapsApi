<?php
/**
 * Created by PhpStorm.
 * User: tony
 * Date: 13.12.17
 * Time: 20:37
 */

include_once $_SERVER['DOCUMENT_ROOT'] . 'Controllers/MarkersController.php';

$controller = new MarkersController();
$controller->getMarkers();