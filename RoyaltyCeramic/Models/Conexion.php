<?php

namespace Models;

class Conexion {

    private $datos = array(
        "host" => '23.229.173.39',
        "user" => 'TCTH',
        "pass" => 'tania123',
        "db" => 'RoyaltyPruebas',
    );
    private $con;

    public function __construct() {
        $this->con = new \mysqli($this->datos['host'], $this->datos["user"], $this->datos["pass"], $this->datos["db"]);
        $this->con->query("SET NAMES 'utf8'");
    }

    public function Ejecutar($query) {
        $this->con->query($query);
    }

    public function EscapaCaracteres($valor) {
        $this->con->real_escape_string($valor);
        return $valor;
    }

    public function Consultar($query) {
        $dato = $this->con->query($query);
        return $dato;
    }

    public function Cerrar() {
        mysqli::close();
    }

}
