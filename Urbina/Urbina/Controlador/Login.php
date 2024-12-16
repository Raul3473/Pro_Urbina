<?php
require_once('Conexion_BD.php'); // Verifica que esta ruta sea correcta

// Validar si se reciben los datos correctamente
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['email'], $_POST['password'])) {
    // Escapar y sanitizar los datos
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);;

    try {
        // Preparar la consulta con parámetros
        $sql = $con->prepare("
            SELECT 
                C.id_Clientes, 
                C.Correo_Clientes, 
                C.Password_Cliente, 
                C.Nombre_Clientes, 
                R.Nombre as rol 
            FROM Clientes C 
            LEFT JOIN Roles R ON C.id_Roles = R.id_Roles 
            WHERE C.Correo_Clientes = $email; 
        ");

        // Ejecutar la consulta con los valores proporcionados
        $sql->bind_param("s", $email); // "s" indica que el parámetro es un string
        $sql->execute();
        $resultado = $sql->get_result();

        if ($resultado->num_rows > 0) {
            $row = $resultado->fetch_assoc();

            // Verificar la contraseña usando password_verify (recomendado para contraseñas hasheadas)
            if (password_verify($password, $row['Password_Cliente'])) {
                session_start();
                $_SESSION['user'] = $row['Correo_Clientes'];
                $_SESSION['rol'] = $row['rol'];

                // Redirigir al usuario al índice
                header("Location: ../Vista/index.php");
                exit(); // Asegurar que se detenga la ejecución después de la redirección
            } else {
                echo "Usuario o contraseña incorrectos.";
                header("Location: ../Vista/Inicio_Seccion.php");
                exit();
            }
        } else {
            echo "Usuario o contraseña incorrectos.";
            header("Location: ../Vista/Inicio_Seccion.php");
            exit();
        }
    } catch (Exception $e) {
        // Manejar errores y mostrar información útil en desarrollo
        echo "Error: " . $e->getMessage();
        exit();
    }
} else {
    // Si no se envió la solicitud con los datos esperados
    echo "Solicitud inválida.";
   // header("Location: ../Vista/Inicio_Seccion.php");
    exit();
}
?>
