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
    
    public static function ListarCarros() {
        $con = new Conexion();
        $query = "SELECT Carros.* FROM Carros where Activo=1";
        //falta agregar la sucursal
        $datos = $con->Consultar($query);
        $con->Cerrar();
        return $datos;
    }
    

}

?>

