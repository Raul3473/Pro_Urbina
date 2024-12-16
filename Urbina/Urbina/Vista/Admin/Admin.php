<?php
session_start();

// Verificar si el administrador está logueado
if (!isset($_SESSION['admin_id'])) {
    header("Location: ../Vista/Login_Admin.php");
    exit();
}

// Obtener los datos del administrador
$admin_id = $_SESSION['admin_id'];
$admin_username = $_SESSION['admin_username'];

// Incluir los archivos necesarios
include('../Modelos/nav.php');
include('../Controlador/Conexion_BD.php');

// Consulta para obtener todos los productos
$sql = "SELECT * FROM Producto WHERE activo = 1";
$stmt = $conn->prepare($sql);
$stmt->execute();
$productos = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel de Administración</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../Vista/Estilos/admin.css"> <!-- Tu propio estilo -->
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="my-4">Bienvenido al Panel de Administración, <?php echo htmlspecialchars($admin_username); ?></h1>
                <div class="card mb-4">
                    <div class="card-header">
                        <h4>Gestión de Productos</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <!-- Botón para agregar un nuevo producto -->
                            <div class="col-md-3">
                                <a href="save.php" class="btn btn-success btn-lg btn-block">Agregar Producto</a>
                            </div>
                        </div>
                        <br>

                        <!-- Tabla para listar los productos -->
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Nombre</th>
                                    <th>Precio</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($productos as $producto): ?>
                                <tr>
                                    <td><?php echo htmlspecialchars($producto['Nombre_Producto']); ?></td>
                                    <td><?php echo MONEDA . htmlspecialchars($producto['Precio']); ?></td>
                                    <td>
                                        <a href="edit.php?id_Producto=<?php echo $producto['id_Producto']; ?>" class="btn btn-warning btn-sm">Editar</a>
                                        <a href="delete.php?id_Producto=<?php echo $producto['id_Producto']; ?>" class="btn btn-danger btn-sm">Eliminar</a>
                                    </td>
                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
