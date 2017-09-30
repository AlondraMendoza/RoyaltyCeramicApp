<?php

namespace Controllers;

use Models\Modelos as Modelo;

class usuarioController {

    private $modelo;

    public function __construct() {
        $this->modelo = new Modelo();
    }

    public function index() {
        
    }

    public static function NombreCompleto() {
        return "Tania Torres";
    }

    public function Ver($num) {
        print $num;
    }

    public function Salir() {
        
    }

}

?>