<?php

namespace Models;

class BitacoraProductos {

    private $IdBitacoraProductos;
    private $ProductosId;
    private $MovimientosProductosId;
    private $Activo;
    private $UsuariosId;
    private $FechaMovimiento;
    private $AreasId;
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



