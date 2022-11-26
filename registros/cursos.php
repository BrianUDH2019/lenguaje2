<?php
include_once "Conn.php";
class Cursos{
    private $nombre;
    private $escuela;
    private $semestre;
    private $profesor;


    public function getEscuela(){
        return $this->escuela;
    }

    public function setEscuela(string $escuela){
        $this->escuela = $escuela;
    }

    public function getNombre(){
        return $this->nombre;
    }

    public function setNombre(string $nombre){
        $this->nombre = $nombre;
    }
    
    public function getSemestre(){
        return $this->semestre;
    }

    public function setSemestre(string $semestre){
        $this->semestre = $semestre;
    }

    public function getProfesor(){
        return $this->profesor;
    }

    public function setProfesor(string $profesor){
        $this->profesor = $profesor;
    }

    public function mostrarPublicacion(){
        $conn = new Conn();
        $conexion = $conn->conectar();
        $sql = "SELECT * FROM universidad.curso";
        $resultado = $conexion->query($sql);
        $conn->cerrar();
        return $resultado;
    }
}
?>