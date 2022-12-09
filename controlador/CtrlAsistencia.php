<?php
require_once SYS . DIRECTORY_SEPARATOR . 'controlador.php';
require_once MOD . DIRECTORY_SEPARATOR . 'Asistencia.php';
require_once REC . DIRECTORY_SEPARATOR . 'Libreria.php';
/*
* Clase CtrlPrincipal
*/
class CtrlAsistencia extends Controlador {
    public function index($msg=''){
        $menu= Libreria::getMenu();
        $migas = array(
            '?'=>'Inicio',
            '#'=>'Listado'
        );
        $obj = new Asistencia();
        $resultado = $obj->leer();

        $datos = array(
            'titulo'=>"horarios",
            'contenido'=>Vista::mostrar('Asistencia/mostrar.php',$resultado,true),
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
            'cuerpo'=>'Iniciando edición de: '.$_REQUEST['id']);
            #var_dump($obj->leerUno());exit();
        $migas = array(
            '?'=>'Inicio',
            '?ctrl=CtrlAsistencia'=>'Listado',
            '#'=>'Editar',
        );
        if (isset($_REQUEST['id'])) {
            $obj = new Asistencia($_REQUEST['id']);
            $miObj = $obj->leerUno();
            #var_dump($obj->leerUno());exit();
            if (is_null($miObj['data'])) {
                $this->index(array(
                    'titulo'=>'Error',
                    'cuerpo'=>'ID Requerido: '.$_REQUEST['i']. ' No Existe')
                );
                
            }else{
                $datos1 = array(
                    'Asistencia'=>$obj
                );
            $datos = array(
                'titulo'=>'Editando Asistencia: '. $_REQUEST['id'],
                'contenido'=>Vista::mostrar('Asistencia/frmEditar.php',$datos1,true),
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
                'titulo'=>'Editando Asistencia... DESCONOCIDO',
                'contenido'=>'...El Id a Editar es requerido',
                'menu'=>$menu,
                'migas'=>$migas,
                'msg'=>$msg);
        }
        
        $this->mostrarVista('template.php',$datos);

        
    }
    public function guardarEditar(){
        $obj = new Asistencia (
                $_POST["id"],    #El id que enviamos
                $_POST["numeroasistencias"],
                $_POST["numerofaltas"],
                $_POST["numerojustificaciones"]
                );
        $respuesta=$obj->editar();
        //var_dump($obj);exit;
        $this->index($respuesta['msg']);
    }
    public function eliminar(){
        if (isset($_REQUEST['id'])) {
            $obj = new Asistencia($_REQUEST['id']);
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
            'cuerpo'=>'Ingrese información para nuevo Asistencia');
        $migas = array(
            '?'=>'Inicio',
            '?ctrl=CtrlAsistencia'=>'Listado',
            '#'=>'Nuevo'
        );
        $datos1=array(
            'encabezado'=>'Nuevo Asistencia'
            );

        $datos = array(
                'titulo'=>'Nuevo Asistencia',
                'contenido'=>Vista::mostrar('Asistencia/frmNuevo.php',$datos1,true),
                'menu'=>$menu,
                'migas'=>$migas,
                'msg'=>$msg
            );
        $this->mostrarVista('template.php',$datos);
    }
    public function guardarNuevo(){
        $obj = new Asistencia (
                $_POST["id"],    #El id que enviamos
                $_POST["numeroasistencias"],
                $_POST["numerofaltas"],
                $_POST["numerojustificaciones"]
                );
                
        $respuesta=$obj->nuevo();
        
        $this->index($respuesta['msg']);
    }
}