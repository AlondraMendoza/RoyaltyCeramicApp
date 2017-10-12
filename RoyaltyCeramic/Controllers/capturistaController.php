<?php

namespace Controllers;

class capturistaController {

    

    public function __construct() {
        
    }

    public function CapturaCarro() {
        $productos = new \Models\CProductos();
        $p = $productos->ListarProductos();
        $hornos = new \Models\Hornos();
        $h= $hornos->ListarHornos();
        $array = [
            "listaproductos" => $p,
            "hornos" => $h,];
        return $array;
    }

    public function ObtenerModelos() {
        $id = $_REQUEST["id"];
        $modelos = new \Models\Modelos();
        $m = $modelos->ListarModelos($id);
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