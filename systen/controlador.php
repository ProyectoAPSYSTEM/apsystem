<?php
require_once SYS . DIRECTORY_SEPARATOR . 'vista.php';
require_once SYS . DIRECTORY_SEPARATOR . 'modelo.php';
// Clase controlador
abstract class Controlador {
    #Codigo del CORE Controlador
    static protected function mostrarvista($vista,$datos='',$comoContenido=false){
        Vista::mostrar($vista,$datos,$comoContenido);
    }   
}