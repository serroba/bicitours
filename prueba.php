<?php $name = $_POST['name'];
$email = $_POST['email'];
$tema = $_POST['tema'];
$contenido = $_POST ['contenido'];
$formcontent="De: $name \n Desde: $email \n Tema: $tema \n Contenido: $contenido";
$recipient = "contacto@bicitours.cl";
$subject = "Formulario de contacto";
$mailheader = "Desde: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
header("Location: http://bicitours.cl/contacto2.html");
?>