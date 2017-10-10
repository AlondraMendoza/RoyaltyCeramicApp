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

    public static function ListarProductosHornoFecha($dia, $horno) {
        $con = new Conexion();
        $dia = $con->EscapaCaracteres($dia);
        $query = "SELECT * FROM Productos p JOIN CProductos cp ON cp.IdCProductos=p.CProductosid WHERE DATE(p.FechaQuemado)='$dia' AND p.Activo=1 AND p.HornosId=$horno AND p.Clasificado=0 GROUP BY p.CProductosId";
        $datos = $con->Consultar($query);
        return $datos;
    }

    public static function ListarProductosHornoFechaCProd($dia, $horno, $cprod) {
        $con = new Conexion();
        $dia = $con->EscapaCaracteres($dia);
        $query = "SELECT count(*)as cuantos FROM Productos p JOIN CProductos cp ON cp.IdCProductos=p.CProductosid WHERE DATE(p.FechaQuemado)='$dia' AND p.Activo=1 AND p.HornosId=$horno AND p.Clasificado=0 AND cp.IdCProductos=$cprod GROUP BY p.IdProductos";
        //print_r("SELECT count(*)as cuantos FROM Productos p JOIN CProductos cp ON cp.IdCProductos=p.CProductosid WHERE DATE(p.FechaQuemado)='$dia' AND p.Activo=1 AND p.HornosId=$horno AND p.Clasificado=0 AND cp.IdCProductos=$cprod GROUP BY p.IdProductos");
        $datos = $con->Consultar($query);
        $fila = mysqli_fetch_assoc($datos);
        return $fila["cuantos"];
    }

}

?>