<?php
session_start();

// Verificar si el administrador está logueado
if (!isset($_SESSION['admin_id'])) {
    header("Location: ../Vista/Admin/Login_Admin.php");
    exit();
}

include('../Controlador/Conexion_BD.php');

// Verificar si se ha recibido el ID del producto
if (isset($_GET['id_Producto'])) {
    $id_Producto = $_GET['id_Producto'];

    // Eliminar el producto
    $sql = "UPDATE Producto SET activo = 0 WHERE id_Producto = ?";
    $stmt = $conn->prepare($sql);
    $stmt->execute([$id_Producto]);

    header("Location: Admin.php");
    exit();
} else {
    echo "Error: No se ha proporcionado el ID del producto.";
}
?>
