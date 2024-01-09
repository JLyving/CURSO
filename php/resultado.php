<?php
include 'head2.html';

//Recibiendo datos desede el Index.php usando el metodo POST
$nombre = $_POST['nombre'];
$edad = $_POST['edad'];
$correo = $_POST['correo'];
$contrasena = $_POST['contrasena'];

//Mostrando los datos recibidos

echo "<p> Mi nombre es: $nombre</p>";
echo "<p> Mi edad es: $edad</p>";
echo "<p> Mi correo es: $correo</p>";
echo "<p> Mi contraseña es: $contrasena</p>";
echo "<a href = 'Index.php'> Back </a>"; //boton para regresar

?>