<?php
/**
 * Created by PhpStorm.
 * User: tony
 * Date: 13.12.17
 * Time: 20:41
 */

class MarkersView
{
    private $controller;

    public function __construct(MarkersController $controller)
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
            <!DOCTYPE html>
            <html>
            <head>
                <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
                <meta charset="utf-8">
                <title>Marker Clustering</title>
            
                <link href="../css/markers.css">
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
            <div id="map"></div>
            <div id="list_loc"></div>
        ';
    }

    private function viewFooter()
    {
        echo '

                <script src="//ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
                
                <script src="../js/markers.js"></script>
                
                <script src="https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/markerclusterer.js"></script>
                <script async defer
                        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCKRKzKwo4yGPOYy5jpC-baUc4Q6eX5K4c&callback=initMap"></script>
                
            </body>
            </html>    
        ';

    }



}