<?php

class Usuario{
    private $id;
    private $documento;
    private $clave;

    public function __usuario(){

    }
    public function __construct($id, $documento,$clave ){
        $this->id = $id;
        $this->documento = $documento;
        $this->clave = $clave;
    }
    public function set_Id($id){
        $this->id=$id;
    }
    public function get_Id(){
        return  $this->id;
    }
    public function set_Documento($documento){
        $this->documento=$documento;
    }
    public function get_Documento(){
        return  $this->documento;
    }
    public function set_Clave($clave){
        $this->clave=$clave;
    }
    public function get_Clave(){
       return $this->clave;
    }
}
?>