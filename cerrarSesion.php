<?php
session_start(); // Inicia la sesión

// Elimina todas las variables de sesión
$_SESSION = array();

// Si se desea eliminar la cookie de sesión, también se debe hacer
if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 42000,
        $params["path"], $params["domain"],
        $params["secure"], $params["httponly"]
    );
}

// Finalmente, destruye la sesión
session_destroy();

// Redirecciona a la página de inicio o a donde desees
header("Location: index.php");
exit();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        
        
        
        
        
        

    </body>
</html>
