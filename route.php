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
            case "assets":
                $this->getAssets($parts[1]);
                break;
            default:
                echo "Page not found";
                break;
        }
    }

    public function getAssets($part) {
        switch($part) {
            case "styles.css":
                include_once("app/Controller/AssetsController.php");
                $controller = new AssetsController();
                $controller->getStyles();
                break;
        }
    }
}
