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

        try{
            $dsn = "mysql:host={$this->SERVER};dbname={$this->BD}";
            $this->acceso = new PDO($dsn, $this->USER, $this->PASSWORD);
            $this->acceso->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
            $this->acceso->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

        }catch(PDOException $e){
            die("Error de conexion a BD". $e->getMessage());
        }


    }                
    
    public function conectar(){        
        if($this->acceso){
            echo "Conexion Exitosa";
        }
        else{
            echo "Error de conexion";
        }
        return $this->acceso;
    }

    public function desconectar(){
        $this->acceso=null;
    }
}
?>