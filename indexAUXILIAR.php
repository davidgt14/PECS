<?php
session_start();
if (isset($_SESSION['usuario'])) {
    header('Location: index1.php');
    exit();
}
$usuarios = array(
    'u' => password_hash('c', PASSWORD_DEFAULT),
    'uu' => password_hash('cc', PASSWORD_DEFAULT),
);
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $usuario = $_POST['usuario'];
    $contraseña = $_POST['contraseña'];
    if (isset($usuarios[$usuario]) && password_verify($contraseña, $usuarios[$usuario])) {
        $_SESSION['usuario'] = $usuario;
        header('Location: index1.php');
        exit();
    }
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <style>
        .panel1 {
            width: 1213px;
            height: 170px;
        }

        .imagen1 {
            vertical-align: middle;
            width: 100%;
            height: 100%;
        }

        .panel2 {
            width: 1213px;
            height: 10%;
        }

        .tabla1 {
            width: 100%;
            height: 40%;
            border: 0px solid black;
            padding: 0px;
            display: block;
            background-color: blue;
            margin: 0;
            color: red;
            font-size: 0px;
            vertical-align: middle;
            text-align: center;
            justify-content: center;
            align-items: center;
        }

        
.td1{
vertical-align: central ;
text-align: center;
background-color: green;
width: 33.33%;
height: 90px;
position: relative;
}
.imagen3 {
vertical-align: bottom ;
width: 405px;
height: 200px;
display: block;
margin-top: auto; /* Empujar la imagen hacia abajo */
}
.td2{
vertical-align: bottom ;
text-align: center;
background-color: green;
width: 33.33%;
height: 90px;
position: relative;
}

#formulario {
display: none; /* Ocultar el formulario inicialmente */
position: absolute;
background-color: white;
padding: 10px;
border: 1px solid black;
top: 40px; /* Ajusta la posición del formulario */
left: 50%;
transform: translateX(-50%);
}


.tabla2 {
 width: 100%;
            height: 60%;
            border: 0px solid black;
            padding: 2px;
            display: block;
            background-color: blue;
            margin: 0;
            color: red;
            font-size: 0px;
            vertical-align: middle;
            text-align: center;
            justify-content: center;
            align-items: center;
        }
.imagen2{
 width: 400px;
 height: 95%;
 }

       
    </style>
    <script>
        function mostrarFormulario() {
            document.getElementById("formulario").style.display = "block";
        }
    </script>
</head>

<body>
    <div class="panel1" id="panel-SUPERIOR" style="position: relative;">
        <img class="imagen1" src="PECSimagen/pecs.png" alt="Descripción de la imagen">
    </div>

    <div class="panel2" id="panel-INFERIOR">
<table class="tabla1">
   <tr>
      <td class="td1" style="background-color: blue;">
         <img class="imagen2" src="PECSimagen/1NECESIDADES.png" alt="necesidades">
      </td>
            <td class="td2" rowspan="3">
                /////
               //
            <a href="#" onclick="mostrarFormulario()">LOGIN</a>

    <!-- Formulario oculto de inicio de sesión -->
    <div id="formulario" style="display:none;">
             <form action="index.php" method="post">
            <label for="usuario">Usuario:</label>
       <input type="text" name="usuario" placeholder="Usuario"><br>
            <label for="contrasena">Contraseña:</label>
       <input type="password" name="contraseña" placeholder="Contraseña"><br>
       <input type="submit" value="INICIAR SESION">
            </form>
    </div>

    <script>
        function mostrarFormulario() {
            document.getElementById("formulario").style.display = "block";
        }
    </script>
        //
                ////////////
               <img style="vertical-align: bottom; width: 100%; height: 210px"; 
                    class="imagen3" src="PECSimagen/INICIA TUS DIALOGOS.png" alt="BIENVENIDOS">
            </td>
    <script>
        function mostrarFormulario() {
            document.getElementById("formulario").style.display = "block";
        }
    </script>
      
      <td class="td1" style="background-color: red;">
         <img class="imagen2" src="PECSimagen/2ALIMENTOS.png" alt="alimento">
      </td>
   </tr>
            <tr>
                <td class="td1" style="background-color: blue;">
                    <img class="imagen2" src="PECSimagen/3COLEGIO.png" alt="COLEGIO">
                </td>
                <td class="td1" style="background-color: green;">
                    <img class="imagen2" src="PECSimagen/4ACTIVIDADES.png" alt="actividades">
                </td>
            </tr>
            <tr>
                <td class="td1" style="background-color: red;">
                    <img class="imagen2" src="PECSimagen/5ROPAS.png" alt="ropa">
                </td>
                <td class="td1" style="background-color: red;">
                    <img class="imagen2" src="PECSimagen/6HIGIENE.png" alt="higiene">
                </td>
            </tr>
        </table>
        <table class="tabla2">
            <tr>
                <td class="td1" style="background-color: blue;">
                    <img class="imagen2" src="PECSimagen/7CUERPO.png" alt="cuerpo">
                </td>
                <td class="td1" style="background-color: green;">
                    <img class="imagen2" src="PECSimagen/8ANIMALES.png" alt="animales">
                </td>
                <td class="td1" style="background-color: red;">
                    <img class="imagen2" src="PECSimagen/9OTROS.png" alt="otros">
                </td>
            </tr>
        </table>
    </div>
</body>

</html>