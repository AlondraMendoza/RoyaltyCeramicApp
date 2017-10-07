<?php

namespace Models;

class Pedidos {

    private $IdPedidos;
    private $FechaRegistro;
    private $UsuariosId;
    private $FechaCompletado;
    private $Cliente;
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