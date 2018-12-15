<?php
class DB{
    
    function __construct(){
        
        try {
            $usuario = 'root';
                $pass = '12345678';
                $this->conexion = new PDO('mysql:host=127.0.0.1;dbname=pruebaPI', $usuario, $pass);
                //echo "Conexion exitosa";
        }catch(PDOException $e){
            die("Error al conectarse:". $e->getMessage());
        }    
    }
    
    public function ejecutar($sql){
        //echo $sql;
        if($this->conexion){
            return $this->conexion->query($sql)->fetchAll();
        }else{
            return null;
        }
    }
}

?>