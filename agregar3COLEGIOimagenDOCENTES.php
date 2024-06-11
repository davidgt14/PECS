<?php
session_start();
//echo "SI se suppone se inicio sesion=={$_SESSION['usuario']}";   
if (!isset($_SESSION['usuario'])) {
    //echo "NO se inicio sesion=={$_SESSION['usuario']}";
    header('Location: index.php'); // Redirige a la página de inicio de sesión si el usuario no ha iniciado sesión
    exit();
}


$valor = filter_input(INPUT_POST, 'valorPHP', FILTER_VALIDATE_INT);
if (!isset($_SESSION['contador'])) {
    $_SESSION['contador'] = 3;
}
//echo "DolarValorUno=== $valor";
if ($valor !== false) {
    //echo "DolarValorDos=== $valor";
    $_SESSION['contador'] = max($_SESSION['contador'], $valor); // Mantener el máximo valor
    
}
if (isset($_SESSION['contador'])) {
    //echo "valoractual=== {$_SESSION['contador']}";
    $valor=$_SESSION['contador'];  
}
//echo "ANTES DECLIC=== $valor";
 $clickedImage = filter_input(INPUT_GET, 'imagenn_clicked', FILTER_SANITIZE_STRING);
//echo "DESPUESDECLIC=== $valor";
if ($clickedImage !== null && is_string($clickedImage) && $valor==0){
      //echo "RUTA ELIMINADA== $clickedImage";
      if (file_exists($clickedImage)) {unlink($clickedImage); }
      //echo "DENTRO DE ELIMINAR=== $valor";
      //$valor=0;
      //$_SESSION['contador']=0;
}
//echo "DolarValorSEIS=== $valor";
$valor=0;
$_SESSION['contador']=0;
?>
<!DOCTYPE html>
<html>
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            display: flex;
            flex-direction: column;
            color: blue;
        }
        .panelsuperior {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(95px, 1fr));
            grid-gap: 0px;        
            width: 100%;
            height: 100px;
            overflow: auto;
            justify-content: center;
            justify-items: center; 
            align-items: center;  
            background-color: #003333;
            color: aquamarine;
            font-size:40px;
            font-weight:bold;
        }
.panelcentral {
 display: flex;
 justify-content: center;
 }
 #tabla{
 width: 100%;
 border-collapse: collapse;
 }
 
 #tabla td{
 text-align: center;
 vertical-align: middle;
 
 justify-content: center;
 justify-items: center; 
 align-items: center;
 
 }
 
 #tabla img{
 display: inline-block;
 max-width: 100%;
 max-height:100%
 }
  #tabla{
 border: 5px solid black;
 
 }
 
 
.botoncentral {
 display: inline-block;
 padding: 10px;
 background-color: white;
 border: yellow;
 cursor: pointer;
 margin: 5px;
            
 color: red;
 text-align: left;
 justify-content: center;
 align-items: center;
 width: 200px;
 height: 75px;
 }
      

        .panelinferior {
            width: 100%;
            height: 373px;
            overflow: auto;
            color: lightcoral;
            background-color: coral;
            justify-content: center;
            
            
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(95px, 1fr));
            grid-gap: 2px;
            justify-items: center;
            align-items: center;
        }
        
        
        
        
        
        
        
        #boton{
        background-color: fuchsia;    
        }        
        #botonR{
        background-color: aqua;    
        }
        
        
    </style> 
    <title>Botones con Imágenes en Panel Scroll</title>
</head>
<body>
   
<div class="panelsuperior"> SUBE TUS IMÁGENES, TUS AUDIOS O BORRALOS;
 </div> 



<div class="panelcentral"> 
<table id="tabla">    
<tr> 
    
    
<td style="background-color: blue; width: 80px; height:81px">
<a href="index.php">
    <img class="imagen" src="PECSimagen/CASA.png" width="77" height="77" alt="Desc">
    </a>
</td> 


<td style="background-color: blue; width: 160px; height:81px">
<a href="dialogos.php">
    <img class="imagen" src="PECSimagen/VOLVER A DIALOGAR.png" width="150" height="77" alt="Desc">
</a>    
</td> 


<td style="background-color: blue; width: 160px; height:81px">
   <a href="AgregarEn.php">
   <img class="imagen" src="PECSimagen/VOLVER A PANEL MULTIMEDIA.png" width="150" height="77" alt="Descrip">
   </a>
</td>


<td style="background-color: green;"> 
<img src="3COLEGIOimagenSUBPESTANA/DOCENTES.png" width="300" height="85"  
     class="imagen" alt="3COLE DOCENTES">

</td> 


<td style="background-color: green;">
<img src="PECSimagen/BORRAR.png" alt="Image" id="imagenSCRIPT" width="77" height="77">
</td>

<form method="post" action="">
        <input type="text" name="numeroPHP" id="numeroSCRIPT" readonly style="display: none;">
        <input type="hidden" name="valorPHP" id="valorSCRIPT" value="">
