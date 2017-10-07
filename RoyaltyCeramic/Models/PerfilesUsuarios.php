<?php

namespace Models;

class PerfilesUsuarios {

    private $IdPerfilesUsuarios;
    private $UsuariosId;
    private $Activo;
    private $PerfilesId;
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