<?php

namespace Models;

class ErroresCaptura {

    private $IdErrorCaptura;
    private $Nota;
    private $TipoError;
    private $UsuariosIdError;
    private $UsuariosIdAutorizo;
    private $FechaError;
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


