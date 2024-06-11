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
    <style>
panel0{
width: 100%; 
display:flex;
justify-content:center;
align-items:center;
flex-direction:column;
height:100vh;
border:0px;
}
.panel1 {
width: 100%;
height: 182px;
display:flex;
justify-content:center;
align-items:center;
margin:0;
padding:0px;
}
.panel2 {
width: 100%;
height:289px;
display:flex;
justify-content:center;
align-items:center;
margin:0;
padding:0px;
}
.panel3{
width: 100%;
height:80px;
display:flex;
justify-content:center;
align-items:center;
margin:0;
padding:0px;
}
       


.tabla1{
width: 100%;
height: 188px;
}
.tabla2 {
width: 100%;
height: 120px;
            border: 0px solid black;
            padding: 0px;
            background-color: blue;
            color: red;
            vertical-align: middle;
            text-align: center;
            justify-content: center;
            align-items: center;
}
.tabla3 {
width: 100%;
height: 40px;
            border: 0px solid black;
            padding: 0px;
            background-color: #66ffff;
            color: black;
            vertical-align: middle;
            text-align: center;
            justify-content: center;
            align-items: center;
        }       
.td1{
text-align: center;
padding: 0px;
margin-bottom:0px;
height: 100px;
}
.td2{
text-align: center;
background-color: green;
height: 80px;
}
.td3{
text-align: center;
background-color: red;
height: 80px;

justify-content: center;
align-items: center;
}
.td4{
background-color: green;
justify-content: center;
align-items: center;

text-align: center;
vertical-align: bottom;
position:relative;
}



.imagen1{
width: 1210px;
height: 188px;
margin-bottom: 0px;
}
.imagen2{
 width: 390px;
 height: 84px;
 }
.imagen3{
width: 390px;
height: 86px;
}
.imagen4{
width: 390px;
height: 210px;

}
.LOGIN{
position: absolute;
top:0;
left:50%;
transform: translateX(-50%);
margin-top:5px;
font-size: 5px;

justify-content: center;    
vertical-align: top;    
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
#loginLink{
color:white;
font-size:20px;
text-decoration: none;
} 
    </style>

</head>

<body>
<div class="panel0" id="PANELSUPREMO">
    
<div class="panel1" id="PANELSUPERIOR" style="position: relative;">
   <table  class="tabla1">
      <tr>
         <td  class="td1">
           <img class="imagen1" src="PECSimagen/pecs.png" alt="Descripción de la imagen">
         </td>
      </tr>
   </table>
</div>

    
    
    
    
    
    
    
    
    
<div class="panel2" id="PANELCENTRAL">
<table class="tabla2">
   <tr>
      <td class="td2" style="background-color: orange;">
         <img class="imagen2" src="PECSimagen/1NECESIDADES.png" alt="necesidades">
      </td>
            
      
      
      <td style="background-color: orange;" class="td4" rowspan="3">   
            <a class="LOGIN" id="loginLink" href="#" onclick="mostrarFormulario()">LOGIN</a>
    <!-- Formulario oculto de inicio de sesión -->
    <div id="formulario">
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
               <img class="imagen4" src="PECSimagen/INICIA TUS DIALOGOS.png" alt="BIENVENIDOS">
            </td>
            
            
            
    <script>
        function mostrarFormulario() {
            document.getElementById("formulario").style.display = "block";
        }
    </script>
      
      <td class="td2" style="background-color: orange;">
         <img class="imagen2" src="PECSimagen/2ALIMENTOS.png" alt="alimento">
      </td>
   </tr>
            <tr>
                <td class="td2" style="background-color: orange;">
                    <img class="imagen2" src="PECSimagen/3COLEGIO.png" alt="COLEGIO">
                </td>
                <td class="td2" style="background-color: orange;">
                    <img class="imagen2" src="PECSimagen/4ACTIVIDADES.png" alt="actividades">
                </td>
            </tr>
            <tr>
                <td class="td2" style="background-color: orange;">
                    <img class="imagen2" src="PECSimagen/5ROPAS.png" alt="ropa">
                </td>
                <td class="td2" style="background-color: orange;">
                    <img class="imagen2" src="PECSimagen/6HIGIENE.png" alt="higiene">
                </td>
            </tr>
        </table>
        
    </div>
    
    
    
    
    
    
    
    
    
    
    
    
     <div class="panel3" id="PANELINFERIOR">
     <table class="tabla3">
            <tr>
                <td class="td3" style="background-color: turquoise;">
                    <img class="imagen3" src="PECSimagen/7CUERPO.png" alt="cuerpo">
                </td>
                <td class="td3" style="background-color: turquoise;">
                    <img class="imagen3" src="PECSimagen/8ANIMALES.png" alt="animales">
                </td>
                <td class="td3" style="background-color: turquoise;">
                    <img class="imagen3" src="PECSimagen/9OTROS.png" alt="otros">
                </td>
            </tr>
        </table>
     </div>
    
    
    
</div>    
</body>
</html>