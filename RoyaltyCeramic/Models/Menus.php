<?php

namespace Models;

class Menus {

    private $IdMenus;
    private $Nombre;
    private $Ruta;
    private $PerfilesId;
    private $Icono;
    private $Descripcion;
    private $Color;
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