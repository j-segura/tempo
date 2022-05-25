<?php

    class ControladorPaginas{

        public function inicio(){
            include_once "./vistas/paginas/inicio.php";

        }
        public function nosotros(){
            include_once "./vistas/paginas/nosotros.php";

        }
        public function servicios(){
            include_once "./vistas/paginas/servicios.php";

        }
        public function contactenos(){
            include_once "./vistas/paginas/contactenos.php";

        }

        public function registro(){
            include_once "./vistas/paginas/registro.php";

        }

        public function login(){
            include_once "./vistas/paginas/login.php";

        }


    }



?>