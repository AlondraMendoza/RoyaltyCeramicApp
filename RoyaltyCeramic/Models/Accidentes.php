<?php

namespace Models;

class Accidentes {

    private $IdAccidentes;
    private $AlmacenesId;
    private $CedisId;
    private $UsuariosId;
    private $SolicitudesReclasificacionId;
    private $Activo;
    private $Descripcion;
    private $FechaAccidente;
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
