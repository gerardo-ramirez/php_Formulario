
<?php
/* en html en la etiqueta form: <form action:'enviarmail.php' method= post
 onsubmit=validar()> */ 
$destino="soledad.ostroski@hotmail.com.ar";
$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$telefono = $_POST["telefono"];
$email = $_POST["email"];
$consulta = $_POST["consulta"];
$contenido= "Nombre:". $nombre . "\nApellido:" .$apellido . "\nCorreo:" . $email . "\nTeléfono:" . $telefono . "\nConsulta:". $consulta;

mail($destino,"Contacto", $contenido);
header("Location:gracias.html");

?>

