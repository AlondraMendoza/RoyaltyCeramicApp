<?php

namespace Models;

class InventariosAlmacen {

    private $IdInventariosAlmacen;
    private $AlmacenesId;
    private $ProductosId;
    private $FechaEntrada;
    private $FechaSalida;
    private $UsuariosIdEntrada;
    private $UsuariosIdSalida;
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