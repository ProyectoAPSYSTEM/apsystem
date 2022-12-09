<?php
require_once SYS . DIRECTORY_SEPARATOR . 'Modelo.php';
require_once PER . DIRECTORY_SEPARATOR . "BaseDeDatos.php";
class persona {
    private $_nombre;
    private $_apellido;
    private $_celular;
    private $_genero;
    private $_tabla="persona";
    private $_bd;

    public function __construct($nombre=null, $apellido=null, $celular=null, $genero=null, ){
        $this->_bd = new BaseDeDatos(new MySQL());
        $this->_nombre= $nombre;
        $this->_apellido= $apellido;
        $this->_celular= $celular;
        $this->_genero= $genero;

    }
    public function leer(){
        $sql ="SELECT * FROM ". $this->_tabla .";";
        return $this->_bd->ejecutar($sql);
    }
     public function leerUno(){
        $sql= "SELECT * FROM ". $this->_tabla 
            . " WHERE nombre=".$this->_nombre;
        return $this->_bd->ejecutar($sql);    
    }
    public function eliminar(){
        $sql= "Delete FROM ". $this->_tabla 
            . " WHERE nombre=".$this->_nombre;
        return $this->_bd->ejecutar($sql);    
    }
    public function editar(){
        $sql ="UPDATE ". $this->_tabla 
            . " SET apellido='".$this->_apellido."',"
            . "celular='".$this->_celular."',"
            . "genero='".$this->_genero."',"
            . " nombre='".$this->_nombre."'"
            ." WHERE nombre=".$this->_nombre;
        return $this->_bd->ejecutar($sql);
    }

    public function nuevo(){
        $sql = "INSERT INTO ". $this->_tabla 
            ." (nombre, apellido,celular,genero) VALUES (".
                $this->_nombre .",'". 
                $this->_apellido ."','". 
                $this->_celular ."','". 
                $this->_genero ."'"
            .");";
        return $this->_bd->ejecutar($sql);
    }
}
