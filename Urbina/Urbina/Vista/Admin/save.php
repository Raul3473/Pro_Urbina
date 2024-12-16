<?php
	error_reporting(E_ALL);
	ini_set('display_errors', 1);
	session_start();

	// Verificar si el administrador está logueado
	if (!isset($_SESSION['admin_id'])) {
	    //header("Location: ../Vista/Login_Admin.php");
	    header("Location: ../Vista/Admin/Login_Admin.php");
	    exit();
	}

	include('../Controlador/Conexion_BD.php');

	// Verificar si se ha enviado el formulario
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	    // Obtener los datos del formulario
	    $nombre = $_POST['nombre'];
	    $precio = $_POST['precio'];
	    $descripcion = $_POST['descripcion'];
	    $cantidad = $_POST['cantidad'];

		try{
		    // Insertar el nuevo producto
		    //$sql = "INSERT INTO Producto (Nombre_Producto, Precio, Descripcion_Producto, activo) VALUES (?, ?, ?, 1)";
		    $sql = "INSERT INTO productos (nombre, precio, descripcion, cantidad, activo) VALUES (?, ?, ?, ?, 1)";
		    $stmt = $conn->prepare($sql);
		    $stmt->execute([$nombre, $precio, $descripcion, $cantidad]);

		    header("Location: Admin.php");
		    exit();
		} catch (PDOException $e) {
			// Mostrar el error si algo sale mal
			echo "Error al insertar el producto: " . $e->getMessage();
			exit();
		    } 
	}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Nuevo Producto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h1 class="my-4">Agregar Nuevo Producto</h1>
        <form method="POST">
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre del Producto</label>
                <input type="text" class="form-control" id="nombre" name="nombre" required>
            </div>
            <div class="mb-3">
                <label for="precio" class="form-label">Precio</label>
                <input type="number" class="form-control" id="precio" name="precio" required>
            </div>
            <div class="mb-3">
                <label for="cantidad" class="form-label">Cantidad</label>
                <input type="number" class="form-control" id="cantidad" name="cantidad" required>
            </div>
            <div class="mb-3">
                <label for="descripcion" class="form-label">Descripcion</label>
                <input type="text" class="form-control" id="descripcion" name="descripcion" required>
            </div>
            <button type="submit" class="btn btn-primary">Guardar Producto</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
