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
        
    
<?php
session_start();
//echo "SI se suppone se inicio sesion=={$_SESSION['usuario']}";
if (isset($_SESSION['usuario'])) {
    echo "sii .se inicio sesion=={$_SESSION['usuario']}";
    
    header('Location: index1.php'); // Redirige a la página de inicio de sesión si el usuario no ha iniciado sesión
    exit();
}

include 'usuariosYcontrasenas.php'; // Incluye el archivo con los usuarios y contraseñas

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $usuario = $_POST['usuario'];
    $contraseña = $_POST['contraseña'];

    if (isset($usuarios[$usuario]) && password_verify($contraseña, $usuarios[$usuario])) {
        $_SESSION['usuario'] = $usuario;
        header('Location: index1.php'); // Redirige a la subpágina protegida
        exit();
    } else {
        echo 'Usuario o contraseña incorrectos';
    }
}
?>

 
        //
            <a href="#" onclick="mostrarFormulario()">Iniciar sesión</a>

    <!-- Formulario oculto de inicio de sesión -->
    <div id="formulario" style="display:none;">
             <form action="index.php" method="post">
            <label for="usuario">Usuario:</label>
       <input type="text" name="usuario" placeholder="Usuario"><br>
            <label for="contrasena">Contraseña:</label>
       <input type="password" name="contraseña" placeholder="Contraseña"><br>
       <input type="submit" value="Ini sesi">
            </form>
    </div>

    <script>
        function mostrarFormulario() {
            document.getElementById("formulario").style.display = "block";
        }
    </script>
        //
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
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