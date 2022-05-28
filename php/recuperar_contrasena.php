
    
<?php
include 'conexion.php';

$correo = $_POST["correo"];

$verificar_correo = pg_query($conexion,"SELECT * FROM usuarios WHERE  correo = '$correo' ");
$nr = pg_num_rows($verificar_correo); 
if ($nr == 1)
{
$mostrar		= pg_fetch_array($verificar_correo); 
$enviarpass 	= $mostrar['contrasena'];

$paracorreo 		= $correo;
$titulo				= "Recuperar Contraseña";
$mensaje			= $enviarpass;
$tucorreo			= "From: cunmerx@gmail.com";

if(mail($paracorreo,$titulo,$mensaje,$tucorreo))
{
	echo '<script> alert("Contraseña Enviada");
	window.location= "../index.php"
	</script>
	'; 
}else
{
	echo '<script> alert("Error");
	window.location= "../index.php"
	</script>
	'; 
}
}
else
{
	echo '<script> alert("Este correo no existe");
	window.location= "../index.php"
	</script>
	'; 
}
/*VaidrollTeam*/
?>