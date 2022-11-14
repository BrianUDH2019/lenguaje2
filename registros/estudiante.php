<?php
include_once "Conn.php";
class Estudiante{
    private $dni;
    private $nombres;
    private $codigo;

    public function getDni(){
        return $this->dni;
    }

    public function setDni(string $dni){
        $this->dni = $dni;
    }

    public function getNombres(){
        return $this->nombres;
    }

    public function setNombres(string $nombres){
        $this->nombres = $nombres;
    }
    
    public function getCodigo(){
        return $this->codigo;
    }

    public function setCodigo(string $codigo){
        $this->codigo = $codigo;
    }

    public function guardar(){
        $conn = new Conn();
        $conexion = $conn->conectar();
        $sql = "INSERT INTO estudiante(dni, nombres, codigo) VALUES('$this->dni', '$this->nombres', '$this->codigo')";
        $resultado = $conexion->exec($sql);
        $conn->cerrar();
        return $resultado;
    }
}
?>