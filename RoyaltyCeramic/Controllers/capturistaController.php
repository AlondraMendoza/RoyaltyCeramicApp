<?php

namespace Controllers;

class capturistaController {

    

    public function __construct() {
        
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
    public function index()
    {
        
    }
       public function Prueba() {
        $algo = "hola de nuevo";
        return $algo;
    }
    public function ObtenerModelos() {
        $id = $_REQUEST["id"];
        $modelos = new \Models\Modelos();
        $m = $modelos->ListarModelos($id);
        $array = [
            "modelo" => $m,];
        return $array;
    }
    
}

?>