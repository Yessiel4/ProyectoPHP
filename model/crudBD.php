<?php   
include('../conexion/conexionBD.php');
Class crudBD extends conexionBD {
    private $connection;

    public function _construct(){        
        
    }

        public function insertPaciente( $inputDocumento, $inputNombre, $inputDireccion, $inputTelefono ){

            
            $this->connection = new conexionBD();
            $sql = "INSERT INTO paciente ( pac_documento, pac_nombre, pac_direccion, pac_telefono ) 
                    VALUES ('$inputDocumento', '$inputNombre', '$inputDireccion', $inputTelefono)";
            $stmt = mysqli_query($this->connection->conectar(), $sql);

            if ( $stmt) {
                echo "Paciente creado con exito";   
            }else{
                echo "Error de Insercion: ";
            }
            
            $this->connection->desconectar( $this->connection );
        }

        public function searchPaciente( $datoInput ){

            
            $this->connection->conectar();
            $sql = "SELECT * FROM paciente WHERE idPaciente=".$datoInput;
            $stmt = $this->connection->prepare( $sql );
            $stmt->excecute();
            $row = $stmt->fetch();
            if($row){
                return new Paciente( $row['pac_documento'],$row['pac_nombre'],$row['pac_direccion'], $row['pac_telefono'] );                
            }else{
                return null;
            }
            $this->connection->desconectar( $this->connection );
        }

        public function updatePaciente( $inputDocumento, $inputNombre, $inputDireccion, $inputTelefono ){

            $sql = "UPDATE paciente SET documento=".$inputDocumento;
            $sql .= ", nombre=".$inputNombre.", direccion=".$inputDireccion.", telefono=".$inputTelefono;
            $stmt = $this->connection->prepare($sql);

            if( $stmt->execute() ){
                echo "Paciente actualizado exitosamente";
            }else{
                echo "Error de actualizacion: ".$this->connection->error;
            }

            $this->connection->desconectar( $this->connection );
        }

        public function deletePaciente ( $inputDocumento ){

            $this->connection->conectar();
            $sql = "DELETE FROM paciente WHERE idPaciente=".$inputDocumento;
            $stmt = $this->connection->prepare( $sql );  
            
            if( $stmt->execute() ){
                echo "Paciente eliminado exitosamente";
            }else{
                echo "Error de eliminacion: ".$this->connection->error;
            }

            $this->connection->desconectar( $this->connection );
        }


}    