<?php
require_once SYS . DIRECTORY_SEPARATOR . 'Modelo.php';
require_once PER . DIRECTORY_SEPARATOR . "BaseDeDatos.php";

class Asistencia extends Modelo {
    private $_id;
    private $_numeroasistencias;
    private $_numerofaltas;
    private $_numerojustificaciones;
    private $_tabla="Asistencia";
    private $_bd;

    public function __construct($id=null, $numeroasistencias=null, $numerofaltas=null, $numerojustificaciones=null){
        $this->_bd = new BaseDeDatos(new MySQL());
        $this->_id= $id;
        $this->_numeroasistencias= $numeroasistencias;
        $this->_numerofaltas= $numerofaltas;
        $this->_numerojustificaciones= $numerojustificaciones;

    }
    public function leer(){
        $sql ="SELECT * FROM ". $this->_tabla .";";
        return $this->_bd->ejecutar($sql);
    }
    public function leerUno(){
        $sql= "SELECT * FROM ". $this->_tabla 
            . " WHERE id=".$this->_id;
        //var_dump($sql);exit;
        $datos= $this->_bd->ejecutar($sql);
        if (is_array($datos['data'])){
                $this->_id = $datos['data'][0]["id"];
                $this->_numeroasistencias = $datos['data'][0]["numeroasistencias"];  
                $this->_numerofaltas = $datos['data'][0]["numerofaltas"]; 
                $this->_numerojustificaciones = $datos['data'][0]["numerojustificaciones"]; 
        }
        return $datos;    
        //var_dump($datos);exit;
    }
    public function eliminar(){
        $sql= "Delete FROM ". $this->_tabla 
            . " WHERE id=".$this->_id;
        return $this->_bd->ejecutar($sql);    
    }
    public function editar(){
        $sql ="UPDATE ". $this->_tabla 
            . " SET numeroasistencias='".$this->_numeroasistencias."'"
            . ", numerofaltas='".$this->_numerofaltas."'"
            . ", numerojustificaciones='".$this->_numerojustificaciones."'"
            ." WHERE id=".$this->_id;
        //var_dump($sql);exit;
        return $this->_bd->ejecutar($sql);
        //var_dump($sql);exit;
    }

    public function nuevo(){
        $sql = "INSERT INTO ". $this->_tabla 
            ." (id, numeroasistencias, numerofaltas, numerojustificaciones) VALUES (".
                $this->_id .",'". 
                $this->_numeroasistencias ."','". 
                $this->_numerofaltas ."','". 
                $this->_numerojustificaciones ."'"
            .");";
        return $this->_bd->ejecutar($sql);
    }
    public function getid(){
        return $this->_id;
    }
    public function getnumeroasistencias(){
        return $this->_numeroasistencias;
    }
    public function getnumerofaltas(){
        return $this->_numerofaltas;
    }
    public function getnumerojustificaciones(){
        return $this->_numerojustificaciones;
    }
}
