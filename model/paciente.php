<?php 

class paciente{
    private $id;
    private $documento;
    private $nombre;
    private $telefono;
    private $direccion;

    public function __paciente(){}

    public function __construct($id,$documento,$nombre,$telefono,$direccion){
       $this->id = $id;
       $this->documento = $documento;
       $this->nombre = $nombre;
       $this->telefono = $telefono;
       $this->direccion = $direccion;
}

    public function setId($id){
        return $this->$id;
}
    public function getId(){
    return $this->id;
}
    public function setDocumento($documento){
        return $this->$documento;
}
    public function getDocumento(){
    return $this->documento;
}
    public function setNombre($nombre){ 
        return $this->$nombre;
    }
    public function getTelefono(){
        return $this->telefono;
    }
    public function setTelefono($telefono){
        return $this->$telefono;
    }
    public function getdireccion(){
        return $this->direccion;
    }
    public function setdireccion($direccion){   
        return $this->$direccion;
    }
}
?>