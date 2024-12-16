
<!DOCTYPE html>
<html lang="en">
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

            </div>
         </div>   
         <br>
         <br>
         <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                    <div class="form-group">
                    <center>
                     <h2 class="title">Inicio de Sesion</h2>
                     <?php
                    
                     ?>
                    </center>
                        <div class="mb-3">
                              <br>
                              <form id="login-form" method="POST" action="../Controlador/Login.php">
            <!-- Campo para el correo electrónico -->
            <div class="col-auto mb-3">
                <label for="email" class="form-label">Correo Electrónico:</label>
                <input 
                    class="form-control" 
                    type="email" 
                    id="email" 
                    name="email" 
                    placeholder="Ingrese su correo electrónico"
                    required>
            </div>
            <!-- Campo para la contraseña -->
            <div class="col-auto mb-3">
                <label for="password" class="form-label">Contraseña:</label>
                <input 
                    class="form-control" 
                    type="password" 
                    id="password" 
                    name="password" 
                    placeholder="Ingrese su contraseña"
                    required>
            </div>
            <!-- Botón de envío -->
            <div class="col-auto text-center">
                <button type="submit" class="btn btn-success mb-3">Aceptar</button>
            </div>
        </form>
                       
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
