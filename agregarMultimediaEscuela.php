 
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
            color: red;
            background-color: red;
            justify-content: center;
            justify-items: center; 
            align-items: center;
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
   
<div class="panelsuperior">   </div> 



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
<img src="PECSimagen/13ESCUELA.png" width="300" height="77"  
     class="imagen" alt="Desc">

</td> 


<td style="background-color: green;">
<img class="imagen" src="PECSimagen/BORRAR.png" 
     width="77" height="77" alt="Desc">
</td> 




<td style="background-color: green;">
    <img id="imagen" src="PECSimagen/AGREGARimagen.png" alt="Imagen" onclick="seleccionarArchivo()">
    <form id="formulario" action="agregarMultimediaEscuela.php" method="post" enctype="multipart/form-data" style="display:none;">
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
    $ruta = "ESCUELAimagen/" . $nombre;
    move_uploaded_file($archivo['tmp_name'], $ruta);
    //echo "I";
    //echo $ruta;
    
    
    
    
} else {
    //echo "";
}
?>





<td style="background-color: green;">
<img onclick="class="imagen" src="PECSimagen/AGREGARaudio.png" width="77" height="77" 
       alt="Desc">
</td> 
</tr>
</table>   
</div>

<div class="panelinferior">
<img src="PECSimagen/1Yo.png"  width="77" height="77" alt="">;
<img src="PECSimagen/7Quiero.png"  width="77" height="77" alt="">
<img src="PECSimagen/1Yo.png"  width="77" height="77" alt="">
</div> 

<?php
// Resto del código PHP

function SubirAlimentoImagen($archivo, $carpetaDestino) {
    $nombreArchivo = $archivo['name'];
    $archivoTmp = $archivo['tmp_name'];
    $rutaDestino = $carpetaDestino . '/' . $nombreArchivo;

    // Mover el archivo a la carpeta de destino
    if (move_uploaded_file($archivoTmp, $rutaDestino)) {
        return "La imagen se ha subido correctamente.";
    } else {
        return "Ha ocurrido un error al subir la imagen.";
    }
}

// Resto del código PHP

?>

</body>
</html>
 