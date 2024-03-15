<?php

    if (isset($_POST['insert'])) {

        include ('../model/crudBD.php');

        $nombre = $_POST['nombre'];
        $documento = $_POST['documento'];
        $direccion = $_POST['direccion'];
        $telefono = $_POST['telefono'];        

        if( empty($nombre) || empty($documento) || empty($direccion) 
            || empty($telefono) ){

                echo '<div class = "alert alert-danger">Empty document or password</div>';
        }else{
            $crud = new crudBD;
            $crud->insertPaciente($nombre, $documento, $direccion, $telefono);               
        }
    } 

?>