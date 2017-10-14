<?php

namespace Controllers;

class capturistaController {

    public function __construct() {
        
    }

    public function capturaCarro() {
        $p = \Models\CProductos::ListarProductos();
        $h = \Models\Hornos::ListarHornos();
        $c = \Models\Carros::ListarCarros();
        $array = [
            "listaproductos" => $p,
            "hornos" => $h,
            "carros" => $c,];
        return $array;
    }

    public function ObtenerModelos() {
        $id = $_REQUEST["id"];
        $m = \Models\Modelos::ListarModelos($id);
        $array = [
            "modelo" => $m,];
        return $array;
    }

    public function ObtenerColores() {
        $id = $_REQUEST["id"];
        $c = \Models\Colores::ListarColores($id);
        $array = [
            "color" => $c,];
        return $array;
    }

}

?>