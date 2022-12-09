<?php
require_once SYS . DIRECTORY_SEPARATOR . 'Modelo.php';
require_once PER . DIRECTORY_SEPARATOR . "BaseDeDatos.php";

class horarios extends Modelo {
    private $_idschedules;
    private $_time_in;
    private $_time_out;
    private $_tabla="schedules";
    private $_bd;

    public function __construct($idschedules=null, $time_in=null, $time_out=null){
        $this->_bd = new BaseDeDatos(new MySQL());
        $this->_idschedules = $idschedules;
        $this->_time_in = $time_in;
        $this->_time_out= $time_out;
    }
    public function leer(){
        $sql ="SELECT * FROM ". $this->_tabla .";";
        return $this->_bd->ejecutar($sql);
    }
    public function leerUno(){
        $sql= "SELECT * FROM ". $this->_tabla 
            . " WHERE idschedules=".$this->_idschedules;
        //var_dump($sql);exit;
        $datos= $this->_bd->ejecutar($sql);
        if (is_array($datos['data'])){
                $this->_idschedules = $datos['data'][0]["idschedules"];
                $this->_time_in = $datos['data'][0]["time_in"];  
                $this->_time_out = $datos['data'][0]["time_out"];
        }
        return $datos;    
        //var_dump($datos);exit;
    }
    public function eliminar(){
        $sql= "Delete FROM ". $this->_tabla 
            . " WHERE idschedules=".$this->_idschedules;
        return $this->_bd->ejecutar($sql);    
    }
    public function editar(){
        $sql ="UPDATE ". $this->_tabla 
            . " SET time_in='".$this->_time_in."'"
            . ", time_out='".$this->_time_out."'"
            . " WHERE idschedules=".$this->_idschedules;
        return $this->_bd->ejecutar($sql);
    }

    public function nuevo(){
        $sql = "INSERT INTO ". $this->_tabla 
            ." (idschedules, time_in, time_out) VALUES (".$this->_idschedules.",'".$this->_time_in."','".$this->_time_out."'"
            .");";
        return $this->_bd->ejecutar($sql);
        
    }
    public function getidschedules(){
        return $this->_idschedules;
    }
    public function gettime_in(){
        return $this->_time_in;
    }
    public function gettime_out(){
        return $this->_time_out;
    }
}
