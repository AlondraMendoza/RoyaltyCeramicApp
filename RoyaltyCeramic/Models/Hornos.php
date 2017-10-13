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

    public static function ListarHornos() {
        $con = new Conexion();
        $query = "SELECT Hornos.* FROM Hornos where Activo=1";
        $datos = $con->Consultar($query);
        $con->Cerrar();
        return $datos;
    }

    public static function ListaHornosDia($dia) {
        $con = new Conexion();
        $dia = $con->EscapaCaracteres($dia);
        $query = "SELECT h.* FROM Productos p JOIN Hornos h ON h.idhornos=p.hornosid WHERE DATE(p.FechaQuemado)='$dia' AND h.Activo=1 AND p.Activo=1 AND p.Clasificado=0 GROUP BY h.IdHornos ";
        $datos = $con->Consultar($query);
        return $datos;
    }

    public static function FechaIngles($date) {
        if ($date) {
            $fecha = $date;
            $hora = "";

            # separamos la fecha recibida por el espacio de separación entre
            # la fecha y la hora
            $fechaHora = explode(" ", $date);
            if (count($fechaHora) == 2) {
                $fecha = $fechaHora[0];
                $hora = $fechaHora[1];
            }

            # cogemos los valores de la fecha
            $values = preg_split('/(\/|-)/', $fecha);
            if (count($values) == 3) {
                # devolvemos la fecha en formato ingles
                if ($hora && count(explode(":", $hora)) == 3) {
                    # si la hora esta separada por : y hay tres valores...
                    $hora = explode(":", $hora);
                    return date("Ymd H:i:s", mktime($hora[0], $hora[1], $hora[2], $values[1], $values[0], $values[2]));
                } else {
                    return date("Ymd", mktime(0, 0, 0, $values[1], $values[0], $values[2]));
                }
            }
        }
        return "";
    }

    public static function ListaProductosDia($dia, $horno) {
        $con = new Conexion();
        $dia = $con->EscapaCaracteres($dia);
        $query = "SELECT h.* FROM Productos p JOIN Hornos h ON h.idhornos=p.hornosid WHERE DATE(p.FechaQuemado)='$dia' AND h.Activo=1 AND p.Activo=1 AND p.HornosId=$horno AND p.Clasificado=0  GROUP BY p.IdProductos";
        $datos = $con->Consultar($query);

        return $datos;
    }

}
?>


