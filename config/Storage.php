<?php
/**
 * Created by PhpStorm.
 * User: tony
 * Date: 13.12.17
 * Time: 17:02
 */

class Storage
{
    private $db;
    private static $instance;

    public function __construct()
    {
        $this->db = new PDO('mysql:host=localhost;dbname=TastingTaskForLTECH', 'admin', '123');
        $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $this->db->prepare("SET NAMES utf8")->execute();
    }

    public static function getInstance() {

        if (!(self::$instance instanceof self)) {
            self::$instance = new self();
        }

        return self::$instance;
    }
}