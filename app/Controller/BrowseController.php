<?php

include_once("Controller.php");

class BrowseController extends Controller {
    
    public function getBrowse() {
        include($_SERVER['DOCUMENT_ROOT'] . "/app/Controller/BrowseController.php");
    }

}