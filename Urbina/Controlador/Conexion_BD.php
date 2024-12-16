<?php
class Database
{
   private $servername = "localhost"; // tu servidor de base de datos  
   private $username = "root"; // tu usuario  
   private $password = ""; // tu contraseña  
   private $dbname = "Tienda_Linea"; // el nombre de tu base de datos  
   private $charset = "utf8"; // el charset de tu base de datos
   
   // Crear conexión  
   function conectar()
   {
       try {
           // Corrección de la cadena de conexión
           $conexion = "mysql:host=" . $this->servername . ";dbname=" . $this->dbname . ";charset=" . $this->charset;

           // Configuración de opciones de PDO
           $options = [
               PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
               PDO::ATTR_EMULATE_PREPARES => false
           ];

           // Creación de la conexión PDO
           $pdo = new PDO($conexion, $this->username, $this->password, $options);
           
           return $pdo;
       } catch (PDOException $e) {
           echo "Error en la conexión: " . $e->getMessage();
           exit;
       }
   }
}
?>

