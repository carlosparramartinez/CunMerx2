<?php

include 'conexion.php';

$nombre_completo=$_POST["nombre"];
$correo=$_POST["correo"];
$usuario=$_POST["usuario"];
$contrasena=$_POST["contrasena"];
$query = "INSERT INTO   usuarios (nombre,correo,usuario,contrasena) 
VALUES ('$nombre_completo','$correo','$usuario','$contrasena')";


 $verificar_correo = pg_query($conexion,"SELECT * FROM usuarios WHERE  correo = '$correo' ");

// verificar que el correo no se repita
 if(pg_num_rows($verificar_correo)>0){
     echo '
     <script>
     alert("Este correo ya existe, intenta con otro difrente" );
     window.location= "../index.php";
     
     </script> 
     ';
     exit();
    
 }
  // verificar que el nombre de usuario no se repita
  
  $verificar_usuario = pg_query($conexion,"SELECT * FROM usuarios WHERE  usuario = '$usuario' ");
  if(pg_num_rows($verificar_usuario)>0){
    echo '
    <script>
    alert("Este usuario ya existe, intenta con otro difrente" );
    window.location= "../index.php";
    
    </script> 
    ';
    exit();
   
}
$ejecutar=pg_query($conexion,$query);
if($ejecutar){
    echo'
    <script>
         alert("Usuario Registrado");
         window.location= "../index.php";


    </script>
    
    
    ';
}else{
    echo'
    <script>
    alert("Usuario No Registrado");
   


</script>
';
//pg_close($conexion);
}


?>