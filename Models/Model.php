<?php
/**
 * Created by PhpStorm.
 * User: tony
 * Date: 13.12.17
 * Time: 17:04
 */

include_once $_SERVER['DOCUMENT_ROOT'] . 'config/Storage.php';

class Model
{

    protected $db; //connected database

    public function __construct()
    {
        $this->db = Storage::getInstance();
    }

}