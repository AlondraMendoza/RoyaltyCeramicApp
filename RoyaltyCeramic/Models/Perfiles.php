<?php

namespace Models;

class Perfiles {

    private $IdPerfiles;
    private $Nombre;
    private $Activo;
    private $UsuariosId;
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

    public function ObtenerMenus() {
        $query = "SELECT m.* FROM Menus m JOIN Perfiles per ON per.IdPerfiles=m.PerfilesId WHERE per.Activo=1 AND per.IdPerfiles=" . $this->IdPerfiles;
        $datos = $this->con->Consultar($query);
        return $datos;
    }

}

?>