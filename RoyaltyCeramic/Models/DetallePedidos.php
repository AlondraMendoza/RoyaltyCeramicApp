<?php

namespace Models;

class DetallePedidos {

    private $IdDetallePedidos;
    private $CProductosId;
    private $Cantidad;
    private $PedidosId;
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


