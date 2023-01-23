<?php

include_once("Controller.php");

class AssetsController extends Controller {
    
    public function getStyles() {
        include($_SERVER['DOCUMENT_ROOT'] . "/app/assets/public/css/styles.php");
    }

}