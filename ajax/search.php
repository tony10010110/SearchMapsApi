<?php
/**
 * Created by PhpStorm.
 * User: tony
 * Date: 13.12.17
 * Time: 18:27
 */

include_once $_SERVER['DOCUMENT_ROOT'].'/Controllers/SearchController.php';

$json = file_get_contents("php://input");
$obj = json_decode($json);

$arr['location_name'] = $obj->city;
$arr['coordinates']['lat'] = $obj->coordinates[0];
$arr['coordinates']['lng'] = $obj->coordinates[1];

$arr = [
    'location_name' => $obj->city,
    'coordinates' => [
        'lat' => $obj->coordinates[0],
        'lng' => $obj->coordinates[1]
    ]
];

$controller = SearchController::getInstance();
$controller->data = $arr;

$controller->searchAction();
