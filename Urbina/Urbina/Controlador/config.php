<?php
    define("KEY_TOKEN","APR.wqc-354*");
    define("MONEDA","$");
    
    session_start();
    
    $num_cart=0;
    if(isset($_SESSION['carrtito']['Nombre_Producto'])){
        $num_cart=count($_SESSION['carrtito']['Nombre_Producto']);
    }
?>