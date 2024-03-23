<?php   
include('../conexion/conexionBD.php');
Class crudBD extends conexionBD {
    private $connection;
    private $result;

    public function _construct(){        
        
    }

        public function insertPaciente($nombreTabla, $inputDocumento, $inputNombre, $inputDireccion, $inputTelefono ){

            
            $this->connection = new conexionBD();
            $this->connection = $this->connection->conectar();
            $sql = "INSERT INTO $nombreTabla ( pac_documento, pac_nombre, pac_direccion, pac_telefono ) 
                    VALUES ('$inputDocumento', '$inputNombre', '$inputDireccion', '$inputTelefono')";
            $stmt = $this->connection->prepare($sql);
            $stmt->execute();            

            if ( $stmt) {
                echo "Paciente creado con exito";   
            }else{
                echo "Error de Insercion: ";
            }
            
            // $this->connection->desconectar();
        }

        public function searchPaciente($nombreTabla){

            $this->connection = new conexionBD();
            $this->connection = $this->connection->conectar();
            $sql = "SELECT * FROM $nombreTabla";
            $stmt = $this->connection->prepare($sql);
            $stmt->execute();

            $this->result = $stmt->fetchAll(PDO::FETCH_ASSOC);
            
            if($this->result){
                return $this->result;                 
            }else{
                return null;
            }
            // $this->connection->desconectar();
        }

        public function searchPacienteId( $datoInput ){

            
            $this->connection->conectar();
            $sql = "SELECT * FROM paciente WHERE idPaciente=".$datoInput;
            $stmt = $this->connection->prepare($sql);
            $stmt->execute();

            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
            
            if($result){
                foreach($result as $row){
                return new Paciente( $row['pac_documento'],$row['pac_nombre'],$row['pac_direccion'], $row['pac_telefono'], $row['estrato_id'] ); 
                }               
            }else{
                return null;
            }
            $this->connection->desconectar();
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