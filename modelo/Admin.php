<?php
require_once SYS . DIRECTORY_SEPARATOR . 'Modelo.php';
require_once PER . DIRECTORY_SEPARATOR . "BaseDeDatos.php";

class Admin extends Modelo{
    private $_id;
    private $_username;
    private $_clave;
    private $_fistname;
    private $_lastname;
    private $_photo;
    private $_created_on;
    private $_tabla="admin";
    private $_bd;

    public function __construct($id=null, $username=null, $clave=null, $fistname=null, $lastname=null, $photo=null, $created_on=null){
        $this->_bd = new BaseDeDatos(new MySQL());
        $this->_id= $id;
        $this->_username= $username;
        $this->_clave= $clave;
        $this->_fistname= $fistname;
        $this->_lastname= $lastname;
        $this->_photo= $photo;
        $this->_created_on= $created_on;
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
                $this->_username = $datos['data'][0]["username"];  
                $this->_clave = $datos['data'][0]["clave"];  
                $this->_fistname = $datos['data'][0]["fistname"];  
                $this->_lastname = $datos['data'][0]["lastname"];  
                $this->_photo = $datos['data'][0]["photo"];  
                $this->_created_on = $datos['data'][0]["created_on"];  
        }
        return $datos;    
        //var_dump($datos);exit;
    }
    public function eliminar(){
        $sql= "Delete FROM ". $this->_tabla 
            . " WHERE ID=".$this->_ID;
        return $this->_bd->ejecutar($sql);    
    }
    public function editar(){
        $sql ="UPDATE ". $this->_tabla 
            . " SET EMPLEADO='".$this->_EMPLEADO."',"
            . "DNI='".$this->_DNI."',"
            . "CARGO='".$this->_CARGO."',"
            . "ENTRADA='".$this->_ENTRADA."',"
            . "SALIDA='".$this->_SALIDA."',"
            . " ID='".$this->_ID."'"
            ." WHERE ID=".$this->_ID;
        return $this->_bd->ejecutar($sql);
    }
    public function nuevo(){
        $sql = "INSERT INTO ". $this->_tabla 
            ." (ID, EMPLEADO,DNI,CARGO,ENTRADA,SALIDA) VALUES (".
                $this->_ID .",'". $this->_EMPLEADO ."','". $this->_DNI ."','". $this->_CARGO ."','". $this->_ENTRADA ."','". 
                $this->_SALIDA."'"
            .");";
        return $this->_bd->ejecutar($sql);
    }
    public function validarUsuario($username,$clave){
        $sql= "SELECT * FROM ". $this->_tabla 
            . " WHERE username='".$username ."' and clave='".$clave."'";
        return $this->_bd->ejecutar($sql);
        //var_dump($sql);exit();
    }
    public function getid(){
        return $this->_id;
    }
    public function getfistname(){
        return $this->_fistname;
    }
    public function getlastname(){
        return $this->_lastname;
    }
    public function getphoto(){
        return $this->_photo;
    }
    public function getcreated_on(){
        return $this->_created_on;
    }
    public function setusername($username){
        $this->_username=$username;
    }
    public function setclave($clave){
        $this->_clave=$clave;
    }
}
