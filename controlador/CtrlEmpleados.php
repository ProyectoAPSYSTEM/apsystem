<?php
require_once SYS . DIRECTORY_SEPARATOR . 'controlador.php';
require_once MOD . DIRECTORY_SEPARATOR . 'Empleados.php';
require_once REC . DIRECTORY_SEPARATOR . 'Libreria.php';

/*
* Clase CtrlPrincipal
*/
class CtrlEmpleados extends Controlador {

    public function index($msg=''){
        $menu= Libreria::getMenu();
        $migas = array(
            '?'=>'Inicio',
            '#'=>'Listado'
        );
        $obj = new Empleados();
        $resultado = $obj->leer();

        $datos = array(
            'titulo'=>"Empleados",
            'contenido'=>Vista::mostrar('empleados/mostrar.php',$resultado,true),
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
            '?ctrl=CtrlEmpleados'=>'Listado',
            '#'=>'Editar',
        );
        if (isset($_REQUEST['id'])) {
            $obj = new Empleados($_REQUEST['id']);
            $miObj = $obj->leerUno();
            #var_dump($obj->leerUno());exit();
            if (is_null($miObj['data'])) {
                $this->index(array(
                    'titulo'=>'Error',
                    'cuerpo'=>'ID Requerido: '.$_REQUEST['id']. ' No Existe')
                );
                
            }else{
                $datos1 = array(
                    'Empleados'=>$obj
                );
            $datos = array(
                'titulo'=>'Editando Empleados: '. $_REQUEST['id'],
                'contenido'=>Vista::mostrar('Empleados/frmEditar.php',$datos1,true),
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
        $obj = new Empleados (
                $_POST["id"],
                $_POST["dni"],
                $_POST["nombres"],
                $_POST["apellidos"],
                $_POST["address"],
                $_POST["fechanacimiento"],
                $_POST["contact_info"],
                $_POST["genero"],
                $_POST["idposition"],
                $_POST["idschedules"],
                $_POST["created_on"]
                );
        $respuesta=$obj->editar();
        //var_dump($obj);exit;
        $this->index($respuesta['msg']);
    }
    public function eliminar(){
        if (isset($_REQUEST['id'])) {
            $obj = new Empleados($_REQUEST['id']);
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
            'cuerpo'=>'Ingrese información para nuevo Empleados');
        $migas = array(
            '?'=>'Inicio',
            '?ctrl=CtrlCashAdvance'=>'Listado',
            '#'=>'Nuevo'
        );
        $datos1=array(
            'encabezado'=>'Nuevo CashAdvance'
            );

        $datos = array(
                'titulo'=>'Nuevo Empleados',
                'contenido'=>Vista::mostrar('empleados/frmNuevo.php',$datos1,true),
                'menu'=>$menu,
                'migas'=>$migas,
                'msg'=>$msg
            );
        $this->mostrarVista('template.php',$datos);
    }
    public function guardarNuevo(){
        $obj = new Empleados (
                $_POST["id"],
                $_POST["dni"],
                $_POST["nombres"],
                $_POST["apellidos"],
                $_POST["address"],
                $_POST["fechanacimiento"],
                $_POST["contact_info"],
                $_POST["genero"],
                $_POST["idposition"],
                $_POST["idschedule"],
                $_POST["created_on"]
                );
                
        $respuesta=$obj->nuevo();
        
        $this->index($respuesta['msg']);
    }
}