<?php
require_once SYS . DIRECTORY_SEPARATOR . 'controlador.php';
require_once MOD . DIRECTORY_SEPARATOR . 'Persona.php';

/*
* Clase CtrlPrincipal
*/
class CtrlPersona extends Controlador {
    public function index(){
        $tipo = new Persona ();
        $misTipos = $tipo->leer();
        
        $datos = array(
            'titulo'=>"Tabla Persona",
            'Persona'=>$misTipos
        );
    
        $this->mostrarVista('Persona/mostrar.php',$datos);
        
    }
    public function editar(){
        $nombre = $_GET["nombre"];
        $tipo = new Persona ($nombre);
        $miTipo = $tipo->leerUno();
        $datos = array(
            'titulo'=>"Editar : " .  $nombre,
            'tipo'=>$miTipo[0]
        );
        
        $this->mostrarVista('Persona/frmEditar.php',$datos);
    }
    public function guardarEditar(){
        $nombre = $_POST["nombre"];
        $apellido =$_POST["apellido"];
        $celular =$_POST["celular"];
        $genero = $_POST ["genero"];
        $miTipo = new Persona ($nombre,$apellido,$celular,$genero); 
        $miTipo->editar();

        $this->index(); // Recargo la Pagina
    }
    public function eliminar(){
        $nombre = $_GET["nombre"];
        $tipo = new Persona ($nombre);
        $tipo->eliminar();

        $this->index(); // Recargo la Pagina
    }
    public function nuevo(){
        $datos = array(
            'titulo'=>"Nuevo Persona: ",
           
        );
        
        $this->mostrarVista('Persona/frmNuevo.php',$datos);
    }
    public function guardarNuevo(){
        $nombre = $_POST["nombre"];
        $apellido =$_POST["apellido"];
        $celular =$_POST["celular"];
        $genero = $_POST ["genero"];
        $miTipo = new Persona ($nombre,$apellido,$celular,$genero); 
        $miTipo->nuevo();

        $this->index(); // Recargo la Pagina
    }
}