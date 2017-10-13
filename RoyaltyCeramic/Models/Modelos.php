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
        $fila = mysqli_fetch_assoc($datos);
        return $fila;
    }

    public static function ListarModelos($id) {
        $con = new Conexion();
        $query = "SELECT m.Nombre, CPM.Imagen,m.IdModelos  from CProductos as p join CProductosModelos "
                . "as CPM on p.IdCProductos=CPM.CProductosId join Modelos as m on CPM.ModelosId=m.IdModelos "
                . "where p.Activo=1 and p.IdCProductos=$id";
        $datos = $con->Consultar($query);
        return $datos;
    }

}

?>
