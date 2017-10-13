<?php

namespace Models;

class Carros {

    private $IdCarros;
    private $Nombre;
    private $Activo;
    private $UsuariosId;
    private $SucursalesId;
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

