<?php
   
   $roles_permitidos =["Adminstrador","Usuario"];

   if(array_key_exists('rol',$_SESSION)|| in_array($_SESSION['rol'],$roles_permitidos)){
     header("Location:index.php");
   }
?>