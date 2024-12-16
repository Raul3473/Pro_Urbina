<?php
require '../Controlador/config.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../Vista/Estilos/nav.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
<nav class="navbar-nav">
    <div class="container">
        <div class="row">
            <div class="col-md-2">
            <a class="nav-link active" href="#">
                 <img src="../Vista/imagenes/Logo.jpg" alt="Logo" width="30px" height="24" class="d-inline-block align-text-top">
                 Zona Gamer
             </a>
            </div>
            <div class="col-md-1">
            <a class="nav-link active" href="../Vista/index.php"><i class='bx bx-home-alt-2'></i>Inicio</a>
            </div>
            <div class="col-md-1">
            <a class="nav-link active" href="../Vista/Ofertas.php" ><i class='bx bx-time-five' ></i> Ofertas</a>
            </div>
            <div class="col-md-2">
            <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="true">
            <i class='bx bx-category' ></i>Categorias</a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="../Vista/Categoria.php">PC</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">PlayStation</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Xbox</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Nintendo</a></li>
          </ul>
            </li>
            </div>
            <div class="col-md-3">
                <form class="d-flex" role="search">
                    <input class="form-control me-4" type="search" placeholder="Buscar" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Buscar</button>
                </form>
            </div>
            <div class="col-md-1">
                <button type="button" class="nav-link active position-relative" ><i class='bx bx-cart-add'></i><span id="num_cart" class="badge bg-danger"><?php echo $num_cart; ?></span></button>
            </div>
            <div class="col-md-2">
                <a href="../Vista/Inicio_Seccion.php" class="nav-link active">
                    <i class='bx bx-log-in-circle'></i>Incio Seccion
                </a>
            </div>
        </div>
    </div>
</nav>    
</body>
</html>