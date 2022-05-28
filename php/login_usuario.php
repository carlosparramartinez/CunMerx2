<?php
 include 'conexion.php';

 $usuario= $_POST['usuario'];
 $contrasena= $_POST['contrasena'];


 $validar_login= pg_query($conexion,"SELECT * FROM usuarios WHERE  usuario = '$usuario'  and contrasena = '$contrasena'");


 if(pg_num_rows($validar_login)>0){
     header("Location: ../pantallapri.php");

     exit;
 }else{
echo'
    <script>
    alert(" Usuario o Contraseña Incorrecta , Vefique de nuevo" );
    window.location= "../index.php";
    
    </script> 
    ';
    exit;
 }
  



?>