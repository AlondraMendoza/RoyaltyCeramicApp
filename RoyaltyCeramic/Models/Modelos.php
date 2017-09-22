<?php

namespace Models;

class Modelos {

    private $IdModelos;
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

    public function Listar() {
        $query = "SELECT Modelos.*,Personas.Nombre as NombreUsuario FROM Modelos INNER JOIN Usuarios ON Modelos.UsuariosId=Usuarios.IdUsuarios INNER JOIN Personas ON Personas.IdPersonas=Usuarios.PersonasId";
        $datos = $this->con->Consultar($query);
        return $datos;
    }

    public function Agregar() {
        $query = "INSERT INTO Modelos (IdModelos,Nombre,Descripcion,Activo,UsuariosId) VALUES(null,'{$this->Nombre}','{$this->Descripcion}','{$this->Activo}','{$this->UsuariosId}')";
        $this->con->Ejecutar($query);
    }

    public function Eliminar() {
        $query = "DELETE FROM Modelos WHERE IdModelos=$this->IdModelos";
        $this->con->Ejecutar($query);
    }

    public function Editar() {
        $query = "UPDATE FROM Modelos SET Nombre='{$this->Nombre}' , Descripcion='{$this->Descripcion}',Activo='{$this->Activo}' WHERE IdModelos='{$this->IdModelos}'";
        $this->con->Ejecutar($query);
    }

    public function Vista() {
        //$query = "SELECT Modelos.*,Personas.Nombre as NombreUsuario FROM Modelos INNER JOIN Usuarios ON Modelos.UsuariosId=Usuarios.IdUsuarios INNER JOIN Personas ON Personas.IdPersonas=Usuarios.PersonasId WHERE Modelos.IdModelos={$this->IdModelos}";
        $query = "Select * from Modelos where IdModelos=1";
        $datos = $this->con->Consultar($query);
        echo "" . $datos . "asdasda";
        $fila = mysqli_fetch_assoc($datos);
        return $fila;
    }

}

?>
