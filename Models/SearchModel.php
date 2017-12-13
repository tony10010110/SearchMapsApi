<?php
/**
 * Created by PhpStorm.
 * User: tony
 * Date: 13.12.17
 * Time: 17:04
 */

include_once $_SERVER['DOCUMENT_ROOT'] . 'Models/Model.php';

class SearchModel extends Model
{
    private $db;

    public function __construct()
    {
        $this->db = Storage::getInstance();
    }

    public function setResult($data)
    {
        $query = '
				INSERT INTO `locations`(`name_lacation`, `lat`, `lng`)
				VALUES (:name_location, :lat, :lng)';

        return $this->db->execute($query, $data);
    }

}