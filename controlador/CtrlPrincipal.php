<?php
require_once SYS . DIRECTORY_SEPARATOR . 'controlador.php';
require_once REC . DIRECTORY_SEPARATOR . 'Libreria.php';

/*
* Clase CtrlPrincipal
*/
class CtrlPrincipal extends Controlador {

    public function index(){
        $menu= Libreria::getMenu();
        $migas = array(
            '?'=>'Inicio',
        );
        //var_dump($menu);exit;
        // echo json_encode($datosGraf);
        //exit();
        $datos = array(
            'titulo'=>"Sistema de Ventas",
            'contenido'=>Vista::mostrar('principal.php','',true),
            'menu'=>$menu,
            'migas'=>$migas,
            'msg'=>array(
                    'titulo'=>'',
                    'cuerpo'=>''
            ),
            'data'=>null
        );
        
        $this->mostrarVista('template.php',$datos);

    }
}