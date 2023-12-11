<?php
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$correo = $_POST['email'];
$consulta = $_POST['consulta'];

include('conexion.php');

mysqli_query($conexionDB, "INSERT INTO consultas VALUES (DEFAULT, '$nombre', '$apellido', '$correo', '$consulta')");

header("Location: ../contacto.php?ok_db");
?>