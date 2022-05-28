<?php

include 'conexion.php';
$idproducto= rand(0, 999999);
$nombre_producto=$_POST["nombrepro"];
$cantidad=$_POST["cantidadu"];
$precio=$_POST["precio"];
$descripccion=$_POST["descrip"];
$query = "INSERT INTO   productos (id_producto,nombre_pro,cantidad_pro,valor_pro,descrip_pro) 
VALUES ('$idproducto','$nombre_producto','$cantidad','$precio','$descripusuario')";

$ejecutar=pg_query($conexion,$query);
if($ejecutar){
    echo'
    <script>
         alert("PRODUCTO Registrado");
         window.location= "../agrepro.php";


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