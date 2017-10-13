<?php

namespace Models;

class Productos {

    private $IdProductos;
    private $Nombre;
    private $Descripcion;
    private $CProductosId;
    private $ModelosId;
    private $ColoresId;
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
        $query = "SELECT Imagen,IdCProductos,Nombre,HornosId,CProductosId "
                . "FROM Productos p JOIN CProductos cp "
                . "ON cp.IdCProductos=p.CProductosid "
                . "WHERE DATE(p.FechaQuemado)='$dia' "
                . "AND p.Activo=1 "
                . "AND p.HornosId=$horno "
                . "AND p.Clasificado=0 "
                . "GROUP BY p.CProductosId";
        $datos = $con->Consultar($query);
        $con->Cerrar();
        return $datos;
    }

    public static function ListarProductosHornoFechaCProd($dia, $horno, $cprod) {
        $con = new Conexion();
        $dia = $con->EscapaCaracteres($dia);
        $query = "SELECT count(*)as cuantos "
                . "FROM Productos p "
                . "WHERE DATE(p.FechaQuemado)='$dia' "
                . "AND p.Activo=1 "
                . "AND p.HornosId=$horno "
                . "AND p.Clasificado=0 "
                . "AND p.CProductosId=$cprod ";
        //print_r("SELECT count(*)as cuantos FROM Productos p JOIN CProductos cp ON cp.IdCProductos=p.CProductosid WHERE DATE(p.FechaQuemado)='$dia' AND p.Activo=1 AND p.HornosId=$horno AND p.Clasificado=0 AND cp.IdCProductos=$cprod GROUP BY p.IdProductos");
        $datos = $con->Consultar($query);
        $fila = mysqli_fetch_assoc($datos);
        $con->Cerrar();
        return $fila["cuantos"];
    }

    public static function ListarProductosHornoFechaCProdModelo($dia, $horno, $cprod, $modelo) {
        $con = new Conexion();
        $dia = $con->EscapaCaracteres($dia);
        $query = "SELECT count(*)as cuantos "
                . "FROM Productos p "
                . "WHERE DATE(p.FechaQuemado)='$dia' "
                . "AND p.Activo=1 "
                . "AND p.HornosId=$horno "
                . "AND p.Clasificado=0 "
                . "AND p.CProductosId=$cprod "
                . "AND p.ModelosId=$modelo ";
        $datos = $con->Consultar($query);
        $fila = mysqli_fetch_assoc($datos);
        $con->Cerrar();
        return $fila["cuantos"];
    }

    public static function ListarModelosHornoFechaProducto($dia, $horno, $cprod) {
        $con = new Conexion();
        $dia = $con->EscapaCaracteres($dia);
        $query = "SELECT m.Nombre,"
                . "p.ModelosId,"
                . "p.CProductosId,"
                . "pm.Imagen,"
                . "p.HornosId "
                . "FROM Productos p "
                . "JOIN Modelos m on m.IdModelos=p.ModelosId "
                . "JOIN CProductosModelos pm on pm.ModelosId=p.ModelosId "
                . "WHERE DATE(p.FechaQuemado)='$dia' "
                . "AND p.Activo=1 "
                . "AND pm.CProductosId=p.CProductosId "
                . "AND p.HornosId=$horno "
                . "AND p.Clasificado=0 "
                . "AND p.CProductosId=$cprod "
                . "GROUP BY m.IdModelos";
        $datos = $con->Consultar($query);
        $con->Cerrar();
        return $datos;
    }

    public static function ListarColoresClasificacion($dia, $horno, $cprod, $mod) {
        $con = new Conexion();
        $dia = $con->EscapaCaracteres($dia);
        $query = "SELECT c.Nombre,"
                . "c.Descripcion,"
                . "p.ModelosId,"
                . "p.CProductosId,"
                . "p.HornosId, "
                . "c.IdColores "
                . "FROM Productos p "
                . "JOIN Colores c on c.IdColores=p.ColoresId "
                . "WHERE DATE(p.FechaQuemado)='$dia' "
                . "AND p.Activo=1 "
                . "AND p.HornosId=$horno "
                . "AND p.CProductosId = $cprod "
                . "AND p.ModelosId = $mod "
                . "AND p.Clasificado = 0 "
                . "GROUP BY c.IdColores";
        $datos = $con->Consultar($query);
        $con->Cerrar();
        return $datos;
    }

    public static function ProdPendientesColores($dia, $horno, $cprod, $modelo, $color) {
        $con = new Conexion();
        $dia = $con->EscapaCaracteres($dia);
        $query = "SELECT count(*)as cuantos "
                . "FROM Productos p "
                . "WHERE DATE(p.FechaQuemado)='$dia' "
                . "AND p.Activo=1 "
                . "AND p.HornosId=$horno "
                . "AND p.Clasificado=0 "
                . "AND p.CProductosId=$cprod "
                . "AND p.ModelosId=$modelo "
                . "AND p.ColoresId=$color ";
        $datos = $con->Consultar($query);
        $fila = mysqli_fetch_assoc($datos);
        $con->Cerrar();
        return $fila["cuantos"];
    }

    public static function ProductosSeleccion($dia, $horno, $cprod, $mod, $color) {
        $con = new Conexion();
        $dia = $con->EscapaCaracteres($dia);
        $query = "SELECT c.Nombre,"
                . "c.Descripcion,"
                . "p.ModelosId,"
                . "p.CProductosId,"
                . "p.HornosId, "
                . "c.IdColores, "
                . "m.Nombre as NombreModelo, "
                . "p.IdProductos "
                . "FROM Productos p "
                . "JOIN Modelos m on m.IdModelos=p.ModelosId "
                . "JOIN CProductos cp on cp.IdCProductos=p.CProductosId "
                . "JOIN Colores c on c.IdColores=p.ColoresId "
                . "WHERE DATE(p.FechaQuemado)='$dia' "
                . "AND p.Activo=1 "
                . "AND p.HornosId=$horno "
                . "AND p.ModelosId = $mod "
                . "AND p.ColoresId = $color "
                . "AND p.Clasificado = 0 "
                . "AND p.CProductosId = $cprod ";
        $datos = $con->Consultar($query);
        $con->Cerrar();
        return $datos;
    }

}

?>