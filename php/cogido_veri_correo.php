<?php
// Varios destinatarios
$para  = 'aidan@example.com' . ', '; // atención a la coma
$para .= 'wez@example.com';

// título
$título = 'Codigo de Verificacion ';

// mensaje
$mensaje = '
<html>
<head>
  <title>Codigo de Verificacion</title>
</head>
<body>
  <p>Codigo de verificacion es: </p>
  <h2>2000</h2>
</body>
</html>
';

// Para enviar un correo HTML, debe establecerse la cabecera Content-type
$cabeceras  = 'MIME-Version: 1.0' . "\r\n";
$cabeceras .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

// Cabeceras adicionales
$cabeceras .= 'To: Mary <mary@example.com>, Kelly <kelly@example.com>' . "\r\n";
$cabeceras .= 'From: Recordatorio <cumples@example.com>' . "\r\n";
$cabeceras .= 'Cc: birthdayarchive@example.com' . "\r\n";
$cabeceras .= 'Bcc: birthdaycheck@example.com' . "\r\n";

// Enviarlo
mail($para, $título, $mensaje, $cabeceras);
?>