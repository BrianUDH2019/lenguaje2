<?php
include_once "cursos.php";
class CursoControlador{
    public function mostrarPublicacion($nombre){
        
        $curso = new Cursos();
        $curso->setNombre($nombre);
        return $curso->mostrarPublicacion();
    }
}