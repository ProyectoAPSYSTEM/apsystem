<?php
require_once SYS . DIRECTORY_SEPARATOR . 'controlador.php';
require_once MOD .DIRECTORY_SEPARATOR . 'CashAdvance.php';
require_once REC . DIRECTORY_SEPARATOR . 'Libreria.php';

/*
* Clase CtrlPrincipal
*/
class CtrlCashAdvance extends Controlador {
    public function index($msg=''){
        $menu= Libreria::getMenu();
        $migas = array(
            '?'=>'Inicio',
            '#'=>'Listado'
        );
        $obj = new CashAdvance();
        $resultado = $obj->leer();

        $datos = array(
            'titulo'=>"CashAdvance",
            'contenido'=>Vista::mostrar('CashAdvance/mostrar.php',$resultado,true),
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
            'cuerpo'=>'Iniciando edición de: '.$_REQUEST['idsalario']);
            #var_dump($obj->leerUno());exit();
        $migas = array(
            '?'=>'Inicio',
            '?ctrl=CtrlCashAdvance'=>'Listado',
            '#'=>'Editar',
        );
        if (isset($_REQUEST['idsalario'])) {
            $obj = new CashAdvance($_REQUEST['idsalario']);
            $miObj = $obj->leerUno();
            #var_dump($obj->leerUno());exit();
            if (is_null($miObj['data'])) {
                $this->index(array(
                    'titulo'=>'Error',
                    'cuerpo'=>'ID Requerido: '.$_REQUEST['idsalario']. ' No Existe')
                );
                
            }else{
                $datos1 = array(
                    'CashAdvance'=>$obj
                );
            $datos = array(
                'titulo'=>'Editando CashAdvance: '. $_REQUEST['idsalario'],
                'contenido'=>Vista::mostrar('CashAdvance/frmEditar.php',$datos1,true),
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
                'titulo'=>'Editando CashAdvance... DESCONOCIDO',
                'contenido'=>'...El Id a Editar es requerido',
                'menu'=>$menu,
                'migas'=>$migas,
                'msg'=>$msg);
        }
        
        $this->mostrarVista('template.php',$datos);

        
    }
    public function guardarEditar(){
        $obj = new CashAdvance (
                $_POST["idsalario"],    #El id que enviamos
                $_POST["bonos"]
                );
        $respuesta=$obj->editar();
        //var_dump($obj);exit;
        $this->index($respuesta['msg']);
    }
    public function eliminar(){
        if (isset($_REQUEST['idsalario'])) {
            $obj = new CashAdvance($_REQUEST['idsalario']);
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
            'cuerpo'=>'Ingrese información para nuevo CashAdvance');
        $migas = array(
            '?'=>'Inicio',
            '?ctrl=CtrlCashAdvance'=>'Listado',
            '#'=>'Nuevo'
        );
        $datos1=array(
            'encabezado'=>'Nuevo CashAdvance'
            );

        $datos = array(
                'titulo'=>'Nuevo CashAdvance',
                'contenido'=>Vista::mostrar('cashadvance/frmNuevo.php',$datos1,true),
                'menu'=>$menu,
                'migas'=>$migas,
                'msg'=>$msg
            );
        $this->mostrarVista('template.php',$datos);
    }
    public function guardarNuevo(){
        $obj = new CashAdvance (
                $_POST["idsalario"],
                $_POST["bonos"],
                );
                
        $respuesta=$obj->nuevo();
        
        $this->index($respuesta['msg']);
    }
}