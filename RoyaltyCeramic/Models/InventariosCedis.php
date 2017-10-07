<?php

namespace Models;

class InventariosCedis {

    private $IdInventariosCedis;
    private $CedisId;
    private $ProductosId;
    private $FechaEntrada;
    private $FechaSalida;
    private $UsuariosIdEntrada;
    private $UsuariosIdSalida;
    private $PedidosId;
    private $FechaPresalida;
    private $Cliente;
    private $PuestosId;
    private $CamionesId;
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