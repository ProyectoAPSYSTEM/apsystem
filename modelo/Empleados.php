<?php
require_once SYS . DIRECTORY_SEPARATOR . 'Modelo.php';
require_once PER . DIRECTORY_SEPARATOR . "BaseDeDatos.php";

class Empleados extends Modelo {
    private $_id;
    private $_dni;
    private $_nombres;
    private $_apellidos;
    private $_address;
    private $_fechanacimiento;
    private $_contact_info;
    private $_genero;
    private $_idposition;
    private $_idschedules;
    private $_created_on;
    private $_tabla="employees";
    private $_bd;

    public function __construct($id=null, $dni=null, $nombres=null, $apellidos=null, $address=null, $fechanacimiento=null, $contact_info=null, $genero=null, $idposition=null, $idschedules=null, $created_on=null){
        $this->_bd = new BaseDeDatos(new MySQL());
        $this->_id= $id;
        $this->_dni= $dni;
        $this->_nombres= $nombres;
        $this->_apellidos= $apellidos;
        $this->_address= $address;
        $this->_fechanacimiento= $fechanacimiento;
        $this->_contact_info= $contact_info;
        $this->_genero= $genero;
        $this->_idposition= $idposition;
        $this->_idschedules= $idschedules;
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
                $this->_dni = $datos['data'][0]["dni"];
                $this->_nombres = $datos['data'][0]["nombres"];
                $this->_apellidos = $datos['data'][0]["apellidos"];  
                $this->_address = $datos['data'][0]["address"];  
                $this->_fechanacimiento = $datos['data'][0]["fechanacimiento"];  
                $this->_contact_info = $datos['data'][0]["contact_info"];  
                $this->_genero = $datos['data'][0]["genero"];  
                $this->_idposition = $datos['data'][0]["idposition"];  
                $this->_idschedules = $datos['data'][0]["idschedules"];  
                $this->_created_on = $datos['data'][0]["created_on"];  
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
            . " SET dni='".$this->_dni."'"
            . ", nombres='".$this->_nombres."'"
            . ", apellidos='".$this->_apellidos."'"
            . ", address='".$this->_address."'"
            . ", fechanacimiento='".$this->_fechanacimiento."'"
            . ", contact_info='".$this->_contact_info."'"
            . ", genero='".$this->_genero."'"
            . ", idposition='".$this->_idposition."'"
            . ", idschedules='".$this->_idschedules."'"
            . ", created_on='".$this->_created_on."'"
            ." WHERE id=".$this->_id;
        //var_dump($sql);exit;
        return $this->_bd->ejecutar($sql);
        //var_dump($sql);exit;
    }

    public function nuevo(){
        $sql = "INSERT INTO ". $this->_tabla 
            ." (id, dni,nombres,apellidos,address,fechanacimiento,contact_info,genero,idposition,idschedules,created_on) VALUES (".
                $this->_id .",'". 
                $this->_dni ."','". 
                $this->_nombres ."','". 
                $this->_apellidos ."','". 
                $this->_address ."','". 
                $this->_fechanacimiento ."','". 
                $this->_contact_info ."','". 
                $this->_genero ."','". 
                $this->_idposition ."','". 
                $this->_idschedules."','". 
                $this->_created_on ."'"
            .");";
        return $this->_bd->ejecutar($sql);
    }
    public function getid(){
        return $this->_id;
    }
    public function getdni(){
        return $this->_dni;
    }
    public function getnombres(){
        return $this->_nombres;
    }
    public function getapellidos(){
        return $this->_apellidos;
    }
    public function getaddress(){
        return $this->_address;
    }
    public function getfechanacimiento(){
        return $this->_fechanacimiento;
    }
    public function getcontact_info(){
        return $this->_contact_info;
    }
    public function getgenero(){
        return $this->_genero;
    }
    public function getidposition(){
        return $this->_idposition;
    }
    public function getidschedules(){
        return $this->_idschedules;
    }
    public function getcreated_on(){
        return $this->_created_on;
    }
}
