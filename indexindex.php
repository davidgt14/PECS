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
<!-- index.php -->
<!DOCTYPE html>


<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <style>
    table {
      width: 1213px;
      table-layout: fixed;
      height:358px;
    }
    
    td {
      text-align: center;
    }
    
    .imagen {
      display: inline-block;
      vertical-align: middle;
      width: 390px;
      height: 80px;
    }
    </style>
</head>
<body>


  
  
<div class="panel" id="panel-SUPERIOR" style="position: relative; overflow: auto; width: 1210px; height: 194px;">
<img src="PECSimagen/pecs.png" width="1210" height="189" alt="Descripción de la imagen"></th>
</div>

    
<div class="panel" id="panel-SUPERIOR" style="position: relative; overflow: auto; width: 1213px; height: 358px;"> 
<table>   
<tr>
    <td style="background-color: blue;"><img class="imagen" src="PECSimagen/1NECESIDADES.png" alt="necesidades"></td>
       
    <td rowspan="3" style="background-color: green;">
        
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        Usuario: <input type="text" name="usuario" value="<?php echo htmlspecialchars($usuario); ?>"><br>
        Contraseña: <input type="password" name="contrasena" value="<?php echo htmlspecialchars($contrasena); ?>"><br>
        <input type="submit" value="INGRESAR A SALLEPEC.COM">
        </form>
        
        <img class="img" src="PECSimagen/INICIA TUS DIALOGOS.png" alt="BIENVENIDOS " width="390px" height="204">
    </td>
       
    
    
    
    
    
    
    <td style="background-color: red;"><img class="imagen" src="PECSimagen/2ALIMENTOS.png" alt="alimento"></td>
  </tr>
    
  <tr>
    <td style="background-color: blue;"><img class="imagen" src="PECSimagen/3COLEGIO.png" alt="COLEGIO"></td>
    <td style="background-color: green;"><img class="imagen" src="PECSimagen/4ACTIVIDADES.png" alt="actividades"></td>
      </tr>
  
  
  <tr>
    <td style="background-color: red;"><img class="imagen" src="PECSimagen/5ROPAS.png" alt="ropa"></td>
    <td style="background-color: red;"><img class="imagen" src="PECSimagen/6HIGIENE.png" alt="higiene"></td>
  </tr>
  
  
  
  
  
  
  
  <tr>
    <td style="background-color: blue;"><img class="imagen" src="PECSimagen/7CUERPO.png" alt="cuerpo"></td>
    <td style="background-color: green;"><img class="imagen" src="PECSimagen/8ANIMALES.png" alt="animales"></td>
    <td style="background-color: red;"><img class="imagen" src="PECSimagen/9OTROS.png" alt="otros"></td>
  </tr>
  
</table>
</div>

</body>


</html>