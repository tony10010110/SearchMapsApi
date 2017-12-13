<?php
/**
 * Created by PhpStorm.
 * User: tony
 * Date: 13.12.17
 * Time: 20:42
 */

class MarkersController
{
    static public $instance = null;

    private $model;
    private $view;

    public function __construct()
    {
        $this->view = new MarkersView($this);
        $this->model = new MarkersModel();
    }

    public static function getInstance()
    {
        if (self::$instance == null)
        {
            self::$instance = new MarkersController();
        }
        return self::$instance;
    }

    public function getView()
    {
        $this->view->getView();
    }

    public function getMarkers()
    {
        return json_encode($this->model->getMarkers());
    }
}