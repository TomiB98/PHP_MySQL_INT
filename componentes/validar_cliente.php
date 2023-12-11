<?php
session_start();
$email_cliente = $_POST['email'];
$password_cliente = $_POST['password'];

if($email_cliente == 'cliente@gmail.com' && $password_cliente == 'phpintermedio') {
    $_SESSION['clientes'] = $email_cliente;
    header("Location: ../clientes.php");
} else {
    header("Location: ../clientes.php?error");
}
?>