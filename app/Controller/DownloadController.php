<?php

include_once("Controller.php");

class DownloadController extends Controller {
    
    public function getDownload() {
        include($_SERVER['DOCUMENT_ROOT'] . "/app/Controller/DownloadController.php");
    }

}