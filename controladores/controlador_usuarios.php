<?php

class ControladorUsuarios {
    public function mostrar(){
        include_once "vistas/usuarios/mostrar.php";
    }

    public function editar(){
        include_once "vistas/usuarios/editar.php";
    }
}