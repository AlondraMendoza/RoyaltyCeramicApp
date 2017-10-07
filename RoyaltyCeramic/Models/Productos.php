<?php

namespace Models;

class Productos {

    private $IdProductos;
    private $Nombre;
    private $Descripcion;
    private $CProductosModelosId;
    private $ModelosColoresId;
    private $CarrosId;
    private $HornosId;
    private $FechaQuemado;
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