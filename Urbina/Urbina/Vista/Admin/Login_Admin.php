<?php
session_start();
include('../Controlador/Conexion_BD.php');

// Verificar si el administrador ya está logueado
if (isset($_SESSION['admin_id'])) {
    header("Location: ../Vista/Admin/Admin.php");
    exit();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Consultar si el usuario y la contraseña son correctos
    $sql = "SELECT * FROM usuarios WHERE username = 'Admin' AND rol = 'admin'";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();
    
    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();
        if (password_verify($password, $user['password'])) {
            $_SESSION['admin_id'] = $user['id'];
            $_SESSION['admin_username'] = $user['username'];
            header("Location: ../Vista/Admin/Admin.php");
            exit();
        } else {
            $error = "Contraseña incorrecta.";
        }
    } else {
        $error = "Usuario no encontrado.";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../Vista/Estilos/inicio_Se.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-2">
            <a class="nav-link active" href="../Vista/index.php">
                 <img src="../Vista/imagenes/Logo.jpg" alt="Logo" width="30px" height="24" class="d-inline-block align-text-top">
                 Zona Gamer
             </a>
            </div>
            <div class="col-md-8">
            </div>
            <div class="col-md-2">
                <?php

                ?>
            </div>
         </div>   
         <br>
         <br>
         <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                    <div class="form-group">
                    <center>
                <h4>Inicio de Sesion</h4>
                </center>
                      <form action="../Vista/Login_Admin.php" method="POST">
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Usuario:</label>
                            <input type="username" class="form-control" name="username" id="username" required>
                        </div>
                        <div class="col-auto">
                            <label for="inputPassword6" class="col-form-label">Contraseña</label>
                        </div>
                        <div class="col-auto">
                            <input type="password" name="password" id="password" class="form-control" aria-describedby="passwordHelpInline" required>
                        </div>
                         <div class="col-auto">
                            <span id="passwordHelpInline" class="form-text">
                            Debe tener entre 8 y 20 caracteres.
                            </span>
                        </div>
                        <br>
                        <div class="col-auto">
                            <center>
                            <button type="submit" class="btn btn-success mb-3">Iniciar sesión</button>
                            </center>
                            </form>
                            <?php if (isset($error)) { echo "<p style='color:red;'>$error</p>"; } ?>
                        </div>
                    </div>
            </div>
            <div class="col-md-4"></div>
         </div>  
         <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <center>
                    <br>
                <a href="https://accounts.google.com/v3/signin/" class="nav-link" ><i class='bx bxl-google'></i></a>
                </center>
            </div>
            <div class="col-md-4"></div>
         </div> 
    </div>
</body>
</html>
