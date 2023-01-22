<?php

include_once("Controller.php");

class HomeController extends Controller {

    public function home() {
        $data1 = "<article>
        <h2>News of videogames</h2>
        <h3>Probando Dead Space</h3>
        <p>
        Dead Space era un clásico moderno, pero me sorprendió lo bien que se mantenía todos estos años después.
        Después de jugar las mismas siete horas del remake, creo que me han convencido. 
        </p>
        </article>";
        $data2 = "<article>
        <h2>Exito de la serie The Last of Us </h2>
        <h3>Comentando el exito del primer episodio</h3>
        <p>La serie de HBO The Last of Us ha sido un exito a nivel mundial en el estreno de su primer episodio.
        Su fidelidad al videojuego de Naughty Doy ha sorprendido a todos.</p>
        </article>";
        $data = $data1 . $data2;
        include($_SERVER['DOCUMENT_ROOT'] . "/app/Views/base_view.php");
    }

}