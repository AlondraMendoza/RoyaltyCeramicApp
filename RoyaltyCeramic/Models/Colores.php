<?php

namespace Models;

class Colores {

    private $IdColores;
    private $Nombre;
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

    public static function ListarColores($id) {
        $con = new Conexion();

        $query = "SELECT c.Nombre, c.Descripcion from Colores as c join ModelosColores
        as MC on c.IdColores=MC.ColoresId join Modelos as m on MC.ModelosId=m.IdModelos
        where c.Activo=1 and m.IdModelos=$id";
        $datos = $con->Consultar($query);
        return $datos;
    }

}
?>


