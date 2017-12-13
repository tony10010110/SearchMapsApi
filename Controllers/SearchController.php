<?php
/**
 * Created by PhpStorm.
 * User: tony
 * Date: 13.12.17
 * Time: 17:05
 */

include_once $_SERVER['DOCUMENT_ROOT'] . 'Models/SearchModel.php';
include_once $_SERVER['DOCUMENT_ROOT'] . 'Views/SearchView.php';

class SearchController
{
    static public $instance = null;

    public $data;

    private $model;
    private $view;

    public function __construct()
    {
        $this->view = new SearchView($this);
        $this->model = new SearchModel();
    }

    public static function getInstance()
    {
        if (self::$instance == null)
        {
            self::$instance = new SearchController();
        }
        return self::$instance;
    }

    public function searchAction()
    {
        //щоб notice не відображався :)
        if (!(isset($_GET['action']))){
            $_GET['action'] = 'search';
        }

        switch ($_GET['action'])
        {
            case 'search':
                {
                    $this->view->getView(); //view form for searching city
                }
            case 'save':
                {
                    $this->setResult();
                    header('Location: http://'.$_SERVER['HTTP_HOST'].'/markers.php'); //redirect on view markers
                }
            default:
                $this->view->getView();
        }
    }

    /**
     * set in DB
     */
    private function setResult()
    {
        $data_db = [
            ':name_location' => $this->data['location_name'],
            ':lat'           => $this->data['coordinates']['lat'],
            ':lng'           => $this->data['coordinates']['lng']
        ];
        $this->model->setResult($data_db);
    }
}