<?php

namespace Models;

class Defectos {

    private $IdDefectos;
    private $Nombre;
    private $CatDefectosId;
    private $Descripcion;
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


