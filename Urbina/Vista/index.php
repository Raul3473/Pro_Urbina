
<?php
  include '../Modelos/nav.php';
 
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../Vista/Estilos/index.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200&icon_names=arrow_forward" />
</head>
<body>


<div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="../Vista/Imagenes/fc25.jpg" class="d-block w-100" alt="../Vista/Imagenes/fc25.jpg" height="600">
    </div>
    <div class="carousel-item">
      <img src="../Vista/Imagenes/juegos.avif" class="d-block w-100" alt="../Vista/Imagenes/juegos.avif" height="600">
    </div>
    <div class="carousel-item">
      <img src="../Vista/Imagenes/Mario.webp" class="d-block w-100" alt="../Vista/Imagenes/Mario.webp" height="600">
    </div>
    <div class="carousel-item">
      <img src="../Vista/Imagenes/Black ops 6.avif" class="d-block w-100" alt="../Vista/Imagenes/Black ops 6.avif"height="600">
    </div>
    <div class="carousel-item">
      <img src="../Vista/Imagenes/playStation_plus.jpg" class="d-block w-100" alt="../Vista/Imagenes/playStation_plus.jpg" height="600">
    </div>
    <div class="carousel-item">
      <img src="../Vista/Imagenes/gta6.avif" class="d-block w-100" alt="../Vista/Imagenes/gta6.avif" height="600">
    </div>
    <div class="carousel-item">
      <img src="../Vista/Imagenes/Nfl25.avif" class="d-block w-100" alt="../Vista/Imagenes/Nfl25.avif" height="600">
    </div>
    <div class="carousel-item">
      <img src="../Vista/Imagenes/pass_Xbox.jpg" class="d-block w-100" alt="../Vista/Imagenes/pass_Xbox.jpg" height="600">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>


  <div class="color">
    <div class="container">
      <br>  
      <div class="row">
            <div class="col-md-3 mb-3">
              <div class="card">
              <img src="../Vista/Imagenes/Nintendo.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Exclusivo para Nintendo</h5>
                  <p class="card-text">
                  Elegir Nintendo, especialmente la familia de consolas Nintendo Switch, tiene varias ventajas. 
                  La Switch es portátil,lo que te permite jugar en cualquier lugar. 
                  También ofrece una amplia variedad de juegos exclusivos.
                  </p>
                  <a href="#" class="btn btn-primary">Ir</a>
                </div>
              </div>
            </div>
            <div class="col-md-3">
            <div class="card">
            <img src="../Vista/Imagenes/PlayStation.avif" class="card-img-top" alt="../Vista/Imagenes/PlayStation.avif">
                <div class="card-body">
                  <h5 class="card-title">Exclusivo para PlayStation</h5>
                  <p class="card-text">
                  Elegir una consola PlayStation puede ser una excelente opción por varias razones. En primer lugar, 
                  las consolas de PlayStation ofrecen potentes capacidades gráficas y un rendimiento excelente.
                  </p>
                  <br>
                  <a href="#" class="btn btn-primary">Ir</a>
                </div>
              </div>
            </div>
            <div class="col-md-3">
            <div class="card">
            <img src="../Vista/Imagenes/Xbox.jpg" class="card-img-top" alt="../Vista/Imagenes/Xbox.jpg">
                <div class="card-body">
                  <h5 class="card-title">Exclusivo para Xbox</h5>
                  <p class="card-text">
                      Xbox es una plataforma de juegos que ofrece consolas,
                      una amplia variedad de juegos (tanto nuevos como clásicos),
                      y accesorios para disfrutar de la experiencia de entretenimiento.
                  </p>
                  <br>
                  <a href="#" class="btn btn-primary">Ir</a>
                </div>
              </div>
            </div>
            <div class="col-md-3">
            <div class="card">
            <img src="../Vista/Imagenes/Pc.avif" height="170px"class="card-img-top" alt="../Vista/Imagenes/Pc.avif">
                <div class="card-body">
                  <h5 class="card-title">Exclusivo para PC</h5>
                  <p class="card-text">Hay una gran variedad de juegos para PC en diferentes géneros y estilos. 
                    Algunos de los más populares incluyen "Grand Theft Auto V: 
                    Premium Edition", "VALORANT" y "Minecraft"</p>
                    <br>
                  <a href="#" class="btn btn-primary">Ir</a>
                </div>
              </div>
            </div>
          </div>
      <br>
      <br>
      <div class="card">
        <div class="card-header">
           <div class="row">
              <div class="col-md-6">
                <h5> <i class='bx bxs-game'></i> Suscríbete desde $100.00/mes</h5>
              </div>
              <div class="col-md-4"></div>
              <div class="col-md-2">
                 <a href="http://localhost/Urbina/Vista/Inicio_Seccion.php" class="btn btn-info">Nivel Gold</a>
              </div>
           </div>
        </div>      
           <div class="card-body">
              <h6 class="card-title">Ahorra en tus envíos, compras y pagos</h6>
              <br>
              <br>
              <div class="row">
                <div class="col-md-4">
                <p class="nav-link active"><i class='bx bx-coin-stack'></i>Juegos Digitales desde $20.00</p>
                </div>
                <div class="col-md-4">
                  <p class="nav-link active" ><i class='bx bxs-credit-card' ></i>Pagos con tarjeta de crédito desde $10.00</p>
                </div>
                <div class="col-md-4">
                  <p class="nav-link active"><i class='bx bx-cool'></i> El juego a la cuenta principal</p>
                </div>
              </div> 
          </div>
      </div>
    </div>  
  
    
