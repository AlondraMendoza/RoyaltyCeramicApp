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
        $modelos = new \Models\Modelos();
        $m = $modelos->ListarModelos(1);
        $hornos = new \Models\Hornos();
        $h= $hornos->ListarHornos();
        $array = [
            "listaproductos" => $p,
            "hornos" => $h,
            "modelos" => $m];
        return $array;
    }


}

?>