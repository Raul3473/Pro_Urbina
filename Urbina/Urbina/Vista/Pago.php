<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
        <script
            src="https://www.paypal.com/sdk/js?client-id=AWaDT_3nDkPCGf4KynbDdqrlG1hTIH_t6AVJwkEI9Ax2jLT2DQw_x3FF4QPYMQnXAgRDsMO5GffcdfxD&currency=MXN"
        ></script>
    </head>
    <body>
      <?php
        include '../Modelos/nav.php';
      ?>
      <br>
        <div class="container">
            <div class="row">
               <br>
                <div class="col-md-6">
                  <center>
                  <h2>Pago</h2>
                  <p>Selecciona el medio de pago</p>
                  </center>
                    
                <div id="paypal-button-container"></div>
                </div>

                <div class="col-md-6">
                
                </div>

        </div>
       
       
        <script src="../Controlador/Secciones.js" >
        </script>
    </body>
</html>
<?php
        include '../Modelos/footer.php';
      ?>