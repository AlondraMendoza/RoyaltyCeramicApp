<?php

namespace Models;

class Clasificaciones {

    private $IdClasificaciones;
    private $Tipo;
    private $Letra;
    private $Activo;
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


