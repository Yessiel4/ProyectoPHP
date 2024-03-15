<?php
    
Class conexionBD {

    private $SERVER;
    private $USER;
    private $PASSWORD;
    private $BD;
    private $acceso;
    

    function __construct(){
        include "configuracion.php";        
        $this->SERVER = $server;
        $this->USER = $user;
        $this->PASSWORD = $password;
        $this->BD = $bd;
    }                
    
    public function conectar(){

        $this->acceso = mysqli_connect($this->SERVER,$this->USER,$this->PASSWORD,$this->BD);

        if($this->acceso){
            echo "Conexion Exitosa";
        }
        else{
            echo "Error de conexion";
        }
        return $this->acceso;
    }

    public function desconectar(){
        mysqli_close($this->acceso);
    }

}
    
?>