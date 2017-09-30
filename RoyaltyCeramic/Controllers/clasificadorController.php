<?php

namespace Controllers;

use Models\Modelos as Modelo;

class clasificadorController {

    private $modelo;

    public function __construct() {
        $this->modelo = new Modelo();
    }

    public function index() {
        $datos = $this->modelo->Listar();
        $arreglo[0] = $datos;
        $arreglo[1] = "Tania Torres";
        return $arreglo;
    }

    public function Ver($num) {
        print $num;
    }

}

?>