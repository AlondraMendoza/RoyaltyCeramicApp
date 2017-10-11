<?php

namespace Controllers;

class capturistaController {

    public function __construct() {
        
    }

//    public function capturaCarro() {
//        $productos = new \Models\CProductos();
//        $p = $productos->ListarProductos();
//        $hornos = new \Models\Hornos();
//        $h = $hornos->ListarHornos();
//        $array = [
//            "listaproductos" => $p,
//            "hornos" => $h,];
//        return $array;
//    }
//
//    public function Prueba() {
//        $algo = "hola de nuevo";
//        return $algo;
//    }
//
//    public function ObtenerModelos() {
//        $id = $_REQUEST["id"];
//        $modelos = new \Models\Modelos();
//        $m = $modelos->ListarModelos($id);
//        $array = [
//            "modelo" => $m,];
//        return $array;
//    }

    public function capturaCarro() {
        $p = \Models\CProductos::ListarProductos();
        $h = \Models\Hornos::ListarHornos();
        $array = [
            "listaproductos" => $p,
            "hornos" => $h];
        return $array;
    }

    public function ObtenerModelos() {
        $id = $_REQUEST["id"];
        $m = \Models\Modelos::ListarModelos($id);
        $array = [
            "modelo" => $m,];
        return $array;
    }

    public function index() {
        
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