<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    
    
    
    <body>
<?php
session_start();





include 'aausuarios.php'; // Incluye el archivo con los usuarios y contraseñas

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $usuario = $_POST['usuario'];
    $contraseña = $_POST['contraseña'];

    if (isset($usuarios[$usuario]) && password_verify($contraseña, $usuarios[$usuario])) {
        $_SESSION['usuario'] = $usuario;
        header('Location: aadialogos.php'); // Redirige a la subpágina protegida
        exit();
    } else {
        echo 'Usuario o contraseña incorrectos';
    }
}
?>

<form action="aaindex.php" method="post">
    <input type="text" name="usuario" placeholder="Usuario"><br>
    <input type="password" name="contraseña" placeholder="Contraseña"><br>
    <input type="submit" value="Iniciar sesión">
</form>
    </body>
</html>
