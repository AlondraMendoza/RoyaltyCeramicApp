<?php

namespace Controllers;

class inicioController {

    public function index() {
        
    }

    public function Login() {
        
    }

    public static function Verificar() {
        $usuario = ($_POST["usuario"]);
        $contra = ($_POST["contra"]);
        $fila = \Models\Usuarios::NoUsuariosLogin($usuario, $contra);
        $_SESSION["usuario"] = $fila["Nombre"];
        if ($fila["cuantos"] > 0) {
            header("Location: " . URL . "usuario");
        } else {
            return "error";
        }
    }

}

?>