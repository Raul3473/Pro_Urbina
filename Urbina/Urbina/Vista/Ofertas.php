<?php
   include '../Modelos/nav.php';
   include '../Controlador/Conexion_BD.php';
    require '../Controlador/config.php';
   
    

        $db = new Database();
        $con = $db->conectar();
    
        // Preparar la consulta SQL
        $sql = $con->prepare("SELECT id_Producto, Nombre_Producto, Precio FROM Producto WHERE activo = 1");

        // Ejecutar la consulta
        $sql->execute();
    
        // Obtener los resultados
        $resultado = $sql->fetchAll(PDO::FETCH_ASSOC);
       
?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<div class="container">
        <div class="row">
            <br>
        <?php foreach($resultado as $row){
             ?>
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <?php
                        $id=$row['id_Producto'];
                        $imagen="../Vista/Imagenes/$id/Principal.jpg";

                        if(!file_exists($imagen)){
                            $imagen="../Vista/Imagenes/fc25.jpg";
                        }
                    ?>
                    <img src="<?php echo $imagen; ?>" class="card-img-top" alt="Imagen de <?php echo $row['Nombre_Producto']; ?>"> 
                    <div class="card-body d-block w-100">
                    <h5 class="card-title"><?php echo $row['Nombre_Producto'] ?></h5>
                     <p class="card-text"><?php echo $row['Precio'] ?></p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <div class="row">
                                <div class="col-md-3">
                                <a href="../Vista/detalles.php?id_Producto=<?php echo $row['id_Producto']; ?>&token=<?php echo hash_hmac('sha1',$row['id_Producto'],KEY_TOKEN);?>" class="btn btn-sm btn-outline-secondary">Detalles</a>
                                </div>
                                <div class="col-md-4"></div>
                                <div class="col-md-5">
                                <a   class="btn btn-sm btn-outline-secondary" type="button"  onclick="addProducto<?php echo $id; ?>,"|"'<?php echo $token_temp;?>',<?php echo $row['id_Producto']; ?>">Agregar</a>
                                </div>
                                </div>    
                            </div>
                          </div>  
                    </div>
                </div>
                <br>
            </div>
            <br>
            <?php } ?>
            <br>
        </div>
        <br>
    </div>
</div>
</body>
</html>
<?php
    include '../Modelos/footer.php';
?>

