<?php
require_once SYS . DIRECTORY_SEPARATOR . 'controlador.php';
require_once MOD . DIRECTORY_SEPARATOR . 'horarios.php';
require_once REC . DIRECTORY_SEPARATOR . 'Libreria.php';

/*
* Clase CtrlPrincipal
*/
class Ctrlhorarios extends Controlador {

    public function index($msg=''){
        $menu= Libreria::getMenu();
        $migas = array(
            '?'=>'Inicio',
            '#'=>'Listado'
        );
        $obj = new horarios();
        $resultado = $obj->leer();

        $datos = array(
            'titulo'=>"horarios",
            'contenido'=>Vista::mostrar('horarios/mostrar.php',$resultado,true),
            'menu'=>$menu,
            'migas'=>$migas,
            'msg'=>$msg
        );
        #var_dump($obj->leerUno());exit();
        $this->mostrarVista('template.php',$datos);
    }
    

    public function editar(){
        #Mostramos el Formulario de Editar
        $datos=null;
        $menu = Libreria::getMenu();
        $msg= array(
            'titulo'=>'Editando...',
            'cuerpo'=>'Iniciando edición de: '.$_REQUEST['idschedules']);
            #var_dump($obj->leerUno());exit();
        $migas = array(
            '?'=>'Inicio',
            '?ctrl=Ctrlhorarios'=>'Listado',
            '#'=>'Editar',
        );
        if (isset($_REQUEST['idschedules'])) {
            $obj = new horarios($_REQUEST['idschedules']);
            $miObj = $obj->leerUno();
            #var_dump($obj->leerUno());exit();
            if (is_null($miObj['data'])) {
                $this->index(array(
                    'titulo'=>'Error',
                    'cuerpo'=>'ID Requerido: '.$_REQUEST['idschedules']. ' No Existe')
                );
                
            }else{
                $datos1 = array(
                    'horarios'=>$obj
                );
            $datos = array(
                'titulo'=>'Editando horarios: '. $_REQUEST['idschedules'],
                'contenido'=>Vista::mostrar('horarios/frmEditar.php',$datos1,true),
                'menu'=>$menu,
                'migas'=>$migas,
                'msg'=>$msg
            );
            }
            
        }else {
            $msg= array(
            'titulo'=>'Error',
            'cuerpo'=>'No se encontró al ID requerido');

            $datos = array(
                'titulo'=>'Editando horarios... DESCONOCIDO',
                'contenido'=>'...El Id a Editar es requerido',
                'menu'=>$menu,
                'migas'=>$migas,
                'msg'=>$msg);
        }
        
        $this->mostrarVista('template.php',$datos);

        
    }
    public function guardarEditar(){
        $obj = new horarios (
                $_POST["idschedules"],
                $_POST["time_in"],
                $_POST["time_out"]
                );
        $respuesta=$obj->editar();
        //var_dump($obj);exit;
        $this->index($respuesta['msg']);
    }
    public function eliminar(){
        if (isset($_REQUEST['idschedules'])) {
            $obj = new horarios($_REQUEST['idschedules']);
            $resultado=$obj->eliminar();
            $this->index($resultado['msg']);
        } else {
            echo "...El Id a ELIMINAR es requerido";
        }
    }
    public function nuevo(){
        $menu = Libreria::getMenu();
        $msg= array(
            'titulo'=>'Nuevo...',
            'cuerpo'=>'Ingrese información para nuevo horarios');
        $migas = array(
            '?'=>'Inicio',
            '?ctrl=Ctrlhorarios'=>'Listado',
            '#'=>'Nuevo'
        );
        $datos1=array(
            'encabezado'=>'Nuevo horarios'
            );
        $datos = array(
                'titulo'=>'Nuevo horarios',
                'contenido'=>Vista::mostrar('horarios/frmNuevo.php',$datos1,true),
                'menu'=>$menu,
                'migas'=>$migas,
                'msg'=>$msg
            );
        $this->mostrarVista('template.php',$datos);
    }
    public function guardarNuevo(){
        $obj = new horarios (
                $_POST["idschedules"],
                $_POST["time_in"],
                $_POST["time_out"]
                );
        $respuesta=$obj->nuevo();
        $this->index($respuesta['msg']);
    }
}