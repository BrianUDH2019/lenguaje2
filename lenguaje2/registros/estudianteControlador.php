<?php
include_once "estudiante.php";
class estudianteControlador{
    public function guardar($dni, $nombres, $codigo){
        
        $estudiante = new Estudiante();
        $estudiante->setDni($dni);
        $estudiante->setNombres($nombres);
        $estudiante->setCodigo($codigo);
        $resultado = $estudiante->guardar();

        if($resultado!=0){
            return "Cliente Guardado";
        }else{
            return "No se guardò el cliente";
        }
    }
}