</form>




















<td style="background-color: green;">
    <img id="imagen" src="PECSimagen/AGREGARimagen.png" alt="Imagen" onclick="seleccionarArchivo()" width="77" height="77">
    <form id="formulario" action="agregar3COLEGIOimagenDOCENTES.php" method="post" enctype="multipart/form-data" style="display:none;">
        <input type="file" name="archivo" id="archivo" onchange="subirArchivo()">
    </form>
</td>   
<script>
        function seleccionarArchivo() {
            document.getElementById('archivo').click();
        }

        function subirArchivo() {
            document.getElementById('formulario').submit();
        }
    </script>
<?php
if(isset($_FILES['archivo'])){
    $archivo = $_FILES['archivo'];
    $nombre = $archivo['name'];
    $ruta = "3COLEGIOimagen/DOCENTES/" . $nombre;
    move_uploaded_file($archivo['tmp_name'], $ruta);
    //echo "I";
    //echo $ruta;
} else {
    //echo "";
}
?>
<td style="background-color: green;">
    <img id="imagen" src="PECSimagen/AGREGARaudio.png" alt="Imagen" onclick="seleccionarArchivoAudio()" width="77" height="77">
    <form id="formularioAudio" action="agregar3COLEGIOimagenDOCENTES.php" method="post" enctype="multipart/form-data" style="display:none;">
        <input type="file" name="archivoAudio" id="archivoAudio" onchange="subirArchivoAudio()">
    </form>
</td> 
<script>
        function seleccionarArchivoAudio() {
            document.getElementById('archivoAudio').click();
        }

        function subirArchivoAudio() {
            document.getElementById('formularioAudio').submit();
        }
</script>
<?php
if(isset($_FILES['archivoAudio'])){
    $archivo = $_FILES['archivoAudio'];
    $nombre = $archivo['name'];
    $ruta = "3COLEGIOaudio/DOCENTES/" . $nombre;
    move_uploaded_file($archivo['tmp_name'], $ruta);
    //echo "I";    //echo $ruta;   
} else { //echo "";
}
?>
</tr>
</table>   
</div><!-- ////////////INICIO MOSTRAR CARPETA 111 ALIMENTOSimagen EN PANEL INFERIOR-->
<?php 
//MATRICIAR A LA CARPETA ALIMENTO
   $ALIMENTOimagen = scandir('3COLEGIOimagen/DOCENTES');
   $RutaALIMENTOimagen=array();
   $MatrizALIMENTOimagen=array(); //echo $MatrizImagenes[$i];
   $i=0;
   foreach ($ALIMENTOimagen as $imagenALIMENTOimagen) {
      if ($imagenALIMENTOimagen != '.' && $imagenALIMENTOimagen != '..') { //echo $imagen;
         $MatrizALIMENTOimagen[$i]=$imagenALIMENTOimagen;
      $RutaALIMENTOimagen[$i]='3COLEGIOimagen/DOCENTES/'.$imagenALIMENTOimagen;
         $RutaALIMENTOaudio[$i]='3COLEGIOaudio/DOCENTES/'.$imagenALIMENTOimagen; //echo $RutaImagen[$i];
         $contenido[$i]=file_get_contents($RutaALIMENTOimagen[$i]); //echo $contenido[$i];
         $i++; //echo '<td><img src="ALIMENTOimagen/'.$imagen.' " alt="Imammmmgen"></td>';
         }
      }
      $RutaALIMENTOimagenJSON=json_encode($RutaALIMENTOimagen);
      $RutaALIMENTOaudioJSON=json_encode($RutaALIMENTOaudio);

      //$RutaALIMENTOimagen[0]='PECSimagen/11FRUTAS.png';
      //$RutaALIMENTOimagen[1]='PECSimagen/12EMOCIONES.png';
      //$RutaALIMENTOimagen[2]='PECSimagen/13ESCUELA.png';
?>
<div class="panelinferior">
<?php
//CARGAR AL PANEL LAS IMAGENES DE LA MATRIZ CARPETA ALIMENTO
foreach($RutaALIMENTOimagen as $ruta)
{//echo '<img src="'.$ruta.'" width="77" height="77" alt="ima">';
   echo '<a href="?imagenn_clicked='.$ruta.'"> <img src="'.$ruta.'" width="77" height="77" alt="ima"> </a>';
} 
?> 

</div> 
<!-- ////////////FIN MOSTRAR CARPETA 111 ALIMENTOSimagen EN PANEL INFERIOR-->

    <script>
        var contador = 0;
        document.getElementById("numeroSCRIPT").value = contador;

        document.getElementById("imagenSCRIPT").addEventListener("click", function() {
            contador++;
            document.getElementById("numeroSCRIPT").value = contador;
            document.getElementById("valorSCRIPT").value = contador;
            
            // Enviar el formulario al servidor cuando el contador sea igual a 1
            if (contador === 1) {
                document.querySelector("form").submit();
                
            }
        });
    </script>  

</body>
</html>