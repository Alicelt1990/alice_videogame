<?php

include_once("Controller.php");

class HomeController extends Controller {

    public function home() {
        $data1 = "<article>
            ghdsghsfdghfsdghfs
        </article>";
        $data2 = "<div>
            <nav> Soy un nav</nav>
        </div>";
        $data = $data1 . $data2;
        include("homeview.php");
    }

}