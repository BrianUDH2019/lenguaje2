<?php
include_once "Publicacion.php";
class PublicacionControlador{
    public function mostrarPorTema($tema){
        
        $publicacion = new Publicacion();
        $publicacion->setTema($tema);
        return $publicacion->mostrarPorTema();
    }
}