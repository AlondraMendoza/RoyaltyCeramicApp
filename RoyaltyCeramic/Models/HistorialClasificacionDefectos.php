<?php

namespace Models;

class HistorialClasificacionDefectos {

    private $IdHistorialClasificacionDefectos;
    private $DefectosId;
    private $HistorialClasificacionId;
    private $PuestosId;
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


