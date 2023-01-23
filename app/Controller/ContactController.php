<?php

include_once("Controller.php");

class ContactController extends Controller {
    
    public function getContact() {
        include($_SERVER['DOCUMENT_ROOT'] . "/app/Controller/ContactController.php");
    }

}