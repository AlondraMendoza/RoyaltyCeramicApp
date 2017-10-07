<?php

namespace Models;

class MovimientosProductos {

    private $IdMovimientosProductos;
    private $Nombre;
    private $ProductosId;
    private $UsuariosId;
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
