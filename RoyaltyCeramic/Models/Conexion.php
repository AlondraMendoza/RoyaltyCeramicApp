<?php

namespace Models;

class Conexion {

    private $datos = array(
        "host" => 'localhost',
        "user" => 'root',
        "pass" => 'root',
        "db" => 'royaltyceramic',
    );
    private $con;

    public function __construct() {
        $this->con = new \mysqli($this->datos['host'], $this->datos["user"], $this->datos["pass"], $this->datos["db"]);
    }

    public function Ejecutar($query) {
        $this->con->query($query);
    }

    public function Consultar($query) {
        $dato = $this->con->query($query);
        return $dato;
    }

}