<br>
<br>

        <div class="container">
            <div class="row">
                <div class="col-md-12" >
                <div class="card">
                <div class="row imagens">
                    <div class="col-md-6">
                      <p class="display-1">Los Mejor Juegos Todas Las Plataformas</p>
                    </div>
                    <div class="col-md-4">
                      <br>
                      <div class="card">
                      <iframe id="video" width="510" height="315" src="https://www.youtube.com/embed/bgqGdIoa52s?si=4rtgwCJwp7SHi2E_&autoplay=1&controls=0&start=1&mute=1loop=1 " title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                      </div>
                      </div>
                      <div class="col-md-1"></div>
                 </div>
                    <br>
                  </div>
                </div>
        </div>         

        <div class="row carrusel">
                <div class="col-md-8 swiper">
                    <div class="card-wrapper">
                    <ul class="card-list swiper-wrapper">
                            <li class="card-item swiper-slide">
                                <a href="#" class="card-link">
                                  <img src="../Vista/Imagenes/ventas.jpg" alt="card image" class="card-image">
                                  <p class="badge ventas">Ventas</p>
                                  <h2 class="card-title">
                                    Las ventas en una tienda online, 
                                    también conocidas como comercio electrónico</h2>
                                    <br>
                                    <br>
                                  <button class="card-button material-symbols-outlined">arrow_forward</button>
                                </a>
                            </li>
                            <li class="card-item swiper-slide">
                                <a href="#" class="card-link">
                                  <img src="../Vista/Imagenes/recompesas.jpg" alt="card image" class="card-image">
                                  <p class="badge Recompesas">Recompesas</p>
                                  <h2 class="card-title">La recompensa es la acción y efecto de recompensar, así como aquello que se utiliza para tal fin.</h2>
                                  <button class="card-button material-symbols-outlined">arrow_forward</button>
                                  <br>
                                  <br>
                                </a>
                            </li>
                            <li class="card-item swiper-slide">
                                <a href="#" class="card-link">
                                  <img src="../Vista/Imagenes/Ediciones.jpg" alt="card image" class="card-image">
                                  <p class="badge edicion">Edicion</p>
                                  <h2 class="card-title">
                                    Puedes crear tu tienda online fácilmente usando plataformas como Mercado Shops</h2>
                                    <br>
                                    <br>
                                  <button class="card-button material-symbols-outlined">arrow_forward</button>
                                </a>
                            </li>
                            <li class="card-item swiper-slide">
                                <a href="#" class="card-link">
                                  <img src="../Vista/Imagenes/Game.jpg" alt="card image" class="card-image">
                                  <p class="badge gamer">Gamer</p>
                                  <h2 class="card-title">Existen varios sitios donde puedes jugar videojuegos online de manera gratuita y de manera de costo.</h2>
                                  <button class="card-button material-symbols-outlined">arrow_forward</button>
                                </a>
                            </li>   
                            <li class="card-item swiper-slide">
                                <a href="#" class="card-link">
                                  <img src="../Vista/Imagenes/Logo.jpg" alt="card image" class="card-image">
                                  <p class="badge Conocer">Conocer</p>
                                  <h2 class="card-title">Es una plataforma de comercio electrónico que permite a los usuarios comprar y  servicios.</h2>
                                  <button class="card-button material-symbols-outlined">arrow_forward</button>
                                  <br>
                                  <br>
                                </a>
                            </li>
                            <li class="card-item swiper-slide">
                                <a href="#" class="card-link">
                                  <img src="../Vista/Imagenes/rembolsos.png" alt="card image" class="card-image">
                                  <p class="badge Rebolsos">Rebolsos</p>
                                  <h2 class="card-title">La tienda online que ofrece los juegos mas papulares. Además, cuentan con una política de devoluciones </h2>
                                  <button class="card-button material-symbols-outlined">arrow_forward</button>
                                  <br>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="swiper-pagination"></div>
                        <div class="swiper-slide-button swiper-button-prev"></div>
                        <div class="swiper-slide-button swiper-button-next"></div>
                </div>
                </div>
                    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
                    <script src="../Controlador/carrusel.js"></script>   
                    <script src="../Controlador/script.js"></script>       
      </div>              
 </div>
      </body>  
</html>
<?php
        include '../Modelos/footer.php';
?>
