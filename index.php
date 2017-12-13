<?php
/**
 * Created by PhpStorm.
 * User: tony
 * Date: 13.12.17
 * Time: 16:31
 */

include_once $_SERVER['DOCUMENT_ROOT'] . '/Controllers/SearchController.php';

$controller = new SearchController();
$controller->searchAction();