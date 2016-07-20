<?php
//Variables
@$nombre = addslashes($_POST["nombre"]);
@$email = addslashes($_POST["email"]);
@$mensaje = addslashes($_POST["mensaje"]);

//Mensaje
@$mensaje=
"Nombre: $nombre\n\n
E-mail: $email \n\n
Mensaje: $mensaje\n\n
Mensaje enviado desde la sección Contáctanos de la Página Web Casa Calma";

//Cabecera
$cabeceras = "Responder a : $email";
$asunto = utf8_decode("Mensaje desde la página Web");
$email_to = "jromero@brandemma.com";
$contenido = utf8_decode("$mensaje");
//Enviamos y resultados del mensaje
if (@mail($email_to, $asunto ,$contenido ,$headers )) {

//Confirmación mensaje Ok
die("Su mensaje se envió correctamente, en la brevedad nos pondremos en contacto con usted. Gracias.");
}else{
//Error en el envió
die("Error: Su mensaje no pudo ser enviado, intente nuevamente");
}
?>