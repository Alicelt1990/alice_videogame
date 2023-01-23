<?php

include_once("Controller.php");

class AboutController extends Controller {
    
    public function getAbout() {
        include($_SERVER['DOCUMENT_ROOT'] . "/app/Controller/AboutController.php");
    }

}