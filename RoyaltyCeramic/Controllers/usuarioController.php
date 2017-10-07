<?php

namespace Controllers;

use Models\Modelos as Modelo;

class usuarioController {

    private $modelo;

    public function __construct() {
        $this->modelo = new Modelo();
    }

    public function ObtenerUsuario() {
        $usuario = new \Models\Usuarios();
        $usuario->set("IdUsuarios", 1);
        return $usuario;
    }

    public function index() {
        $lista = $this->ObtenerUsuario()->ObtenerPerfiles();

        $array = [
            "listaperfiles" => $lista,
            "otravariable" => 5,];
        return $array;
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