<?php

namespace Models;

class HistorialClasificacion {

    private $IdHistorialClasificacion;
    private $ProductosId;
    private $ClasificacionesId;
    private $FechaClasificacion;
    private $UsuariosId;
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


