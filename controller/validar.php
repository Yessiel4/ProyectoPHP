<?php 
    include "../conexion/conexionBD.php";

    Class Validar extends conexionBD{
        public function logear($usuario, $password){
            $conexion = parent::conectar();
            $passwordExistente = "";
            $sql = "SELECT * from usuario 
            WHERE = '$usuario'";
            $respuesta = mysqli_query($conexion,$sql);
            $passwordExistente = mysqli_fetch_array($respuesta)['password'];
             if(password_verify($password, $passwordExistente)){
                $_SESSION['Document'] = $usuario;
                return true;
             }else{
                return false;
             }
        }
    }
?>