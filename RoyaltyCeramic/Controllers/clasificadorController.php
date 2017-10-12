<?php
namespace Controllers;
class clasificadorController {
    public function __construct() {
        
    }
    public function FechaIngles($date) {
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

    public function index() {

        $hoy = date("d/m/Y");
        $hoyingles = $this->FechaIngles($hoy);
        $hornos = \Models\Hornos::ListaHornosDia($hoyingles);
        $arreglo = [
            "hornos" => $hornos,
            "hoy" => $hoy,
            "hoyingles" => $hoyingles
        ];
        return $arreglo;
    }

    public function ObtenerHornosPendientes() {
        $d = $_REQUEST["dia"];
        $dia = $this->FechaIngles($d);
        $hornos = \Models\Hornos::ListaHornosDia($dia);
        $arreglo = [
            "hornos" => $hornos,
            "dia" => $dia
        ];
        return $arreglo;
    }

    public function ProductosHornoFecha() {
        $horno = $_REQUEST["horno"];
        $fecha = $_REQUEST["fecha"];
        $dia = $this->FechaIngles($fecha);
        $productos = \Models\Productos::ListarProductosHornoFecha($dia, $horno);
        $arreglo = [
            "dia" => $dia,
            "productos" => $productos
        ];
        return $arreglo;
    }

    public function ModelosHornoFechaProducto() {
        $horno = $_REQUEST["horno"];
        $fecha = $_REQUEST["fecha"];
        $cprod = $_REQUEST["cprod"];
        $dia = $this->FechaIngles($fecha);
        $modelos = \Models\Productos::ListarModelosHornoFechaProducto($dia, $horno, $cprod);
        $arreglo = [
            "dia" => $dia,
            "modelos" => $modelos
        ];
        return $arreglo;
    }

 

}

?>