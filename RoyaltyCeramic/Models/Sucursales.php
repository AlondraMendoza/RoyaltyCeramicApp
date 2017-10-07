<?php

namespace Models;

class Sucursales {

    private $IdSucursales;
    private $Activo;
    private $UsuariosId;
    private $Nombre;
    private $con;

    public function __construct() {
        $this->con = new Conexion();
    }

    public function set($atributo, $valor) {
        $this->$atributo = $valor;
    }

    public function get($atributo) {
        return $this->$atributo;
    }

}

?>