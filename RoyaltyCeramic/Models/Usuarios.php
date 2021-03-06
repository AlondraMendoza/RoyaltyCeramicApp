<?php

namespace Models;

class Usuarios {

    private $IdUsuarios;
    private $Nombre;
    private $PersonasId;
    private $Contrasena;
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

    public function Listar() {
        $query = "SELECT Usuarios.*,Personas.Nombre as NombreUsuario FROM Usuarios INNER JOIN Personas ON Personas.IdPersonas=Usuarios.PersonasId";
        $datos = $this->con->Consultar($query);
        return $datos;
    }

    public function Agregar() {
        $query = "INSERT INTO Usuarios(IdUsuarios,Nombre,PersonasId,Contrasena,Activo,UsuariosId) VALUES(null,'{$this->Nombre}','{$this->PersonasId}','{$this->Contrasena}','{$this->Activo}','$this->UsuariosId')";
        $this->con->Ejecutar($query);
    }

    public function Eliminar() {
        $query = "DELETE FROM Usuarios WHERE IdUsuarios=$this->IdUsuarios";
        $this->con->Ejecutar($query);
    }

    public function Editar() {
        $query = "UPDATE FROM Usuarios SET Nombre='{$this->Nombre}' , Contrasena='{$this->Contrasena}',Activo='{$this->Activo}' WHERE IdUsuarios='{$this->IdUsuarios}'";
        $this->con->Ejecutar($query);
    }

    public static function NoUsuariosLogin($usuario, $contra) {
        $cone = new Conexion();
        $query = "SELECT count(*) as cuantos , Nombre from Usuarios u WHERE u.`Nombre`='" . $usuario . "' AND u.`Contrasena`='" . $contra . "' group by Nombre";
        $result = $cone->Consultar($query);
        $fila = mysqli_fetch_assoc($result);
        return $fila;
    }

    public function Vista() {


        $query = "SELECT Usuarios.*, Personas.Nombre as NombreUsuario FROM Usuarios INNER JOIN Personas ON Personas.IdPersonas = Usuarios.PersonasId WHERE IdUsuarios = '{$this->UsuariosId}'";
        $datos = $this->con->Consultar($query);
        $fila = mysqli_fetch_assoc($datos);
        return $fila;
    }

    public static function NombreCompleto() {
        return "Tania Torres";
    }

    public function ObtenerPerfiles() {
        //print_r("SELECT per.Nombre FROM PerfilesUsuarios p JOIN Perfiles per ON per.IdPerfiles=p.PerfilesId WHERE Activo=1 AND p.UsuariosId=1");
        $query = "SELECT per.Nombre,per.IdPerfiles FROM PerfilesUsuarios p JOIN Perfiles per ON per.IdPerfiles=p.PerfilesId WHERE per.Activo=1 AND p.UsuariosId=" . $this->IdUsuarios;
        $datos = $this->con->Consultar($query);
        return $datos;
    }

}

?>
