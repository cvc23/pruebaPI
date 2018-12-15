Para poder ejecutar el proyecto, en necesario contar con mysql, habilitar el modulo de php con mysql y 
    montar el proyecto en un seridor, puede ser localhost, No se tienen todos los estados en la bd ya que solo se utilizaron 5 para realizar pruebas.
    El archivo PDF que se muestra en el sitio también es de pruebas.
    Se utilizó boostrap V3.3, jquery y php V5.2



1.-Cambiar los valores del archivo BD.php con los datos adecuados como se muestra a continucación
    try {

            $usuario = 'root'; ****CAMBIAR EL USUARIO*************
                $pass = '12345678';  ******CAMBIAR LA CONTRASEÑA*************
                $this->conexion = new PDO('mysql:host=127.0.0.1;dbname=pruebaPI', $usuario, $pass); ****CAMBIAR LA VARIABLE dbname
                //echo "Conexion exitosa";
        }catch(PDOException $e){
            die("Error al conectarse:". $e->getMessage());
        }    
    }
2.- La base de datos se encuentra en un archivo llamado bd.sql


