<?php

namespace Models;

class Hornos {

    private $IdHornos;
    private $SucursalesId;
    private $Activo;
    private $UsuariosId;
    private $NHorno;
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


