<?php
    class usuarioDao extends Connection{
        public function getUsuario($documento,$clave){
            $sql = "SELECT * usuario WHERE usu_docum = '$documento' AND usu_clave ='$clave'";
            
            $result = $this->Connection()->query($sql);

            $numRows = $result->num_rows;
            if($numRows == 1){
                return true;
            }
            return false;
        }
    }
?>