<?php

require_once SYS . DIRECTORY_SEPARATOR . 'Modelo.php';
require_once PER . DIRECTORY_SEPARATOR . "BaseDeDatos.php";


class ReporteAsistencia {
    private $_faltasempleados;
    private $_descuentos;
    private $_tabla="ReporteAsistencia";
    private $_bd;

    public function __construct($faltasempleados=null, $descuentos=null){
        $this->_bd = new BaseDeDatos(new MySQL());
        $this->faltasempleados = $faltasempleados;
        $this->_descuentos= $descuentos;
    }
    public function leer(){
        $sql ="SELECT * FROM ". $this->_tabla .";";
        return $this->_bd->ejecutar($sql);
    }
     public function leerUno(){
        $sql= "SELECT * FROM ". $this->_tabla 
            . " WHERE faltasempleados=".$this->faltasempleados;
        return $this->_bd->ejecutar($sql);    
    }
    public function eliminar(){
        $sql= "Delete FROM ". $this->_tabla 
            . " WHERE faltasempleados=".$this->faltasempleados;
        return $this->_bd->ejecutar($sql);    
    }
    public function editar(){
        $sql ="UPDATE ". $this->_tabla 
            . " SET descuentos='".$this->_descuentos."',"
            . " faltasempleados='".$this->_faltasempleados."'"
            . " WHERE faltasempleados=".$this->faltasempleados;
        return $this->_bd->ejecutar($sql);
    }

    public function nuevo(){
        $sql = "INSERT INTO ". $this->_tabla 
            ." (faltasempleados, descuentos) VALUES ('".
            $this->_faltasempleados."','". 
            $this->_descuentos."')";
        return $this->_bd->ejecutar($sql);
    }
}
