<?php

namespace Models;

class Camiones {

    private $IdCamiones;
    private $Placas;
    private $Modelo;
    private $Marca;
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



