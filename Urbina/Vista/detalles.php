<?php
      include '../Modelos/nav.php';
      require '../Controlador/config.php';
      require '../Controlador/Conexion_BD.php';
      $db = new Database();
      $con=$db->conectar();
  
      $id = isset($_GET['id_Producto']) ? $_GET['id_Producto'] : '';
      $token=isset($_GET['token']) ? $_GET['token'] : '';
      
      if($id == '' || $token==''){
          echo "Error al procesar la petición";
          exit;
      }
      else{
          $token_temp=hash_hmac('sha1',$id,KEY_TOKEN);
          if($token==$token_temp){
              $sql=$con->prepare("SELECT Nombre_Producto,Precio,Descripcion_Producto,Descuento FROM `Producto` WHERE id_Producto=? and activo=1");
              $sql->execute([$id]);
              $resultado=$sql->fetch(PDO::FETCH_ASSOC);
              $nombre=$resultado['Nombre_Producto'];
              $precio=$resultado['Precio'];
              $descripcion=$resultado['Descripcion_Producto'];
              $descuento=$resultado['Descuento'];
              $precio_desc= $precio - (($precio*$descuento)/100);
              $dir_images='../Vista/Imagenes/'. $id .'/';
  
              $rutaImg= $dir_images . "Principal.jpg";
  
              if(!file_exists($rutaImg)){
                  $rutaImg='../Vista/Imagenes/fc25.jpg';
              }
  
              $imagenes = array();
              if(file_exists($dir_images)){
                $dir= dir($dir_images);
              

  
              while(($archivo = $dir->read()) != false){
                  if($archivo != 'Principal.jpg' && (strpos($archivo,'jpg')|| strpos($archivo,'jpeg') || strpos($archivo,'mp4')))
                  {
                      $imagenes[] = $dir_images . $archivo;
                  }
              }

            
              $dir->close();
            }
          }else{
              echo "Error al procesar la petición";
              exit;
          }
      }
       
      $sql=$con->prepare("SELECT id_Producto,Nombre_Producto,Precio FROM `Producto` WHERE id_categoria=2 and activo=1");
      $sql->execute();
      $resultado=$sql->fetchAll(PDO::FETCH_ASSOC);
?>

<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <main>
        <br>
        <br>
        <div class="container">
        <div class="row">
            <div class="col-md-6 order-md-1">
                <div id="carouselImages" class="carousel slide">
                    <div class="carousel-inner">
                         <div class="carousel-item active">
                             <img src="<?php echo $rutaImg; ?>" class="d-block w-100" alt="...">
                         </div>
                          <?php foreach ($imagenes as $img) { ?>
                         <div class="carousel-item">
                             <img src="<?php echo $img; ?>" class="d-block w-100" alt="...">
                         </div>
                         <?php } ?>
                    </div>
                 <button class="carousel-control-prev" type="button" data-bs-target="#carouselImages" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                 <button class="carousel-control-next" type="button" data-bs-target="#carouselImages" data-bs-slide="next">
                     <span class="carousel-control-next-icon" aria-hidden="true"></span>
                     <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
        <br>
             <div class="col-md-6 order-md-2">
                <h2><?php echo $nombre; ?></h2>
                 <?php
                 if($descuento>0){?>
                    <p><del><?php echo MONEDA. $precio; ?></del></p>
                    <h2>
                        <?php echo MONEDA. $precio_desc; ?>
                        <small class="text-success"><?php echo  $descuento; ?>% descuento</small>
                    </h2>
                 <?php
                 }
                 else{
                 ?>
                <h2><?php echo MONEDA. $precio; ?></h2>
                <?php }?>
                <p class="lead">
                    <?php echo $descripcion; ?>
                </p>
                <br>
                <div class="d-grid gap-3 col-10 mx-auto">
                        <button type="button" class="btn btn-primary "src="../Vista/Pago.php">Comprar ahora</button>
                        <button type="button" class="btn btn-outline-primary" onclick="addProducto(<?php echo $id; ?>,'<?php echo $token_temp; ?>')">Agregar al carrito</button>
                </div>
            </div>
        </div>
        </div>
    </main>
  <br>
  <br>
  <br>
    <div class="container">
        <center>
        <h2 class="card-title" >Juegos Relacionados</h2>
        </center>
        <br>
        <br>
       
        <div class="row ">
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
                    <img src="<?php echo $imagen; ?>" class="card-img-top" alt="..." > 
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
                                <a   class="btn btn-sm btn-outline-secondary">Agregar</a>
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
</body>
</html>
 <script>
    function addProducto(id, token) {  
    let url = '../Controlador/carrito.php'
    let formdata = new FormData()  
    formdata.append('id', id)  
    formdata.append('token', token)

    fetch(url, {  
        method: 'POST',  
        body: formdata,
        mode: 'cors'  
    })  
    .then(response => response.json())  
    .then(data=> {  
        if (data.ok) {  
            let elemento = document.getElementById("num_cart")
            elemento.innerHTML = data.numero;
            
        }  
    })  
 
}  
 </script>
<?php
    include '../Modelos/footer.php';
    ?>
