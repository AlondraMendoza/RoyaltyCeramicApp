<?php

namespace Models;

class Personas {

    private $IdPersonas;
    private $Nombre;
    private $APaterno;
    private $AMaterno;
    private $Activo;
    private $UsuariosId;
    private $NEmpleado;
    private $FechaRegistro;
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