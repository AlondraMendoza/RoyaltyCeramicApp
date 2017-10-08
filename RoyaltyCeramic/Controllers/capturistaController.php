<?php

namespace Controllers;

use Models\Modelos as Modelo;

class capturistaController {

    private $modelo;

    public function __construct() {
        $this->modelo = new Modelo();
    }

    public function capturaCarro() {
        $productos = new \Models\CProductos();
        $p = $productos->ListarProductos();
        $hornos = new \Models\Hornos();
        $h= $hornos->ListarHornos();
        $array = [
            "listaproductos" => $p,
            "hornos" => $h,];
        return $array;
    }


}

?>