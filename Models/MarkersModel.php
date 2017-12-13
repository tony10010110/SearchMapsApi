<?php
/**
 * Created by PhpStorm.
 * User: tony
 * Date: 13.12.17
 * Time: 20:41
 */

include_once $_SERVER['DOCUMENT_ROOT'] . 'Models/Model.php';

class MarkersModel extends Model
{
    private $db;

    public function __construct()
    {
        $this->db = Storage::getInstance();
    }

    public function getMarkers()
    {
        $query = '
                SELECT `name_lacation`, `lat`, `lng`
                FROM `locations`';
        $data = null;

        $result = $this->db->select($query, $data);
        $result->execute();

        return $result->fetchAll();
    }

}