<?php

class Route
{
    public function enroute() {
        $request_uri = explode('/', trim($_SERVER['REQUEST_URI'], '/'));
        $script_name = explode('/', trim($_SERVER['SCRIPT_NAME'], '/'));
        $parts = array_diff_assoc($request_uri, $script_name);

        switch($parts[0]) {
            case "":
            case "home":
                include_once("app/Controller/HomeController.php");
                $controller = new HomeController();
                $controller->home();
                break;
            default:
                echo "Page not found";
                break;
        }
    }
}
