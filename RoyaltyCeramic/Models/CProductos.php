<?php

namespace Models;

class CProductos {

    private $IdCProductos;
    private $Nombre;
    private $Descripcion;
    private $Activo;
    private $Imagen;
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

    public static function ListarProductos() {
        $con = new Conexion();
        $query = "SELECT CProductos.* FROM CProductos where Activo=1 and Nombre != 'Accesorios'";
        $datos = $con->Consultar($query);
        $con->Cerrar();
        return $datos;
    }

}

?>
