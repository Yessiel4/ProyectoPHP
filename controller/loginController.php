<?php session_start();

    include "validar.php";
    $usuario = $_POST['Document'];
    $password = password_hash($_POST['Password'], PASSWORD_DEFAULT);

    $validar  =  new Validar();

    
       if ($validar->logear($usuario,$password)){
            header("locaction:../views/principal.php");
       }else{
            echo "no se puede logear";
       }
    
            
    
    
?>