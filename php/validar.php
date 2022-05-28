<?php
$nombre_completo=$_POST["nombre"];
$correo=$_POST["correo"];
$usuario=$_POST["usuario"];
$contrasena=$_POST["contrasena"];
// validar que los campos no este vacios
if(empty($nombre_completo)){
    echo "<p class='error'> *El Campo Nombre Esta Vacio </p";
}
if($correo=="" || strlen($correo,"@gmail.com")==false || strlen($correo,"@hotmail.com")==false || strlen($correo,"@ucundinamarca.edu.co")==false){
    array_push($campo,"Ingrese Un Correo Valido");
}
if($usuario==""){
    array_push($campo,"El Campo Usuario Esta Vacio");
}
if($contrasena==""){
    array_push($campo,"El Campo Contraseña Esta Vacio");
}
?>