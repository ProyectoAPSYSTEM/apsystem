<?php
require_once SYS . DIRECTORY_SEPARATOR . 'controlador.php';
require_once MOD . DIRECTORY_SEPARATOR . 'Admin.php';

/*
* Clase CtrlPrincipal
*/
class CtrlAdministrador extends Controlador {
    public function index($msg=null){
        $menu= Libreria::getMenu();
        
        $obj = new Admin();
        $resultado = $obj->leer();
        $msg = $msg==null?$this->_getMsg():$msg;
        $datos = array(
            'titulo'=>"Administrador",
            'contenido'=>Vista::mostrar('Empleados/mostrar.php',$resultado,true),
            'menu'=>$menu,
            'migas'=>$this->_getMigas(),
            'msg'=>$msg
        );
        
        $this->mostrarVista('template.php',$datos);
    }
    public function validar(){
        if (isset($_POST['username']) && isset($_POST['clave'])) {
            $obj = new Admin();
            //$obj->setusername($_POST['username']);
            //$obj->setclave($_POST['clave']);
            $datos=$obj->validarUsuario();
            // var_dump($datos);exit();
            if (isset($datos['data']))
                if($datos['data']!=null){
                    $_SESSION['fistname']=$datos['data'][0]['fistname'];
                    $_SESSION['lastname']=$datos['data'][0]['lastname'];
                    // echo $_SESSION['nombre'];
                }
            
        }
        header("Location: ?");
        exit();
    }
    public function cerrarSesion()
    {
        session_destroy();
        header("Location: ?");
        exit();
    }
}