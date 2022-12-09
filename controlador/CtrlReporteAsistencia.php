<?php
require_once SYS . DIRECTORY_SEPARATOR . 'controlador.php';
require_once MOD . DIRECTORY_SEPARATOR . 'ReporteAsistencia.php';

/*
* Clase CtrlPrincipal
*/
class CtrlReporteAsistencia extends Controlador {
    public function index(){
        $tipo = new ReporteAsistencia();
        $misTipos = $tipo->leer();
        
        $datos = array(
            'titulo'=>"Tabla ReporteAsistencia",
            'ReporteAsistencia'=>$misTipos
        );
        
        $this->mostrarVista('ReporteAsistencia/mostrar.php',$datos);
        
    }

    public function editar(){
        $faltasempleados = $_GET["faltasempleados"];
        $tipo = new ReporteAsistencia ($faltasempleados);
        $miTipo = $tipo->leerUno();
        $datos = array(
            'titulo'=>"Editando ReporteAsistencia: " . $faltasempleados,
            'tipo'=>$miTipo[0]
        );
        
        $this->mostrarVista('ReporteAsistencia/frmEditar.php',$datos);
    }
    public function guardarEditar(){
        $faltasempleados = $_POST["faltasempleados"];
        $descuentos= $_POST["descuentos"];
        $miTipo = new ReporteAsistencia ($faltasempleados,$descuentos); 
        $miTipo->editar();

        $this->index(); // Recarga la Pagina
    }
    public function eliminar(){
        $faltasempleados = $_GET["faltasempleados"];

        $tipo = new ReporteAsistencia ($faltasempleados);
        $tipo->eliminar();

        $this->index(); // ReReporteAsistencia la Pagina
    }
    public function nuevo(){
        $datos = array(
            'titulo'=>"Nuevo ReporteAsistencia: ",
           
        );
        
        $this->mostrarVista('ReporteAsistencia/frmNuevo.php',$datos);
    }
    public function guardarNuevo(){
        $faltasempleados = $_POST["faltasempleados"];
        $descuentos =$_POST["descuentos"];
        $miTipo = new ReporteAsistencia ($faltasempleados,$descuentos); 
        $miTipo->nuevo();

        $this->index(); // Recarga la Pagina
    }
}