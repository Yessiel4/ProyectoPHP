<!-- 
include "usuario.php";

Class Model extends Connection{
    
   public function getUsuario($documento, $clave){
    $sql = "SELECT * FROM usuario WHERE usu_docum = '$documento' AND usu_clave= '$clave'";
    $result = $this->Connection()->query($sql);
    $numRows = result->num_rows;

    if($numRows == 1){
        return true;
    } else{
        return false;
    }

   }
} -->