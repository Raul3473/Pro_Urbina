<?php
session_start();

// Verificar si el administrador está logueado
if (!isset($_SESSION['admin_id'])) {
    header("Location: ../Vista/Admin/Login_Admin.php");
    exit();
}

include('../Controlador/Conexion_BD.php');

if ($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['id_Producto'])) {
    $id_Producto = $_GET['id_Producto'];

    // Consultar los detalles del producto
    $sql = "SELECT * FROM Producto WHERE id_Producto = ?";
    $stmt = $conn->prepare($sql);
    $stmt->execute([$id_Producto]);
    $producto = $stmt->fetch(PDO::FETCH_ASSOC);
    
    if (!$producto) {
        echo "Producto no encontrado.";
        exit();
    }
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Obtener los datos del formulario
    $nombre = $_POST['nombre'];
    $precio = $_POST['precio'];
    $descripcion = $_POST['descripcion'];

    // Actualizar el producto en la base de datos
    $sql = "UPDATE Producto SET Nombre_Producto = ?, Precio = ?, Descripcion_Producto = ? WHERE id_Producto = ?";
    $stmt = $conn->prepare($sql);
    $stmt->execute([$nombre, $precio, $descripcion, $id_Producto]);

    header("Location: Admin.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Producto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h1 class="my-4">Editar Producto</h1>
        <form method="POST">
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre del Producto</label>
                <input type="text" class="form-control" id="nombre" name="nombre" value="<?php echo htmlspecialchars($producto['Nombre_Producto']); ?>" required>
            </div>
            <div class="mb-3">
                <label for="precio" class="form-label">Precio</label>
                <input type="number" class="form-control" id="precio" name="precio" value="<?php echo htmlspecialchars($producto['Precio']); ?>" required>
            </div>
            <div class="mb-3">
                <label for="descripcion" class="form-label">Descripción</label>
                <textarea class="form-control" id="descripcion" name="descripcion" required><?php echo htmlspecialchars($producto['Descripcion_Producto']); ?></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Guardar Cambios</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
