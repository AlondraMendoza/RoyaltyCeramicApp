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

    public function ListarHornos() {
        $query = "SELECT Hornos.* FROM Hornos where Activo=1";
        $datos = $this->con->Consultar($query);
        return $datos;
    }

}

?>


