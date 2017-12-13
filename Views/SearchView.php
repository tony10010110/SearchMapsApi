<?php
/**
 * Created by PhpStorm.
 * User: tony
 * Date: 13.12.17
 * Time: 17:05
 */

class SearchView
{
    private $controller;

    public function __construct(SearchController $controller)
    {
        $this->controller = $controller;
    }

    public function getView()
    {
        $this->viewDoctype();
        $this->viewHeader();
        $this->viewContent();
        $this->viewFooter();

    }

    private function viewDoctype()
    {
        echo '
            <!doctype html>
            <html lang="en">
            <head>
                <title>Searching...</title>
                
            </head>
            <body>
        ';
    }

    private function viewHeader()
    {
        echo '
            <div id="header"></div>
        ';
    }

    private function viewContent()
    {
        echo '
            <input type="text" id="map-search" placeholder="Enter name city">
            <input type="button" id="send" value="SEND">
        ';
    }

    private function viewFooter()
    {
        echo '

                <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCKRKzKwo4yGPOYy5jpC-baUc4Q6eX5K4c&libraries=places"
                        type="text/javascript"></script>
                <script src="//ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
                <script src="../js/search.js" type="text/javascript"></script>
            </body>
            </html>    
        ';

    }

}