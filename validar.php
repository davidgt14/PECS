<?php
// Verificar si se ha enviado el formulario
$method = $_SERVER['REQUEST_METHOD'];

// Inicializar variables de usuario y contraseña
$usuario = "";
$contrasena = "";
$mensajeError = "";

if ($method === 'POST') {
    // Obtener y filtrar el usuario y la contraseña
    $usuario = $_POST['usuario'];
    $contrasena = $_POST['contrasena'];

    // Datos de usuario y contraseña correctos
    $usuarioCorrecto = "u";
    $contrasenaCorrecta = "c";

    // Verificar si el usuario y la contraseña son correctos
    if ($usuario === $usuarioCorrecto && $contrasena === $contrasenaCorrecta) {
        // Redirigir a la página principal
        header("Location: index1.php");
        exit();
    } else {
        $mensajeError = "USUARIO Y/O CONTRASEÑA INCORRECTOS";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Formulario de Usuario y Contraseña</title>
</head>
<body>
    <h2><?php echo $mensajeError; ?></h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        Usuario: <input type="text" name="usuario" value="<?php echo htmlspecialchars($usuario); ?>"><br><br>
        Contraseña: <input type="password" name="contrasena" value="<?php echo htmlspecialchars($contrasena); ?>"><br><br>
        <input type="submit" value="INGRESAR A SALLEPEC.COM">
    </form>
</body>
</html>