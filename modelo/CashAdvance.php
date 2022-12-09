<?php
require_once SYS . DIRECTORY_SEPARATOR . 'Modelo.php';
require_once PER . DIRECTORY_SEPARATOR . "BaseDeDatos.php";

class CashAdvance extends Modelo {
    private $_idsalario;
    private $_bonos;
    private $_tabla="cashadvance";
    private $_bd;

    public function __construct($idsalario=null, $bonos=null){
        $this->_bd = new BaseDeDatos(new MySQL());
        $this->_idsalario = $idsalario;
        $this->_bonos= $bonos;
    }
    public function leer(){
        $sql ="SELECT * FROM ". $this->_tabla .";";
        return $this->_bd->ejecutar($sql);
        //var_dump($sql);exit;
    }
     public function leerUno(){
        $sql= "SELECT * FROM ". $this->_tabla 
            . " WHERE idsalario=".$this->_idsalario;
        //var_dump($sql);exit;
        $datos= $this->_bd->ejecutar($sql);
        if (is_array($datos['data'])){
                $this->_idsalario = $datos['data'][0]["idsalario"];
                $this->_bonos = $datos['data'][0]["bonos"];  
        }
        return $datos;    
        //var_dump($datos);exit;
    }
    public function eliminar(){
        $sql= "Delete FROM ". $this->_tabla 
            . " WHERE idsalario=".$this->_idsalario;
        return $this->_bd->ejecutar($sql);    
    }
    public function editar(){
        $sql ="UPDATE ". $this->_tabla 
            . " SET bonos='".$this->_bonos."'"
            ." WHERE idsalario=".$this->_idsalario;
        //var_dump($sql);exit;
        return $this->_bd->ejecutar($sql);
        //var_dump($sql);exit;
    }

    public function nuevo(){
        $sql = "INSERT INTO ". $this->_tabla 
            ." (salario, bonos) VALUES (".
            $this->_salario.",'". 
            $this->_bonos."'"
            .");";
        return $this->_bd->ejecutar($sql);
        
    }
    public function getidsalario(){
        return $this->_idsalario;
    }
    public function getbonos(){
        return $this->_bonos;
    }
}
