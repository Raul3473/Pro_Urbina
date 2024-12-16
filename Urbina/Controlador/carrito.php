<?php
   require '../Controlador/config.php';

   
   // Obtener los productos del carrito
   if(isset($_SESSION['id_Producto'])){
     
     $id =$_POST['id_Producto'];
     $token=$_POST['token'];

     $token_temp=hash_hmac('sha1',$id,KEY_TOKEN);

     if($token==$token_temp){
        if(isset($_SESSION['carrtito']['Nombre_Producto'][$id])){
            $_SESSION['carrtito']['Nombre_Producto'][$id]+=1;
        }else{
        $_SESSION['carrtito']['Nombre_Producto'][$id]=1;
        }
        $datos['numero']=count($_SESSION['carrtito']['Nombre_Producto']);
        $datos['ok']=true;
     }else{
        $datos['ok']=false;
     }
}
else{
    $datos['ok']=false;
}

echo json_encode($datos);
?>


