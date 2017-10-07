<?php

namespace Models;

class Puestos {

    private $IdPuestos;
    private $Nombre;
    private $AreasId;
    private $PersonasId;
    private $Activo;
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