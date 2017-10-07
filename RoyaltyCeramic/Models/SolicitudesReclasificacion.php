<?php

namespace Models;

class SolicitudesReclasificacion {

    private $IdSolicitudesReclasificacion;
    private $UsuariosId;
    private $Activo;
    private $UsuariosIdAtendio;
    private $UsuariosIdAutorizo;
    private $FechaSolicitud;
    private $ProductosId;
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