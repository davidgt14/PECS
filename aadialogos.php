<?php
session_start();
echo "SI se suppone se inicio sesion=={$_SESSION['usuario']}";
    
if (!isset($_SESSION['usuario'])) {
    echo "NO se inicio sesion=={$_SESSION['usuario']}";
    
    header('Location: aaindex.php'); // Redirige a la página de inicio de sesión si el usuario no ha iniciado sesión
    exit();
}
?>
<!-- index.ph -->
    <style>
.panel1 {
border: 2px solid black;
padding: 0px;
margin-bottom: 0px;
display: flex;
justify-content: center;
flex-wrap: wrap;
overflow-x:hidden;
justify-content:center;
background-color:#ff00ff;
}
.panel2 {
border: 2px solid black;
padding: 0px;
margin-bottom: 0px;
display: flex;
justify-content: center; 
flex-wrap: wrap;

justify-content:center;
background-color:cyan;
}
.panel3 {
border: 2px solid black;
padding: 0px;
margin-bottom: 0px;
display: flex;
justify-content: center;
flex-wrap: wrap;
overflow-x:hidden;
justify-content:center;
background-color:orangered;
}      
.panel4 {
border: 2px solid black;
padding: 0px;
margin-bottom: 0px;
display: flex;
justify-content: center;
flex-wrap: wrap;
overflow-x:hidden;
justify-content:center;
background-color:#ff00ff;
}
.panel5 {
border: 2px solid black;
padding: 0px;
display: flex;
justify-content:center;
background-color:blue;

vertical-align: middle; 
text-align: center;
margin-bottom: 0px;
color: red;
font-size:15px;

justify-content: center;
align-items: center;
padding: 2px;
margin-bottom: 0px;
}
.panel5 img{
    margin-right: 200px;
    margin-left: 200px;
}

    </style>
</head>
<body>
    <div class="panel1" id="panel-SUPERIOR" style="position: relative; overflow-y: auto; width: 1213px; height: 74px;">
    </div>

   <?php 
////////////
//MATRICIANDO LAS IMAGENES DE CARPETAS ((NO SUB PESTANAS))
//////////// 
////////////INICIO MATRICIAR 111NECESIDADESimagen/ACCION
echo "<tr>";
$NECESIDADESimagenACCION1 = scandir('1NECESIDADESimagen/ACCION');
$Ruta1NECESIDADESimagenACCION=array();
$Matriz1NECESIDADESimagenACCION=array();
$i=0;
foreach ($NECESIDADESimagenACCION1 as $imagen1NECESIDADESimagen) {
   if ($imagen1NECESIDADESimagen != '.' && $imagen1NECESIDADESimagen != '..') {
      $Matriz1NECESIDADESimagenACCION[$i]=$imagen1NECESIDADESimagen;
      $Ruta1NECESIDADESimagenACCION[$i]='1NECESIDADESimagen/ACCION/'.$imagen1NECESIDADESimagen;
      $Ruta1NECESIDADESaudioACCION[$i]='1NECESIDADESaudio/ACCION/'.$imagen1NECESIDADESimagen;
      //echo $RutaImagen[$i]; //echo $contenido[$i]; //echo $imagen;
      $i++;
   }
}
$RUTA1NECESIDADESimagenACCIONJSON=json_encode($Ruta1NECESIDADESimagenACCION);
$RUTA1NECESIDADESaudioACCIONJSON=json_encode($Ruta1NECESIDADESaudioACCION);
////////////FIN MATRICIAR 111NECESIDADESimagen/ACCION

////////////INICIO MATRICIAR 111NECESIDADESimagen/EMOCION
echo "<tr>";
$NECESIDADESimagenEMOCION1 = scandir('1NECESIDADESimagen/EMOCION');
$Ruta1NECESIDADESimagenEMOCION=array();
$Matriz1NECESIDADESimagenEMOCION=array();
$i=0;
foreach ($NECESIDADESimagenEMOCION1 as $imagen1NECESIDADESimagen) {
   if ($imagen1NECESIDADESimagen != '.' && $imagen1NECESIDADESimagen != '..') {
      $Matriz1NECESIDADESimagenEMOCION[$i]=$imagen1NECESIDADESimagen;
      $Ruta1NECESIDADESimagenEMOCION[$i]='1NECESIDADESimagen/EMOCION/'.$imagen1NECESIDADESimagen;
      $Ruta1NECESIDADESaudioEMOCION[$i]='1NECESIDADESaudio/EMOCION/'.$imagen1NECESIDADESimagen;
      //echo $RutaImagen[$i]; //echo $contenido[$i]; //echo $imagen;
      $i++;
   }
}
$RUTA1NECESIDADESimagenEMOCIONJSON=json_encode($Ruta1NECESIDADESimagenEMOCION);
$RUTA1NECESIDADESaudioEMOCIONJSON=json_encode($Ruta1NECESIDADESaudioEMOCION);
////////////FIN MATRICIAR 111NECESIDADESimage/EMOCION

////////////INICIO MATRICIAR 111NECESIDADESimagen/GESTOS
echo "<tr>";
$NECESIDADESimagenGESTOS1 = scandir('1NECESIDADESimagen/GESTOS');
$Ruta1NECESIDADESimagenGESTOS=array();
$Matriz1NECESIDADESimagenGESTOS=array();
$i=0;
foreach ($NECESIDADESimagenGESTOS1 as $imagen1NECESIDADESimagen) {
   if ($imagen1NECESIDADESimagen != '.' && $imagen1NECESIDADESimagen != '..') {
      $Matriz1NECESIDADESimagenGESTOS[$i]=$imagen1NECESIDADESimagen;
      $Ruta1NECESIDADESimagenGESTOS[$i]='1NECESIDADESimagen/GESTOS/'.$imagen1NECESIDADESimagen;
      $Ruta1NECESIDADESaudioGESTOS[$i]='1NECESIDADESaudio/GESTOS/'.$imagen1NECESIDADESimagen;
      //echo $RutaImagen[$i]; //echo $contenido[$i]; //echo $imagen;
      $i++;
   }
}
$RUTA1NECESIDADESimagenGESTOSJSON=json_encode($Ruta1NECESIDADESimagenGESTOS);
$RUTA1NECESIDADESaudioGESTOSJSON=json_encode($Ruta1NECESIDADESaudioGESTOS);
////////////FIN MATRICIAR 111NECESIDADESimagen/GESTOS





////////////INICIO MATRICIAR 222ALIMENTOSimagen/BEBIDAS
echo "<tr>";
$ALIMENTOSimagenBEBIDAS2 = scandir('2ALIMENTOSimagen/BEBIDAS');
$Ruta2ALIMENTOSimagenBEBIDAS=array();
$Matriz2ALIMENTOSimagenBEBIDAS=array();
$i=0;
foreach ($ALIMENTOSimagenBEBIDAS2 as $imagen1NECESIDADESimagen) {
   if ($imagen1NECESIDADESimagen != '.' && $imagen1NECESIDADESimagen != '..') {
      $Matriz2ALIMENTOSimagenBEBIDAS[$i]=$imagen1NECESIDADESimagen;
      $Ruta2ALIMENTOSimagenBEBIDAS[$i]='2ALIMENTOSimagen/BEBIDAS/'.$imagen1NECESIDADESimagen;
      $Ruta2ALIMENTOSaudioBEBIDAS[$i]='2ALIMENTOSaudio/BEBIDAS/'.$imagen1NECESIDADESimagen;
      //echo $RutaImagen[$i]; //echo $contenido[$i]; //echo $imagen;
      $i++;
   }
}
$RUTA2ALIMENTOSimagenBEBIDASJSON=json_encode($Ruta2ALIMENTOSimagenBEBIDAS);
$RUTA2ALIMENTOSaudioBEBIDASJSON=json_encode($Ruta2ALIMENTOSaudioBEBIDAS);
////////////FIN MATRICIAR 222ALIMENTOSimagen/BEBIDAS

////////////INICIO MATRICIAR 222ALIMENTOSimagen/CARNES
echo "<tr>";
$ALIMENTOSimagenCARNES2 = scandir('2ALIMENTOSimagen/CARNES');
$Ruta2ALIMENTOSimagenCARNES=array();
$Matriz2ALIMENTOSimagenCARNES=array();
$i=0;
foreach ($ALIMENTOSimagenCARNES2 as $imagen1NECESIDADESimagen) {
   if ($imagen1NECESIDADESimagen != '.' && $imagen1NECESIDADESimagen != '..') {
      $Matriz2ALIMENTOSimagenCARNES[$i]=$imagen1NECESIDADESimagen;
      $Ruta2ALIMENTOSimagenCARNES[$i]='2ALIMENTOSimagen/CARNES/'.$imagen1NECESIDADESimagen;
      $Ruta2ALIMENTOSaudioCARNES[$i]='2ALIMENTOSaudio/CARNES/'.$imagen1NECESIDADESimagen;
      //echo $RutaImagen[$i]; //echo $contenido[$i]; //echo $imagen;
      $i++;
   }
}
$RUTA2ALIMENTOSimagenCARNESJSON=json_encode($Ruta2ALIMENTOSimagenCARNES);
$RUTA2ALIMENTOSaudioCARNESJSON=json_encode($Ruta2ALIMENTOSaudioCARNES);
////////////FIN MATRICIAR 222ALIMENTOSimagen/CARNES

////////////INICIO MATRICIAR 222ALIMENTOSimagen/CEREALES
echo "<tr>";
$ALIMENTOSimagenCEREALES2 = scandir('2ALIMENTOSimagen/CEREALES');
$Ruta2ALIMENTOSimagenCEREALES=array();
$Matriz2ALIMENTOSimagenCEREALES=array();
$i=0;
foreach ($ALIMENTOSimagenCEREALES2 as $imagen1NECESIDADESimagen) {
   if ($imagen1NECESIDADESimagen != '.' && $imagen1NECESIDADESimagen != '..') {
      $Matriz2ALIMENTOSimagenCEREALES[$i]=$imagen1NECESIDADESimagen;
      $Ruta2ALIMENTOSimagenCEREALES[$i]='2ALIMENTOSimagen/CEREALES/'.$imagen1NECESIDADESimagen;
      $Ruta2ALIMENTOSaudioCEREALES[$i]='2ALIMENTOSaudio/CEREALES/'.$imagen1NECESIDADESimagen;
      //echo $RutaImagen[$i]; //echo $contenido[$i]; //echo $imagen;
      $i++;
   }
}
$RUTA2ALIMENTOSimagenCEREALESJSON=json_encode($Ruta2ALIMENTOSimagenCEREALES);
$RUTA2ALIMENTOSaudioCEREALESJSON=json_encode($Ruta2ALIMENTOSaudioCEREALES);
////////////FIN MATRICIAR 222ALIMENTOSimagen/CEREALES

////////////INICIO MATRICIAR 222ALIMENTOSimagen/FRUTAS
echo "<tr>";
$ALIMENTOSimagenFRUTAS2 = scandir('2ALIMENTOSimagen/FRUTAS');
$Ruta2ALIMENTOSimagenFRUTAS=array();
$Matriz2ALIMENTOSimagenFRUTAS=array();
$i=0;
foreach ($ALIMENTOSimagenFRUTAS2 as $imagen1NECESIDADESimagen) {
   if ($imagen1NECESIDADESimagen != '.' && $imagen1NECESIDADESimagen != '..') {
      $Matriz2ALIMENTOSimagenFRUTAS[$i]=$imagen1NECESIDADESimagen;
      $Ruta2ALIMENTOSimagenFRUTAS[$i]='2ALIMENTOSimagen/FRUTAS/'.$imagen1NECESIDADESimagen;
      $Ruta2ALIMENTOSaudioFRUTAS[$i]='2ALIMENTOSaudio/FRUTAS/'.$imagen1NECESIDADESimagen;
      //echo $RutaImagen[$i]; //echo $contenido[$i]; //echo $imagen;
      $i++;
   }
}
$RUTA2ALIMENTOSimagenFRUTASJSON=json_encode($Ruta2ALIMENTOSimagenFRUTAS);
$RUTA2ALIMENTOSaudioFRUTASJSON=json_encode($Ruta2ALIMENTOSaudioFRUTAS);
////////////FIN MATRICIAR 222ALIMENTOSimagen/FRUTAS

////////////INICIO MATRICIAR 222ALIMENTOSimagen/VERDURAS
echo "<tr>";
$ALIMENTOSimagenVERDURAS2 = scandir('2ALIMENTOSimagen/VERDURAS');
$Ruta2ALIMENTOSimagenVERDURAS=array();
$Matriz2ALIMENTOSimagenVERDURAS=array();
$i=0;
foreach ($ALIMENTOSimagenVERDURAS2 as $imagen1NECESIDADESimagen) {
   if ($imagen1NECESIDADESimagen != '.' && $imagen1NECESIDADESimagen != '..') {
      $Matriz2ALIMENTOSimagenVERDURAS[$i]=$imagen1NECESIDADESimagen;
      $Ruta2ALIMENTOSimagenVERDURAS[$i]='2ALIMENTOSimagen/VERDURAS/'.$imagen1NECESIDADESimagen;
      $Ruta2ALIMENTOSaudioVERDURAS[$i]='2ALIMENTOSaudio/VERDURAS/'.$imagen1NECESIDADESimagen;
      //echo $RutaImagen[$i]; //echo $contenido[$i]; //echo $imagen;
      $i++;
   }
}
$RUTA2ALIMENTOSimagenVERDURASJSON=json_encode($Ruta2ALIMENTOSimagenVERDURAS);
$RUTA2ALIMENTOSaudioVERDURASJSON=json_encode($Ruta2ALIMENTOSaudioVERDURAS);
////////////FIN MATRICIAR 222ALIMENTOSimagen/VERDURAS





////////////INICIO MATRICIAR 333COLEGIOSimagen/CURSOS
echo "<tr>";
$COLEGIOimagenCURSOS3 = scandir('3COLEGIOimagen/CURSOS');
$Ruta3COLEGIOimagenCURSOS=array();
$Matriz3COLEGIOimagenCURSOS=array();
$i=0;
foreach ($COLEGIOimagenCURSOS3 as $imagen1NECESIDADESimagen) {
   if ($imagen1NECESIDADESimagen != '.' && $imagen1NECESIDADESimagen != '..') {
      $Matriz3COLEGIOimagenCURSOS[$i]=$imagen1NECESIDADESimagen;
      $Ruta3COLEGIOimagenCURSOS[$i]='3COLEGIOimagen/CURSOS/'.$imagen1NECESIDADESimagen;
      $Ruta3COLEGIOaudioCURSOS[$i]='3COLEGIOaudio/CURSOS/'.$imagen1NECESIDADESimagen;
      //echo $RutaImagen[$i]; //echo $contenido[$i]; //echo $imagen;
      $i++;
   }
}
$RUTA3COLEGIOimagenCURSOSJSON=json_encode($Ruta3COLEGIOimagenCURSOS);
$RUTA3COLEGIOaudioCURSOSJSON=json_encode($Ruta3COLEGIOaudioCURSOS);
////////////FIN MATRICIAR 333ESCUELAimagen/COLEGIO

////////////INICIO MATRICIAR 333COLEGIOimagen/DOCENTES
echo "<tr>";
$COLEGIOimagenDOCENTES3 = scandir('3COLEGIOimagen/DOCENTES');
$Ruta3COLEGIOimagenDOCENTES=array();
$Matriz3COLEGIOimagenDOCENTES=array();
$i=0;
foreach ($COLEGIOimagenDOCENTES3 as $imagen1NECESIDADESimagen) {
   if ($imagen1NECESIDADESimagen != '.' && $imagen1NECESIDADESimagen != '..') {
      $Matriz3COLEGIOimagenDOCENTES[$i]=$imagen1NECESIDADESimagen;
      $Ruta3COLEGIOimagenDOCENTES[$i]='3COLEGIOimagen/DOCENTES/'.$imagen1NECESIDADESimagen;
      $Ruta3COLEGIOaudioDOCENTES[$i]='3COLEGIOaudio/DOCENTES/'.$imagen1NECESIDADESimagen;
      //echo $RutaImagen[$i]; //echo $contenido[$i]; //echo $imagen;
      $i++;
   }
}
$RUTA3COLEGIOimagenDOCENTESJSON=json_encode($Ruta3COLEGIOimagenDOCENTES);
$RUTA3COLEGIOaudioDOCENTESJSON=json_encode($Ruta3COLEGIOaudioDOCENTES);
////////////FIN MATRICIAR 333COLEGIOimagen/DOCENTES

////////////INICIO MATRICIAR 333COLEGIOimagen/LECTURA
echo "<tr>";
$COLEGIOimagenLECTURA3 = scandir('3COLEGIOimagen/LECTURA');
$Ruta3COLEGIOimagenLECTURA=array();
$Matriz3COLEGIOimagenLECTURA=array();
$i=0;
foreach ($COLEGIOimagenLECTURA3 as $imagen1NECESIDADESimagen) {
   if ($imagen1NECESIDADESimagen != '.' && $imagen1NECESIDADESimagen != '..') {
      $Matriz3COLEGIOimagenLECTURA[$i]=$imagen1NECESIDADESimagen;
      $Ruta3COLEGIOimagenLECTURA[$i]='3COLEGIOimagen/LECTURA/'.$imagen1NECESIDADESimagen;
      $Ruta3COLEGIOaudioLECTURA[$i]='3COLEGIOaudio/LECTURA/'.$imagen1NECESIDADESimagen;
      //echo $RutaImagen[$i]; //echo $contenido[$i]; //echo $imagen;
      $i++;
   }
}
$RUTA3COLEGIOimagenLECTURAJSON=json_encode($Ruta3COLEGIOimagenLECTURA);
$RUTA3COLEGIOaudioLECTURAJSON=json_encode($Ruta3COLEGIOaudioLECTURA);
////////////FIN MATRICIAR 333COLEGIOimagen/LECTURA

////////////INICIO MATRICIAR 333COLEGIOimagen/UTILES
echo "<tr>";
$COLEGIOimagenUTILES3 = scandir('3COLEGIOimagen/UTILES');
$Ruta3COLEGIOimagenUTILES=array();
$Matriz3COLEGIOimagenUTILES=array();
$i=0;
foreach ($COLEGIOimagenUTILES3 as $imagen1NECESIDADESimagen) {
   if ($imagen1NECESIDADESimagen != '.' && $imagen1NECESIDADESimagen != '..') {
      $Matriz3COLEGIOimagenUTILES[$i]=$imagen1NECESIDADESimagen;
      $Ruta3COLEGIOimagenUTILES[$i]='3COLEGIOimagen/UTILES/'.$imagen1NECESIDADESimagen;
      $Ruta3COLEGIOaudioUTILES[$i]='3COLEGIOaudio/UTILES/'.$imagen1NECESIDADESimagen;
      //echo $RutaImagen[$i]; //echo $contenido[$i]; //echo $imagen;
      $i++;
   }
}
$RUTA3COLEGIOimagenUTILESJSON=json_encode($Ruta3COLEGIOimagenUTILES);
$RUTA3COLEGIOaudioUTILESJSON=json_encode($Ruta3COLEGIOaudioUTILES);
////////////FIN MATRICIAR 333COLEGIOimagen/UTILES






////////////INICIO MATRICIAR 444ACTIVIDADESimagen/DIVERSION
echo "<tr>";
$ACTIVIDADESimagenDIVERSION4 = scandir('4ACTIVIDADESimagen/DIVERSION');
$Ruta4ACTIVIDADESimagenDIVERSION=array();
$Matriz4ACTIVIDADESimagenDIVERSION=array();
$i=0;
foreach ($ACTIVIDADESimagenDIVERSION4 as $imagen1NECESIDADESimagen) {
   if ($imagen1NECESIDADESimagen != '.' && $imagen1NECESIDADESimagen != '..') {
      $Matriz4ACTIVIDADESimagenDIVERSION[$i]=$imagen1NECESIDADESimagen;
      $Ruta4ACTIVIDADESimagenDIVERSION[$i]='4ACTIVIDADESimagen/DIVERSION/'.$imagen1NECESIDADESimagen;
      $Ruta4ACTIVIDADESaudioDIVERSION[$i]='4ACTIVIDADESaudio/DIVERSION/'.$imagen1NECESIDADESimagen;
      //echo $RutaImagen[$i]; //echo $contenido[$i]; //echo $imagen;
      $i++;
   }
}
$RUTA4ACTIVIDADESimagenDIVERSIONJSON=json_encode($Ruta4ACTIVIDADESimagenDIVERSION);
$RUTA4ACTIVIDADESaudioDIVERSIONJSON=json_encode($Ruta4ACTIVIDADESaudioDIVERSION);
////////////FIN MATRICIAR 444ACTIVIDADESimagen/DIVERSION

////////////INICIO MATRICIAR 444ACTIVIDADESimagen/HOGAR
echo "<tr>";
$ACTIVIDADESimagenHOGAR4 = scandir('4ACTIVIDADESimagen/HOGAR');
$Ruta4ACTIVIDADESimagenHOGAR=array();
$Matriz4ACTIVIDADESimagenHOGAR=array();
$i=0;
foreach ($ACTIVIDADESimagenHOGAR4 as $imagen1NECESIDADESimagen) {
   if ($imagen1NECESIDADESimagen != '.' && $imagen1NECESIDADESimagen != '..') {
      $Matriz4ACTIVIDADESimagenHOGAR[$i]=$imagen1NECESIDADESimagen;
      $Ruta4ACTIVIDADESimagenHOGAR[$i]='4ACTIVIDADESimagen/HOGAR/'.$imagen1NECESIDADESimagen;
      $Ruta4ACTIVIDADESaudioHOGAR[$i]='4ACTIVIDADESaudio/HOGAR/'.$imagen1NECESIDADESimagen;
      //echo $RutaImagen[$i]; //echo $contenido[$i]; //echo $imagen;
      $i++;
   }
}
$RUTA4ACTIVIDADESimagenHOGARJSON=json_encode($Ruta4ACTIVIDADESimagenHOGAR);
$RUTA4ACTIVIDADESaudioHOGARJSON=json_encode($Ruta4ACTIVIDADESaudioHOGAR);
////////////FIN MATRICIAR 444ACTIVIDADESimagen/HOGAR

////////////INICIO MATRICIAR 444ACTIVIDADESimagen/LUGARES
echo "<tr>";
$ACTIVIDADESimagenLUGARES4 = scandir('4ACTIVIDADESimagen/LUGARES');
$Ruta4ACTIVIDADESimagenLUGARES=array();
$Matriz4ACTIVIDADESimagenLUGARES=array();
$i=0;
foreach ($ACTIVIDADESimagenLUGARES4 as $imagen1NECESIDADESimagen) {
   if ($imagen1NECESIDADESimagen != '.' && $imagen1NECESIDADESimagen != '..') {
      $Matriz4ACTIVIDADESimagenLUGARES[$i]=$imagen1NECESIDADESimagen;
      $Ruta4ACTIVIDADESimagenLUGARES[$i]='4ACTIVIDADESimagen/LUGARES/'.$imagen1NECESIDADESimagen;
      $Ruta4ACTIVIDADESaudioLUGARES[$i]='4ACTIVIDADESaudio/LUGARES/'.$imagen1NECESIDADESimagen;
      //echo $RutaImagen[$i]; //echo $contenido[$i]; //echo $imagen;
      $i++;
   }
}
$RUTA4ACTIVIDADESimagenLUGARESJSON=json_encode($Ruta4ACTIVIDADESimagenLUGARES);
$RUTA4ACTIVIDADESaudioLUGARESJSON=json_encode($Ruta4ACTIVIDADESaudioLUGARES);
////////////FIN MATRICIAR 444ACTIVIDADESimagen/LUGARES

////////////INICIO MATRICIAR 444ACTIVIDADESimagen/VIAJES
echo "<tr>";
$ACTIVIDADESimagenVIAJES4 = scandir('4ACTIVIDADESimagen/VIAJES');
$Ruta4ACTIVIDADESimagenVIAJES=array();
$Matriz4ACTIVIDADESimagenVIAJES=array();
$i=0;
foreach ($ACTIVIDADESimagenVIAJES4 as $imagen1NECESIDADESimagen) {
   if ($imagen1NECESIDADESimagen != '.' && $imagen1NECESIDADESimagen != '..') {
      $Matriz4ACTIVIDADESimagenVIAJES[$i]=$imagen1NECESIDADESimagen;
      $Ruta4ACTIVIDADESimagenVIAJES[$i]='4ACTIVIDADESimagen/VIAJES/'.$imagen1NECESIDADESimagen;
      $Ruta4ACTIVIDADESaudioVIAJES[$i]='4ACTIVIDADESaudio/VIAJES/'.$imagen1NECESIDADESimagen;
      //echo $RutaImagen[$i]; //echo $contenido[$i]; //echo $imagen;
      $i++;
   }
}
$RUTA4ACTIVIDADESimagenVIAJESJSON=json_encode($Ruta4ACTIVIDADESimagenVIAJES);
$RUTA4ACTIVIDADESaudioVIAJESJSON=json_encode($Ruta4ACTIVIDADESaudioVIAJES);
////////////FIN MATRICIAR 444ACTIVIDADESimagen/VIAJES





////////////INICIO MATRICIAR 555ROPASimagen/ABRIGO
echo "<tr>";
$ROPASimagenABRIGO5 = scandir('5ROPASimagen/ABRIGO');
$Ruta5ROPASimagenABRIGO=array();
$Matriz5ROPASimagenABRIGO=array();
$i=0;
foreach ($ROPASimagenABRIGO5 as $imagen1NECESIDADESimagen) {
   if ($imagen1NECESIDADESimagen != '.' && $imagen1NECESIDADESimagen != '..') {
      $Matriz5ROPASimagenABRIGO[$i]=$imagen1NECESIDADESimagen;
      $Ruta5ROPASimagenABRIGO[$i]='5ROPASimagen/ABRIGO/'.$imagen1NECESIDADESimagen;
      $Ruta5ROPASaudioABRIGO[$i]='5ROPASaudio/ABRIGO/'.$imagen1NECESIDADESimagen;
      //echo $RutaImagen[$i]; //echo $contenido[$i]; //echo $imagen;
      $i++;
   }
}
$RUTA5ROPASimagenABRIGOJSON=json_encode($Ruta5ROPASimagenABRIGO);
$RUTA5ROPASaudioABRIGOJSON=json_encode($Ruta5ROPASaudioABRIGO);
////////////FIN MATRICIAR 555ROPASimagen/ABRIGO

////////////INICIO MATRICIAR 555ROPASimagen/ABRIGO
echo "<tr>";
$ROPASimagenFORMAL5 = scandir('5ROPASimagen/FORMAL');
$Ruta5ROPASimagenFORMAL=array();
$Matriz5ROPASimagenFORMAL=array();
$i=0;
foreach ($ROPASimagenFORMAL5 as $imagen1NECESIDADESimagen) {
   if ($imagen1NECESIDADESimagen != '.' && $imagen1NECESIDADESimagen != '..') {
      $Matriz5ROPASimagenFORMAL[$i]=$imagen1NECESIDADESimagen;
      $Ruta5ROPASimagenFORMAL[$i]='5ROPASimagen/FORMAL/'.$imagen1NECESIDADESimagen;
      $Ruta5ROPASaudioFORMAL[$i]='5ROPASaudio/FORMAL/'.$imagen1NECESIDADESimagen;
      //echo $RutaImagen[$i]; //echo $contenido[$i]; //echo $imagen;
      $i++;
   }
}
$RUTA5ROPASimagenFORMALJSON=json_encode($Ruta5ROPASimagenFORMAL);
$RUTA5ROPASaudioFORMALJSON=json_encode($Ruta5ROPASaudioFORMAL);
////////////FIN MATRICIAR 555ROPASimagen/FORMAL

////////////INICIO MATRICIAR 555ROPASimagen/ABRIGO
echo "<tr>";
$ROPASimagenROPA5 = scandir('5ROPASimagen/ROPA');
$Ruta5ROPASimagenROPA=array();
$Matriz5ROPASimagenROPA=array();
$i=0;
foreach ($ROPASimagenROPA5 as $imagen1NECESIDADESimagen) {
   if ($imagen1NECESIDADESimagen != '.' && $imagen1NECESIDADESimagen != '..') {
      $Matriz5ROPASimagenROPA[$i]=$imagen1NECESIDADESimagen;
      $Ruta5ROPASimagenROPA[$i]='5ROPASimagen/ROPA/'.$imagen1NECESIDADESimagen;
      $Ruta5ROPASaudioROPA[$i]='5ROPASaudio/ROPA/'.$imagen1NECESIDADESimagen;
      //echo $RutaImagen[$i]; //echo $contenido[$i]; //echo $imagen;
      $i++;
   }
}
$RUTA5ROPASimagenROPAJSON=json_encode($Ruta5ROPASimagenROPA);
$RUTA5ROPASaudioROPAJSON=json_encode($Ruta5ROPASaudioROPA);
////////////FIN MATRICIAR 555ROPASimagen/ROPA





////////////INICIO MATRICIAR 666HIGIENEimagen/ASEO
echo "<tr>";
$HIGIENEimagenASEO6 = scandir('6HIGIENEimagen/ASEO');
$Ruta6HIGIENEimagenASEO=array();
$Matriz6HIGIENEimagenASEO=array();
$i=0;
foreach ($HIGIENEimagenASEO6 as $imagen1NECESIDADESimagen) {
   if ($imagen1NECESIDADESimagen != '.' && $imagen1NECESIDADESimagen != '..') {
      $Matriz6HIGIENEimagenASEO[$i]=$imagen1NECESIDADESimagen;
      $Ruta6HIGIENEimagenASEO[$i]='6HIGIENEimagen/ASEO/'.$imagen1NECESIDADESimagen;
      $Ruta6HIGIENEaudioASEO[$i]='6HIGIENEaudio/ASEO/'.$imagen1NECESIDADESimagen;
      //echo $RutaImagen[$i]; //echo $contenido[$i]; //echo $imagen;
      $i++;
   }
}
$RUTA6HIGIENEimagenASEOJSON=json_encode($Ruta6HIGIENEimagenASEO);
$RUTA6HIGIENEaudioASEOJSON=json_encode($Ruta6HIGIENEaudioASEO);
////////////FIN MATRICIAR 666HIGIENEimagen/ASEO

////////////INICIO MATRICIAR 666HIGIENEimagen/HIGIENE
echo "<tr>";
$HIGIENEimagenHIGIENE6 = scandir('6HIGIENEimagen/HIGIENE');
$Ruta6HIGIENEimagenHIGIENE=array();
$Matriz6HIGIENEimagenHIGIENE=array();
$i=0;
foreach ($HIGIENEimagenHIGIENE6 as $imagen1NECESIDADESimagen) {
   if ($imagen1NECESIDADESimagen != '.' && $imagen1NECESIDADESimagen != '..') {
      $Matriz6HIGIENEimagenHIGIENE[$i]=$imagen1NECESIDADESimagen;
      $Ruta6HIGIENEimagenHIGIENE[$i]='6HIGIENEimagen/HIGIENE/'.$imagen1NECESIDADESimagen;
      $Ruta6HIGIENEaudioHIGIENE[$i]='6HIGIENEaudio/HIGIENE/'.$imagen1NECESIDADESimagen;
      //echo $RutaImagen[$i]; //echo $contenido[$i]; //echo $imagen;
      $i++;
   }
}
$RUTA6HIGIENEimagenHIGIENEJSON=json_encode($Ruta6HIGIENEimagenHIGIENE);
$RUTA6HIGIENEaudioHIGIENEJSON=json_encode($Ruta6HIGIENEaudioHIGIENE);
////////////FIN MATRICIAR 666HIGIENEimagen/HIGIENE

////////////INICIO MATRICIAR 666HIGIENEimagen/LIMPIEZA
echo "<tr>";
$HIGIENEimagenLIMPIEZA6 = scandir('6HIGIENEimagen/LIMPIEZA');
$Ruta6HIGIENEimagenLIMPIEZA=array();
$Matriz6HIGIENEimagenLIMPIEZA=array();
$i=0;
foreach ($HIGIENEimagenLIMPIEZA6 as $imagen1NECESIDADESimagen) {
   if ($imagen1NECESIDADESimagen != '.' && $imagen1NECESIDADESimagen != '..') {
      $Matriz6HIGIENEimagenLIMPIEZA[$i]=$imagen1NECESIDADESimagen;
      $Ruta6HIGIENEimagenLIMPIEZA[$i]='6HIGIENEimagen/LIMPIEZA/'.$imagen1NECESIDADESimagen;
      $Ruta6HIGIENEaudioLIMPIEZA[$i]='6HIGIENEaudio/LIMPIEZA/'.$imagen1NECESIDADESimagen;
      //echo $RutaImagen[$i]; //echo $contenido[$i]; //echo $imagen;
      $i++;
   }
}
$RUTA6HIGIENEimagenLIMPIEZAJSON=json_encode($Ruta6HIGIENEimagenLIMPIEZA);
$RUTA6HIGIENEaudioLIMPIEZAJSON=json_encode($Ruta6HIGIENEaudioLIMPIEZA);
////////////FIN MATRICIAR 666HIGIENEimagen/LIMPIEZA

////////////INICIO MATRICIAR 777CUERPOimagen/CUERPO
echo "<tr>";
$CUERPOimagenCUERPO7 = scandir('7CUERPOimagen/CUERPO');
$Ruta7CUERPOimagenCUERPO=array();
$Matriz7CUERPOimagenCUERPO=array();
$i=0;
foreach ($CUERPOimagenCUERPO7 as $imagen1NECESIDADESimagen) {
   if ($imagen1NECESIDADESimagen != '.' && $imagen1NECESIDADESimagen != '..') {
      $Matriz7CUERPOimagenCUERPO[$i]=$imagen1NECESIDADESimagen;
      $Ruta7CUERPOimagenCUERPO[$i]='7CUERPOimagen/CUERPO/'.$imagen1NECESIDADESimagen;
      $Ruta7CUERPOaudioCUERPO[$i]='7CUERPOaudio/CUERPO/'.$imagen1NECESIDADESimagen;
      //echo $RutaImagen[$i]; //echo $contenido[$i]; //echo $imagen;
      $i++;
   }
}
$RUTA7CUERPOimagenCUERPOJSON=json_encode($Ruta7CUERPOimagenCUERPO);
$RUTA7CUERPOaudioCUERPOJSON=json_encode($Ruta7CUERPOaudioCUERPO);
////////////FIN MATRICIAR 777CUERPOimagen/CUERPO












////////////INICIO MATRICIAR 888ANIMALESimagen/ANIMALES
echo "<tr>";
$ANIMALESimagenANIMALES8 = scandir('8ANIMALESimagen/ANIMALES');
$Ruta8ANIMALESimagenANIMALES=array();
$Matriz8ANIMALESimagenANIMALES=array();
$i=0;
foreach ($ANIMALESimagenANIMALES8 as $imagen1NECESIDADESimagen) {
   if ($imagen1NECESIDADESimagen != '.' && $imagen1NECESIDADESimagen != '..') {
      $Matriz8ANIMALESimagenANIMALES[$i]=$imagen1NECESIDADESimagen;
      $Ruta8ANIMALESimagenANIMALES[$i]='8ANIMALESimagen/ANIMALES/'.$imagen1NECESIDADESimagen;
      $Ruta8ANIMALESaudioANIMALES[$i]='8ANIMALESaudio/ANIMALES/'.$imagen1NECESIDADESimagen;
      //echo $RutaImagen[$i]; //echo $contenido[$i]; //echo $imagen;
      $i++;
   }
}
$RUTA8ANIMALESimagenANIMALESJSON=json_encode($Ruta8ANIMALESimagenANIMALES);
$RUTA8ANIMALESaudioANIMALESJSON=json_encode($Ruta8ANIMALESaudioANIMALES);
////////////FIN MATRICIAR 888ANIMALESimagen/ANIMALES

////////////INICIO MATRICIAR 888ANIMALESimagen/AVES
echo "<tr>";
$ANIMALESimagenAVES8 = scandir('8ANIMALESimagen/AVES');
$Ruta8ANIMALESimagenAVES=array();
$Matriz8ANIMALESimagenAVES=array();
$i=0;
foreach ($ANIMALESimagenAVES8 as $imagen1NECESIDADESimagen) {
   if ($imagen1NECESIDADESimagen != '.' && $imagen1NECESIDADESimagen != '..') {
      $Matriz8ANIMALESimagenAVES[$i]=$imagen1NECESIDADESimagen;
      $Ruta8ANIMALESimagenAVES[$i]='8ANIMALESimagen/AVES/'.$imagen1NECESIDADESimagen;
      $Ruta8ANIMALESaudioAVES[$i]='8ANIMALESaudio/AVES/'.$imagen1NECESIDADESimagen;
      //echo $RutaImagen[$i]; //echo $contenido[$i]; //echo $imagen;
      $i++;
   }
}
$RUTA8ANIMALESimagenAVESJSON=json_encode($Ruta8ANIMALESimagenAVES);
$RUTA8ANIMALESaudioAVESJSON=json_encode($Ruta8ANIMALESaudioAVES);
////////////FIN MATRICIAR 888ANIMALESimagen/AVES

////////////INICIO MATRICIAR 888ANIMALESimagen/MARINOS
echo "<tr>";
$ANIMALESimagenMARINOS8 = scandir('8ANIMALESimagen/MARINOS');
$Ruta8ANIMALESimagenMARINOS=array();
$Matriz8ANIMALESimagenMARINOS=array();
$i=0;
foreach ($ANIMALESimagenMARINOS8 as $imagen1NECESIDADESimagen) {
   if ($imagen1NECESIDADESimagen != '.' && $imagen1NECESIDADESimagen != '..') {
      $Matriz8ANIMALESimagenMARINOS[$i]=$imagen1NECESIDADESimagen;
      $Ruta8ANIMALESimagenMARINOS[$i]='8ANIMALESimagen/MARINOS/'.$imagen1NECESIDADESimagen;
      $Ruta8ANIMALESaudioMARINOS[$i]='8ANIMALESaudio/MARINOS/'.$imagen1NECESIDADESimagen;
      //echo $RutaImagen[$i]; //echo $contenido[$i]; //echo $imagen;
      $i++;
   }
}
$RUTA8ANIMALESimagenMARINOSJSON=json_encode($Ruta8ANIMALESimagenMARINOS);
$RUTA8ANIMALESaudioMARINOSJSON=json_encode($Ruta8ANIMALESaudioMARINOS);
////////////FIN MATRICIAR 888ANIMALESimagen/MARINOS

////////////INICIO MATRICIAR 888ANIMALESimagen/TERRESTRES
echo "<tr>";
$ANIMALESimagenTERRESTRES8 = scandir('8ANIMALESimagen/TERRESTRES');
$Ruta8ANIMALESimagenTERRESTRES=array();
$Matriz8ANIMALESimagenTERRESTRES=array();
$i=0;
foreach ($ANIMALESimagenTERRESTRES8 as $imagen1NECESIDADESimagen) {
   if ($imagen1NECESIDADESimagen != '.' && $imagen1NECESIDADESimagen != '..') {
      $Matriz8ANIMALESimagenTERRESTRES[$i]=$imagen1NECESIDADESimagen;
      $Ruta8ANIMALESimagenTERRESTRES[$i]='8ANIMALESimagen/TERRESTRES/'.$imagen1NECESIDADESimagen;
      $Ruta8ANIMALESaudioTERRESTRES[$i]='8ANIMALESaudio/TERRESTRES/'.$imagen1NECESIDADESimagen;
      //echo $RutaImagen[$i]; //echo $contenido[$i]; //echo $imagen;
      $i++;
   }
}
$RUTA8ANIMALESimagenTERRESTRESJSON=json_encode($Ruta8ANIMALESimagenTERRESTRES);
$RUTA8ANIMALESaudioTERRESTRESJSON=json_encode($Ruta8ANIMALESaudioTERRESTRES);
////////////FIN MATRICIAR 888ANIMALESimagen/TERRESTRES





////////////INICIO MATRICIAR 999OTROSimagen/OTROS
echo "<tr>";
$OTROSimagenOTROS9 = scandir('9OTROSimagen/OTROS');
$Ruta9OTROSimagenOTROS=array();
$Matriz9OTROSimagenOTROS=array();
$i=0;
foreach ($OTROSimagenOTROS9 as $imagen1NECESIDADESimagen) {
   if ($imagen1NECESIDADESimagen != '.' && $imagen1NECESIDADESimagen != '..') {
      $Matriz9OTROSimagenOTROS[$i]=$imagen1NECESIDADESimagen;
      $Ruta9OTROSimagenOTROS[$i]='9OTROSimagen/OTROS/'.$imagen1NECESIDADESimagen;
      $Ruta9OTROSaudioOTROS[$i]='9OTROSaudio/OTROS/'.$imagen1NECESIDADESimagen;
      //echo $RutaImagen[$i]; //echo $contenido[$i]; //echo $imagen;
      $i++;
   }
}
$RUTA9OTROSimagenOTROSJSON=json_encode($Ruta9OTROSimagenOTROS);
$RUTA9OTROSaudioOTROSJSON=json_encode($Ruta9OTROSaudioOTROS);
////////////FIN MATRICIAR 999OTROSimagen/OTROS










////////////
//MATRICIANDO LAS IMAGENES DE CARPETAS SUBPESTAÑAS SP            
//////////// 
////////////////////////INICIO MATRICIAR 111NECESIDADESimagenSUBPESTANA   
echo "<tr>";
   $NECESIDADESimagenSUBPESTANA1 = scandir('1NECESIDADESimagenSUBPESTANA');
   $RUTA1NECESIDADESimagenSUBPESTANA=array();
   $Matriz1NECESIDADESimagenSUBPESTANA=array();
   $i=0;
   foreach ($NECESIDADESimagenSUBPESTANA1 as $imagen) {
      if ($imagen != '.' && $imagen != '..') {
      $Matriz1NECESIDADESimagenSUBPESTANA[$i]=$imagen;
      $RUTA1NECESIDADESimagenSUBPESTANA[$i]='1NECESIDADESimagenSUBPESTANA/'.$imagen;
      //$RutaAudio[$i]='ALIMENTOaudio/'.$imagen; //echo $RutaImagen[$i]; //echo $contenido[$i];   //echo $imagen; //echo $MatrizImagenes[$i];
      $i++;
      }
}
$RUTA1NECESIDADESimagenSUBPESTANAJSON=json_encode($RUTA1NECESIDADESimagenSUBPESTANA);
////////////////////////FIN MATRICIAR 111ALIMENTOSSimagenSUBPESTANA

////////////////////////INICIO MATRICIAR 222NECESIDADESimagenSUBPESTANA   
echo "<tr>";
   $ALIMENTOSimagenSUBPESTANA2 = scandir('2ALIMENTOSimagenSUBPESTANA');
   $RUTA2ALIMENTOSimagenSUBPESTANA=array();
   $Matriz2ALIMENTOSimagenSUBPESTANA=array();
   $i=0;
   foreach ($ALIMENTOSimagenSUBPESTANA2 as $imagen) {
      if ($imagen != '.' && $imagen != '..') {
      $Matriz2ALIMENTOSimagenSUBPESTANA[$i]=$imagen;
      $RUTA2ALIMENTOSimagenSUBPESTANA[$i]='2ALIMENTOSimagenSUBPESTANA/'.$imagen;
      //$RutaAudio[$i]='ALIMENTOaudio/'.$imagen; //echo $RutaImagen[$i]; //echo $contenido[$i];   //echo $imagen; //echo $MatrizImagenes[$i];
      $i++;
      }
}
$RUTA2ALIMENTOSimagenSUBPESTANAJSON=json_encode($RUTA2ALIMENTOSimagenSUBPESTANA);
////////////////////////FIN MATRICIAR 222ALIMENTOSimagenSUBPESTANA

////////////////////////INICIO MATRICIAR 333COLEGIOimagenSUBPESTANA   
echo "<tr>";
   $COLEGIOimagenSUBPESTANA3 = scandir('3COLEGIOimagenSUBPESTANA');
   $RUTA3COLEGIOimagenSUBPESTANA=array();
   $Matriz3COLEGIOimagenSUBPESTANA=array();
   $i=0;
   foreach ($COLEGIOimagenSUBPESTANA3 as $imagen) {
      if ($imagen != '.' && $imagen != '..') {
      $Matriz3COLEGIOimagenSUBPESTANA[$i]=$imagen;
      $RUTA3COLEGIOimagenSUBPESTANA[$i]='3COLEGIOimagenSUBPESTANA/'.$imagen;
      //$RutaAudio[$i]='ALIMENTOaudio/'.$imagen; //echo $RutaImagen[$i]; //echo $contenido[$i];   //echo $imagen; //echo $MatrizImagenes[$i];
      $i++;
      }
}
$RUTA3COLEGIOimagenSUBPESTANAJSON=json_encode($RUTA3COLEGIOimagenSUBPESTANA);
////////////////////////FIN MATRICIAR 333COLEGIOimagenSUBPESTANA

////////////////////////INICIO MATRICIAR 444ACTIVIDADESimagenSUBPESTANA   
echo "<tr>";
   $ACTIVIDADESimagenSUBPESTANA4 = scandir('4ACTIVIDADESimagenSUBPESTANA');
   $RUTA4ACTIVIDADESimagenSUBPESTANA=array();
   $Matriz4ACTIVIDADESimagenSUBPESTANA=array();
   $i=0;
   foreach ($ACTIVIDADESimagenSUBPESTANA4 as $imagen) {
      if ($imagen != '.' && $imagen != '..') {
      $Matriz4ACTIVIDADESimagenSUBPESTANA[$i]=$imagen;
      $RUTA4ACTIVIDADESimagenSUBPESTANA[$i]='4ACTIVIDADESimagenSUBPESTANA/'.$imagen;
      //$RutaAudio[$i]='ALIMENTOaudio/'.$imagen; //echo $RutaImagen[$i]; //echo $contenido[$i];   //echo $imagen; //echo $MatrizImagenes[$i];
      $i++;
      }
}
$RUTA4ACTIVIDADESimagenSUBPESTANAJSON=json_encode($RUTA4ACTIVIDADESimagenSUBPESTANA);
////////////////////////FIN MATRICIAR 444CTIVIDADESimagenSUBPESTANA

////////////////////////INICIO MATRICIAR 555ROPASimagenSUBPESTANA   
echo "<tr>";
   $ROPASimagenSUBPESTANA5 = scandir('5ROPASimagenSUBPESTANA');
   $RUTA5ROPASimagenSUBPESTANA=array();
   $Matriz5ROPASimagenSUBPESTANA=array();
   $i=0;
   foreach ($ROPASimagenSUBPESTANA5 as $imagen) {
      if ($imagen != '.' && $imagen != '..') {
      $Matriz5ROPASimagenSUBPESTANA[$i]=$imagen;
      $RUTA5ROPASimagenSUBPESTANA[$i]='5ROPASimagenSUBPESTANA/'.$imagen;
      //$RutaAudio[$i]='ALIMENTOaudio/'.$imagen; //echo $RutaImagen[$i]; //echo $contenido[$i];   //echo $imagen; //echo $MatrizImagenes[$i];
      $i++;
      }
}
$RUTA5ROPASimagenSUBPESTANAJSON=json_encode($RUTA5ROPASimagenSUBPESTANA);
////////////////////////FIN MATRICIAR 555ROPASimagenSUBPESTANA

////////////////////////INICIO MATRICIAR 666HIGIENEimagenSUBPESTANA   
echo "<tr>";
   $HIGIENEimagenSUBPESTANA6 = scandir('6HIGIENEimagenSUBPESTANA');
   $RUTA6HIGIENEimagenSUBPESTANA=array();
   $Matriz6HIGIENEimagenSUBPESTANA=array();
   $i=0;
   foreach ($HIGIENEimagenSUBPESTANA6 as $imagen) {
      if ($imagen != '.' && $imagen != '..') {
      $Matriz6HIGIENEimagenSUBPESTANA[$i]=$imagen;
      $RUTA6HIGIENEimagenSUBPESTANA[$i]='6HIGIENEimagenSUBPESTANA/'.$imagen;
      //$RutaAudio[$i]='ALIMENTOaudio/'.$imagen; //echo $RutaImagen[$i]; //echo $contenido[$i];   //echo $imagen; //echo $MatrizImagenes[$i];
      $i++;
      }
}
$RUTA6HIGIENEimagenSUBPESTANAJSON=json_encode($RUTA6HIGIENEimagenSUBPESTANA);
////////////////////////FIN MATRICIAR 666HIGIENEimagenSUBPESTANA

////////////////////////INICIO MATRICIAR 777CUERPOimagenSUBPESTANA   
echo "<tr>";
   $CUERPOimagenSUBPESTANA7 = scandir('7CUERPOimagenSUBPESTANA');
   $RUTA7CUERPOimagenSUBPESTANA=array();
   $Matriz7CUERPOimagenSUBPESTANA=array();
   $i=0;
   foreach ($CUERPOimagenSUBPESTANA7 as $imagen) {
      if ($imagen != '.' && $imagen != '..') {
      $Matriz7CUERPOimagenSUBPESTANA[$i]=$imagen;
      $RUTA7CUERPOimagenSUBPESTANA[$i]='7CUERPOimagenSUBPESTANA/'.$imagen;
      //$RutaAudio[$i]='ALIMENTOaudio/'.$imagen; //echo $RutaImagen[$i]; //echo $contenido[$i];   //echo $imagen; //echo $MatrizImagenes[$i];
      $i++;
      }
}
$RUTA7CUERPOimagenSUBPESTANAJSON=json_encode($RUTA7CUERPOimagenSUBPESTANA);
////////////////////////FIN MATRICIAR 777CUERPOimagenSUBPESTANA

////////////////////////INICIO MATRICIAR 888ANIMALESimagenSUBPESTANA   
echo "<tr>";
   $ANIMALESimagenSUBPESTANA8 = scandir('8ANIMALESimagenSUBPESTANA');
   $RUTA8ANIMALESimagenSUBPESTANA=array();
   $Matriz8ANIMALESimagenSUBPESTANA=array();
   $i=0;
   foreach ($ANIMALESimagenSUBPESTANA8 as $imagen) {
      if ($imagen != '.' && $imagen != '..') {
      $Matriz8ANIMALESimagenSUBPESTANA[$i]=$imagen;
      $RUTA8ANIMALESimagenSUBPESTANA[$i]='8ANIMALESimagenSUBPESTANA/'.$imagen;
      //$RutaAudio[$i]='ALIMENTOaudio/'.$imagen; //echo $RutaImagen[$i]; //echo $contenido[$i];   //echo $imagen; //echo $MatrizImagenes[$i];
      $i++;
      }
}
$RUTA8ANIMALESimagenSUBPESTANAJSON=json_encode($RUTA8ANIMALESimagenSUBPESTANA);
////////////////////////FIN MATRICIAR 888ANIMALESimagenSUBPESTANA

////////////////////////INICIO MATRICIAR 999OTROSimagenSUBPESTANA   
echo "<tr>";
   $OTROSimagenSUBPESTANA9 = scandir('9OTROSimagenSUBPESTANA');
   $RUTA9OTROSimagenSUBPESTANA=array();
   $Matriz9OTROSimagenSUBPESTANA=array();
   $i=0;
   foreach ($OTROSimagenSUBPESTANA9 as $imagen) {
      if ($imagen != '.' && $imagen != '..') {
      $Matriz9OTROSimagenSUBPESTANA[$i]=$imagen;
      $RUTA9OTROSimagenSUBPESTANA[$i]='9OTROSimagenSUBPESTANA/'.$imagen;
      //$RutaAudio[$i]='ALIMENTOaudio/'.$imagen; //echo $RutaImagen[$i]; //echo $contenido[$i];   //echo $imagen; //echo $MatrizImagenes[$i];
      $i++;
      }
}
$RUTA9OTROSimagenSUBPESTANAJSON=json_encode($RUTA9OTROSimagenSUBPESTANA);
////////////////////////FIN MATRICIAR 999OTROSimagenSUBPESTANA
?>
    

<div class="panel2" id="panel-CENTRAL" style="width: 1213px; height: 146px;">
<table> 
    
<tr>
<td><img src="PECSimagen/1NECESIDADES.png" onclick="mostrar1NECESIDADESimagen()"   style="vertical-align:-20px; padding:2px; margin-bottom:1px; width:234px; height:65px;"></td>
<td><img src="PECSimagen/2ALIMENTOS.png"    onclick="mostrar2ALIMENTOSimagen()"   style="vertical-align:-20px; padding:2px; margin-bottom:1px; width:234px; height:65px;"></td>
<td><img src="PECSimagen/3COLEGIO.png"      onclick="mostrar3COLEGIOimagen()"     style="vertical-align:-20px; text-align:center; padding:2px; margin-bottom:1px; width:234px; height:65px;"></td>
<td><img src="PECSimagen/4ACTIVIDADES.png" alt="ACTIVIDADES" onclick="mostrar4ACTIVIDADESimagen()" style="vertical-align:-20px; text-align:center; padding:2px; margin-bottom:1px; width:234px; height:65px;"></td>
<td><img src="PECSimagen/5ROPAS.png" alt="ROPAS" onclick="mostrar5ROPASimagen()"       style="vertical-align:-20px; padding:2px; margin-bottom:1px; width:234px; height:62px;"></td>
</tr>
      
<tr>
<td><img src="PECSimagen/6HIGIENE.png" alt="HIGIENE" onclick="mostrar6HIGIENEimagen()" style="text-align:center; text-align:left; padding:2px; margin-bottom:1px; width:234px; height:65px;"></td>
<td><img src="PECSimagen/7CUERPO.png" alt="CUERPO" onclick="mostrar7CUERPOimagen()" style="text-align:center; padding:2px; margin-bottom:1px; width:234px; height:65px;"></td>   
<td><img src="PECSimagen/8ANIMALES.png" onclick="mostrar8ANIMALESimagen()" style="text-align:center; padding:2px; margin-bottom:1px; width:234px; height:65px;"></td>   
<td><img src="PECSimagen/9OTROS.png"    onclick="mostrar9OTROSimagen()" style="text-align:center; padding:2px; margin-bottom:1px; width:234px; height:65px;"></td>
<td> 
<div style="display: flex;">
<a href="AgregarEn.php"> <img src="PECSimagen/IR A AGREGAR MULTIMEDIA.png" style="text-align:center; padding:2px; margin-bottom:1px; width:115px; height:65px;"></a> 
<a href="dialogos.php"> <img src="PECSimagen/NUEVO DIALOGO.png" style="text-align:center; padding:2px; margin-bottom:1px; width:115px; height:65px;"></a>
</div>
</td>
</tr>

</table>
</div>
   
    
<div class="panel3" id="panel-CENTRALAUXILIAR" style="overflow-x: auto; width: 1213px; height: 73px;"></div>
   
<div class="panel4" id="panel-INFERIOR" style="overflow-y: auto; width: 1213px; height: 218px;"></div>

<div class="panel5" id="panel-INFERIORAUXILIAR" style=" width: 1210px; height: 20px;">
<a href="index1.php"> <img src="PECSimagen/boton_inicio.png" style=" width:100px; height:18px;"></a> 
<a href="aalogout.php"> <img src="PECSimagen/boton_salir.png"; alt="boton_salir" style="width:100px; height:18px;  "></a> 
</div>

<script>
////////////INICIO 111 COLOCA CARPETAS NECESIDADESimagen Y NECESIDADESimagenSUBPESTANA EN PANELES
function mostrar1NECESIDADESimagen(){
var RUTA1NECESIDADESimagenACCION = <?php echo $RUTA1NECESIDADESimagenACCIONJSON; ?>;
var RUTA1NECESIDADESaudioACCION = <?php echo $RUTA1NECESIDADESaudioACCIONJSON; ?>; 

var RUTA1NECESIDADESimagenEMOCION = <?php echo $RUTA1NECESIDADESimagenEMOCIONJSON; ?>;
var RUTA1NECESIDADESaudioEMOCION = <?php echo $RUTA1NECESIDADESaudioEMOCIONJSON; ?>; 

var RUTA1NECESIDADESimagenGESTOS = <?php echo $RUTA1NECESIDADESimagenGESTOSJSON; ?>;
var RUTA1NECESIDADESaudioGESTOS = <?php echo $RUTA1NECESIDADESaudioGESTOSJSON; ?>; 

var RUTA1NECESIDADESimagenSUBPESTANA = <?php echo $RUTA1NECESIDADESimagenSUBPESTANAJSON; ?>;

//let PANELCENTRALAUXILIAR = document.querySelector("panel-CENTRALAUXILIAR");
let PANELCENTRALAUXILIAR = document.getElementById("panel-CENTRALAUXILIAR");
PANELCENTRALAUXILIAR.innerHTML=""; 

//PONER IMAGENES EN PANEL CENTRAL AUXILIAR
for(var i=0; i<RUTA1NECESIDADESimagenSUBPESTANA.length; i++){
   //let imagen = document.createElement("img");
   //imagen.src = "ALIMENTOimagen/" + elementos[i];
   //panelinferior.appendChild(boton);
   var aNECESIDADESimagenSUBPESTANAPANELCENTRALAUXILIAR = document.createElement("img");  //console.log(RI[i]);  //console.log(RISP[1]);
   aNECESIDADESimagenSUBPESTANAPANELCENTRALAUXILIAR.src = RUTA1NECESIDADESimagenSUBPESTANA[i];
   aNECESIDADESimagenSUBPESTANAPANELCENTRALAUXILIAR.style.width="200px"; aNECESIDADESimagenSUBPESTANAPANELCENTRALAUXILIAR.style.height="66px"; aNECESIDADESimagenSUBPESTANAPANELCENTRALAUXILIAR.style.marginRight="5px";
   PANELCENTRALAUXILIAR.appendChild(aNECESIDADESimagenSUBPESTANAPANELCENTRALAUXILIAR);
   
//INICIO PONER 1NECESIDADESimagen/ACCION  
   if(i===0){
      aNECESIDADESimagenSUBPESTANAPANELCENTRALAUXILIAR.addEventListener("click", function() {
      let PANELINFERIOR=document.getElementById("panel-INFERIOR");
      PANELINFERIOR.innerHTML=""; 
      for(let j=0; j<RUTA1NECESIDADESimagenACCION.length; j++){
      let aNECESIDADESimagenPANELINFERIOR = document.createElement("img");  //console.log(RUTAaNECESIDADESimagen[1]);  
      aNECESIDADESimagenPANELINFERIOR.src =  RUTA1NECESIDADESimagenACCION[j]; //console.log(RUTA1NECESIDADESimagen[j]); 
      aNECESIDADESimagenPANELINFERIOR.style.width="70px"; aNECESIDADESimagenPANELINFERIOR.style.height="70px"; aNECESIDADESimagenPANELINFERIOR.style.marginRight="7px";
      PANELINFERIOR.appendChild(aNECESIDADESimagenPANELINFERIOR);
      
      //PONER IMAGENES EN PANEL SUPERIOR
      aNECESIDADESimagenPANELINFERIOR.addEventListener("click", function() {    
      //console.log(RUTA1NECESIDADESimagen[j]); 
      let PANELSUPERIOR=document.getElementById("panel-SUPERIOR");
      let aNECESIDADESimagenPANELSUPERIOR = document.createElement("img");//console.log(RutaImagenS);  
      aNECESIDADESimagenPANELSUPERIOR.src = RUTA1NECESIDADESimagenACCION[j]; //console.log(RUTA1NECESIDADESimagen[1]); 
      aNECESIDADESimagenPANELSUPERIOR.style.width="70px"; 
      aNECESIDADESimagenPANELSUPERIOR.style.height="70px"; 
      aNECESIDADESimagenPANELSUPERIOR.style.marginRight="7px";
      //aNECESIDADESimagenPANELSUPERIOR.style.position="absolute";
      aNECESIDADESimagenPANELSUPERIOR.style.display="flex";
      aNECESIDADESimagenPANELSUPERIOR.style.justifyContent="center";
      aNECESIDADESimagenPANELSUPERIOR.style.alignItems="center";
      aNECESIDADESimagenPANELSUPERIOR.style.marginTop=3+"px";
       //vertical-align: middle; 
      //style="text-align:center; text-align:left; padding:2px; margin-bottom:1px; width:234px; height:65px;"
      
      PANELSUPERIOR.appendChild(aNECESIDADESimagenPANELSUPERIOR);
      
      //REPRODUCIR PANEL SUPERIOR         
      aNECESIDADESimagenPANELSUPERIOR.addEventListener("click", function() {
      const audio = new Audio(RUTA1NECESIDADESaudioACCION[j].replace(".png", ".wav"));
      audio.play();
      });  
      });
      }
      });
   }
//FIN PONER 1NECESIDADESimagen/ACCION
//INICIO PONER 1NECESIDADESimagen/EMOCION 
   if(i===1){
      aNECESIDADESimagenSUBPESTANAPANELCENTRALAUXILIAR.addEventListener("click", function() {
      let PANELINFERIOR=document.getElementById("panel-INFERIOR");
      PANELINFERIOR.innerHTML=""; 
      for(let j=0; j<RUTA1NECESIDADESimagenEMOCION.length; j++){
      let aNECESIDADESimagenPANELINFERIOR = document.createElement("img");  //console.log(RUTAaNECESIDADESimagen[1]);  
      aNECESIDADESimagenPANELINFERIOR.src =  RUTA1NECESIDADESimagenEMOCION[j]; //console.log(RUTA1NECESIDADESimagen[j]); 
      aNECESIDADESimagenPANELINFERIOR.style.width="70px"; aNECESIDADESimagenPANELINFERIOR.style.height="70px"; aNECESIDADESimagenPANELINFERIOR.style.marginRight="7px";
      PANELINFERIOR.appendChild(aNECESIDADESimagenPANELINFERIOR);
      
      //PONER IMAGENES EN PANEL SUPERIOR
      aNECESIDADESimagenPANELINFERIOR.addEventListener("click", function() {    
      //console.log(RUTA1NECESIDADESimagen[j]); 
      let PANELSUPERIOR=document.getElementById("panel-SUPERIOR");
      let aNECESIDADESimagenPANELSUPERIOR = document.createElement("img");//console.log(RutaImagenS);  
      aNECESIDADESimagenPANELSUPERIOR.src = RUTA1NECESIDADESimagenEMOCION[j]; //console.log(RUTA1NECESIDADESimagen[1]); 
      aNECESIDADESimagenPANELSUPERIOR.style.width="70px"; aNECESIDADESimagenPANELSUPERIOR.style.height="70px"; aNECESIDADESimagenPANELSUPERIOR.style.marginRight="7px";
      PANELSUPERIOR.appendChild(aNECESIDADESimagenPANELSUPERIOR);
      
        //REPRODUCIR PANEL SUPERIOR         
      aNECESIDADESimagenPANELSUPERIOR.addEventListener("click", function() {
      const audio = new Audio(RUTA1NECESIDADESaudioEMOCION[j].replace(".png", ".wav"));
      audio.play();
      });  
      });
      }
      });
   }
//FIN PONER 1NECESIDADESimagen/ACCION
//INICIO PONER 1NECESIDADESimagen/GESTOS 
   if(i===2){
      aNECESIDADESimagenSUBPESTANAPANELCENTRALAUXILIAR.addEventListener("click", function() {
      let PANELINFERIOR=document.getElementById("panel-INFERIOR");
      PANELINFERIOR.innerHTML=""; 
      for(let j=0; j<RUTA1NECESIDADESimagenGESTOS.length; j++){
      let aNECESIDADESimagenPANELINFERIOR = document.createElement("img");  //console.log(RUTAaNECESIDADESimagen[1]);  
      aNECESIDADESimagenPANELINFERIOR.src =  RUTA1NECESIDADESimagenGESTOS[j]; //console.log(RUTA1NECESIDADESimagen[j]); 
      aNECESIDADESimagenPANELINFERIOR.style.width="70px"; aNECESIDADESimagenPANELINFERIOR.style.height="70px"; aNECESIDADESimagenPANELINFERIOR.style.marginRight="7px";
      PANELINFERIOR.appendChild(aNECESIDADESimagenPANELINFERIOR);
      
      //PONER IMAGENES EN PANEL SUPERIOR
      aNECESIDADESimagenPANELINFERIOR.addEventListener("click", function() {    
      //console.log(RUTA1NECESIDADESimagen[j]); 
      let PANELSUPERIOR=document.getElementById("panel-SUPERIOR");
      let aNECESIDADESimagenPANELSUPERIOR = document.createElement("img");//console.log(RutaImagenS);  
      aNECESIDADESimagenPANELSUPERIOR.src = RUTA1NECESIDADESimagenGESTOS[j]; //console.log(RUTA1NECESIDADESimagen[1]); 
      aNECESIDADESimagenPANELSUPERIOR.style.width="70px"; aNECESIDADESimagenPANELSUPERIOR.style.height="70px"; aNECESIDADESimagenPANELSUPERIOR.style.marginRight="7px";
      PANELSUPERIOR.appendChild(aNECESIDADESimagenPANELSUPERIOR);
      
        //REPRODUCIR PANEL SUPERIOR         
      aNECESIDADESimagenPANELSUPERIOR.addEventListener("click", function() {
      const audio = new Audio(RUTA1NECESIDADESaudioGESTOS[j].replace(".png", ".wav"));
      audio.play();
      });  
      });
      }
      });
   }
//FIN PONER 1NECESIDADESimagen/GESTOS
  }
}
////////////FIN 111 COLOCA CARPETAS NECESIDADESimagen Y NECESIDADESimagenSUBPESTANA EN PANELES












////////////INICIO COLOCA 222ALIMENTOSimagen Y ALIMENTOSimagenSUBPESTANA EN PANELES
function mostrar2ALIMENTOSimagen(){
var RUTA1NECESIDADESimagenACCION = <?php echo $RUTA2ALIMENTOSimagenBEBIDASJSON; ?>;
var RUTA1NECESIDADESaudioACCION = <?php echo $RUTA2ALIMENTOSaudioBEBIDASJSON; ?>; 

var RUTA1NECESIDADESimagenEMOCION = <?php echo $RUTA2ALIMENTOSimagenCARNESJSON; ?>;
var RUTA1NECESIDADESaudioEMOCION = <?php echo $RUTA2ALIMENTOSaudioCARNESJSON; ?>; 

var RUTA1NECESIDADESimagenGESTOS = <?php echo $RUTA2ALIMENTOSimagenCEREALESJSON; ?>;
var RUTA1NECESIDADESaudioGESTOS = <?php echo $RUTA2ALIMENTOSaudioCEREALESJSON; ?>; 

var RUTA1NECESIDADESimagenFRUTAS = <?php echo $RUTA2ALIMENTOSimagenFRUTASJSON; ?>;
var RUTA1NECESIDADESaudioFRUTAS = <?php echo $RUTA2ALIMENTOSaudioFRUTASJSON; ?>; 

var RUTA1NECESIDADESimagenVERDURAS = <?php echo $RUTA2ALIMENTOSimagenVERDURASJSON; ?>;
var RUTA1NECESIDADESaudioVERDURAS = <?php echo $RUTA2ALIMENTOSaudioVERDURASJSON; ?>; 

var RUTA1NECESIDADESimagenSUBPESTANA = <?php echo $RUTA2ALIMENTOSimagenSUBPESTANAJSON; ?>;

//let PANELCENTRALAUXILIAR = document.querySelector("panel-CENTRALAUXILIAR");
let PANELCENTRALAUXILIAR = document.getElementById("panel-CENTRALAUXILIAR");
PANELCENTRALAUXILIAR.innerHTML=""; 

//PONER IMAGENES EN PANEL CENTRAL AUXILIAR
for(var i=0; i<RUTA1NECESIDADESimagenSUBPESTANA.length; i++){
   //let imagen = document.createElement("img");
   //imagen.src = "ALIMENTOimagen/" + elementos[i];
   //panelinferior.appendChild(boton);
   var aNECESIDADESimagenSUBPESTANAPANELCENTRALAUXILIAR = document.createElement("img");  //console.log(RI[i]);  //console.log(RISP[1]);
   aNECESIDADESimagenSUBPESTANAPANELCENTRALAUXILIAR.src = RUTA1NECESIDADESimagenSUBPESTANA[i];
   aNECESIDADESimagenSUBPESTANAPANELCENTRALAUXILIAR.style.width="200px"; aNECESIDADESimagenSUBPESTANAPANELCENTRALAUXILIAR.style.height="66px"; aNECESIDADESimagenSUBPESTANAPANELCENTRALAUXILIAR.style.marginRight="5px";
   PANELCENTRALAUXILIAR.appendChild(aNECESIDADESimagenSUBPESTANAPANELCENTRALAUXILIAR);
   
//INICIO PONER 1NECESIDADESimagen/ACCION  
   if(i===0){
      aNECESIDADESimagenSUBPESTANAPANELCENTRALAUXILIAR.addEventListener("click", function() {
      let PANELINFERIOR=document.getElementById("panel-INFERIOR");
      PANELINFERIOR.innerHTML=""; 
      for(let j=0; j<RUTA1NECESIDADESimagenACCION.length; j++){
      let aNECESIDADESimagenPANELINFERIOR = document.createElement("img");  //console.log(RUTAaNECESIDADESimagen[1]);  
      aNECESIDADESimagenPANELINFERIOR.src =  RUTA1NECESIDADESimagenACCION[j]; //console.log(RUTA1NECESIDADESimagen[j]); 
      aNECESIDADESimagenPANELINFERIOR.style.width="70px"; aNECESIDADESimagenPANELINFERIOR.style.height="70px"; aNECESIDADESimagenPANELINFERIOR.style.marginRight="7px";
      PANELINFERIOR.appendChild(aNECESIDADESimagenPANELINFERIOR);
      
      //PONER IMAGENES EN PANEL SUPERIOR
      aNECESIDADESimagenPANELINFERIOR.addEventListener("click", function() {    
      //console.log(RUTA1NECESIDADESimagen[j]); 
      let PANELSUPERIOR=document.getElementById("panel-SUPERIOR");
      let aNECESIDADESimagenPANELSUPERIOR = document.createElement("img");//console.log(RutaImagenS);  
      aNECESIDADESimagenPANELSUPERIOR.src = RUTA1NECESIDADESimagenACCION[j]; //console.log(RUTA1NECESIDADESimagen[1]); 
      aNECESIDADESimagenPANELSUPERIOR.style.width="70px"; aNECESIDADESimagenPANELSUPERIOR.style.height="70px"; aNECESIDADESimagenPANELSUPERIOR.style.marginRight="7px";
      PANELSUPERIOR.appendChild(aNECESIDADESimagenPANELSUPERIOR);
      
      //REPRODUCIR PANEL SUPERIOR         
      aNECESIDADESimagenPANELSUPERIOR.addEventListener("click", function() {
      const audio = new Audio(RUTA1NECESIDADESaudioACCION[j].replace(".png", ".wav"));
      audio.play();
      });  
      });
      }
      });
   }
//FIN PONER 1NECESIDADESimagen/ACCION
//INICIO PONER 1NECESIDADESimagen/EMOCION 
   if(i===1){
      aNECESIDADESimagenSUBPESTANAPANELCENTRALAUXILIAR.addEventListener("click", function() {
      let PANELINFERIOR=document.getElementById("panel-INFERIOR");
      PANELINFERIOR.innerHTML=""; 
      for(let j=0; j<RUTA1NECESIDADESimagenEMOCION.length; j++){
      let aNECESIDADESimagenPANELINFERIOR = document.createElement("img");  //console.log(RUTAaNECESIDADESimagen[1]);  
      aNECESIDADESimagenPANELINFERIOR.src =  RUTA1NECESIDADESimagenEMOCION[j]; //console.log(RUTA1NECESIDADESimagen[j]); 
      aNECESIDADESimagenPANELINFERIOR.style.width="70px"; aNECESIDADESimagenPANELINFERIOR.style.height="70px"; aNECESIDADESimagenPANELINFERIOR.style.marginRight="7px";
      PANELINFERIOR.appendChild(aNECESIDADESimagenPANELINFERIOR);
      
      //PONER IMAGENES EN PANEL SUPERIOR
      aNECESIDADESimagenPANELINFERIOR.addEventListener("click", function() {    
      //console.log(RUTA1NECESIDADESimagen[j]); 
      let PANELSUPERIOR=document.getElementById("panel-SUPERIOR");
      let aNECESIDADESimagenPANELSUPERIOR = document.createElement("img");//console.log(RutaImagenS);  
      aNECESIDADESimagenPANELSUPERIOR.src = RUTA1NECESIDADESimagenEMOCION[j]; //console.log(RUTA1NECESIDADESimagen[1]); 
      aNECESIDADESimagenPANELSUPERIOR.style.width="70px"; aNECESIDADESimagenPANELSUPERIOR.style.height="70px"; aNECESIDADESimagenPANELSUPERIOR.style.marginRight="7px";
      PANELSUPERIOR.appendChild(aNECESIDADESimagenPANELSUPERIOR);
      
        //REPRODUCIR PANEL SUPERIOR         
      aNECESIDADESimagenPANELSUPERIOR.addEventListener("click", function() {
      const audio = new Audio(RUTA1NECESIDADESaudioEMOCION[j].replace(".png", ".wav"));
      audio.play();
      });  
      });
      }
      });
   }
//FIN PONER 1NECESIDADESimagen/ACCION
//INICIO PONER 1NECESIDADESimagen/GESTOS 
   if(i===2){
      aNECESIDADESimagenSUBPESTANAPANELCENTRALAUXILIAR.addEventListener("click", function() {
      let PANELINFERIOR=document.getElementById("panel-INFERIOR");
      PANELINFERIOR.innerHTML=""; 
      for(let j=0; j<RUTA1NECESIDADESimagenGESTOS.length; j++){
      let aNECESIDADESimagenPANELINFERIOR = document.createElement("img");  //console.log(RUTAaNECESIDADESimagen[1]);  
      aNECESIDADESimagenPANELINFERIOR.src =  RUTA1NECESIDADESimagenGESTOS[j]; //console.log(RUTA1NECESIDADESimagen[j]); 
      aNECESIDADESimagenPANELINFERIOR.style.width="70px"; aNECESIDADESimagenPANELINFERIOR.style.height="70px"; aNECESIDADESimagenPANELINFERIOR.style.marginRight="7px";
      PANELINFERIOR.appendChild(aNECESIDADESimagenPANELINFERIOR);
      
      //PONER IMAGENES EN PANEL SUPERIOR
      aNECESIDADESimagenPANELINFERIOR.addEventListener("click", function() {    
      //console.log(RUTA1NECESIDADESimagen[j]); 
      let PANELSUPERIOR=document.getElementById("panel-SUPERIOR");
      let aNECESIDADESimagenPANELSUPERIOR = document.createElement("img");//console.log(RutaImagenS);  
      aNECESIDADESimagenPANELSUPERIOR.src = RUTA1NECESIDADESimagenGESTOS[j]; //console.log(RUTA1NECESIDADESimagen[1]); 
      aNECESIDADESimagenPANELSUPERIOR.style.width="70px"; aNECESIDADESimagenPANELSUPERIOR.style.height="70px"; aNECESIDADESimagenPANELSUPERIOR.style.marginRight="7px";
      PANELSUPERIOR.appendChild(aNECESIDADESimagenPANELSUPERIOR);
      
        //REPRODUCIR PANEL SUPERIOR         
      aNECESIDADESimagenPANELSUPERIOR.addEventListener("click", function() {
      const audio = new Audio(RUTA1NECESIDADESaudioGESTOS[j].replace(".png", ".wav"));
      audio.play();
      });  
      });
      }
      });
   }
//FIN PONER 1NECESIDADESimagen/GESTOS
//INICIO PONER 1NECESIDADESimagen/GESTOS 
   if(i===3){
      aNECESIDADESimagenSUBPESTANAPANELCENTRALAUXILIAR.addEventListener("click", function() {
      let PANELINFERIOR=document.getElementById("panel-INFERIOR");
      PANELINFERIOR.innerHTML=""; 
      for(let j=0; j<RUTA1NECESIDADESimagenFRUTAS.length; j++){
      let aNECESIDADESimagenPANELINFERIOR = document.createElement("img");  //console.log(RUTAaNECESIDADESimagen[1]);  
      aNECESIDADESimagenPANELINFERIOR.src =  RUTA1NECESIDADESimagenFRUTAS[j]; //console.log(RUTA1NECESIDADESimagen[j]); 
      aNECESIDADESimagenPANELINFERIOR.style.width="70px"; aNECESIDADESimagenPANELINFERIOR.style.height="70px"; aNECESIDADESimagenPANELINFERIOR.style.marginRight="7px";
      PANELINFERIOR.appendChild(aNECESIDADESimagenPANELINFERIOR);
      
      //PONER IMAGENES EN PANEL SUPERIOR
      aNECESIDADESimagenPANELINFERIOR.addEventListener("click", function() {    
      //console.log(RUTA1NECESIDADESimagen[j]); 
      let PANELSUPERIOR=document.getElementById("panel-SUPERIOR");
      let aNECESIDADESimagenPANELSUPERIOR = document.createElement("img");//console.log(RutaImagenS);  
      aNECESIDADESimagenPANELSUPERIOR.src = RUTA1NECESIDADESimagenFRUTAS[j]; //console.log(RUTA1NECESIDADESimagen[1]); 
      aNECESIDADESimagenPANELSUPERIOR.style.width="70px"; aNECESIDADESimagenPANELSUPERIOR.style.height="70px"; aNECESIDADESimagenPANELSUPERIOR.style.marginRight="7px";
      PANELSUPERIOR.appendChild(aNECESIDADESimagenPANELSUPERIOR);
      
        //REPRODUCIR PANEL SUPERIOR         
      aNECESIDADESimagenPANELSUPERIOR.addEventListener("click", function() {
      const audio = new Audio(RUTA1NECESIDADESaudioFRUTAS[j].replace(".png", ".wav"));
      audio.play();
      });  
      });
      }
      });
   }
//FIN PONER 1NECESIDADESimagen/GESTOS
//INICIO PONER 1NECESIDADESimagen/GESTOS 
   if(i===4){
      aNECESIDADESimagenSUBPESTANAPANELCENTRALAUXILIAR.addEventListener("click", function() {
      let PANELINFERIOR=document.getElementById("panel-INFERIOR");
      PANELINFERIOR.innerHTML=""; 
      for(let j=0; j<RUTA1NECESIDADESimagenVERDURAS.length; j++){
      let aNECESIDADESimagenPANELINFERIOR = document.createElement("img");  //console.log(RUTAaNECESIDADESimagen[1]);  
      aNECESIDADESimagenPANELINFERIOR.src =  RUTA1NECESIDADESimagenVERDURAS[j]; //console.log(RUTA1NECESIDADESimagen[j]); 
      aNECESIDADESimagenPANELINFERIOR.style.width="70px"; aNECESIDADESimagenPANELINFERIOR.style.height="70px"; aNECESIDADESimagenPANELINFERIOR.style.marginRight="7px";
      PANELINFERIOR.appendChild(aNECESIDADESimagenPANELINFERIOR);
      
      //PONER IMAGENES EN PANEL SUPERIOR
      aNECESIDADESimagenPANELINFERIOR.addEventListener("click", function() {    
      //console.log(RUTA1NECESIDADESimagen[j]); 
      let PANELSUPERIOR=document.getElementById("panel-SUPERIOR");
      let aNECESIDADESimagenPANELSUPERIOR = document.createElement("img");//console.log(RutaImagenS);  
      aNECESIDADESimagenPANELSUPERIOR.src = RUTA1NECESIDADESimagenVERDURAS[j]; //console.log(RUTA1NECESIDADESimagen[1]); 
      aNECESIDADESimagenPANELSUPERIOR.style.width="70px"; aNECESIDADESimagenPANELSUPERIOR.style.height="70px"; aNECESIDADESimagenPANELSUPERIOR.style.marginRight="7px";
      PANELSUPERIOR.appendChild(aNECESIDADESimagenPANELSUPERIOR);
      
        //REPRODUCIR PANEL SUPERIOR         
      aNECESIDADESimagenPANELSUPERIOR.addEventListener("click", function() {
      const audio = new Audio(RUTA1NECESIDADESaudioVERDURAS[j].replace(".png", ".wav"));
      audio.play();
      });  
      });
      }
      });
   }
//FIN PONER 1NECESIDADESimagen/GESTOS
  }
}
////////////FIN COLOCA 222ALIMENTOSimagen Y ALIMENTOSimagenSUBPESTANA EN PANELES












////////////INICIO COLOCA 333ESCUELAimagen Y 333ESCUELAimagenSUBPESTANA EN PANELES
function mostrar3COLEGIOimagen(){
var RUTA1NECESIDADESimagenEMOCION = <?php echo $RUTA3COLEGIOimagenCURSOSJSON; ?>;
var RUTA1NECESIDADESaudioEMOCION = <?php echo $RUTA3COLEGIOaudioCURSOSJSON; ?>; 

var RUTA1NECESIDADESimagenGESTOS = <?php echo $RUTA3COLEGIOimagenDOCENTESJSON; ?>;
var RUTA1NECESIDADESaudioGESTOS = <?php echo $RUTA3COLEGIOaudioDOCENTESJSON; ?>; 

var RUTA1NECESIDADESimagenVERDURAS = <?php echo $RUTA3COLEGIOimagenLECTURAJSON; ?>;
var RUTA1NECESIDADESaudioVERDURAS = <?php echo $RUTA3COLEGIOaudioLECTURAJSON; ?>; 

var RUTA1NECESIDADESimagenUTILES = <?php echo $RUTA3COLEGIOimagenUTILESJSON; ?>;
var RUTA1NECESIDADESaudioUTILES = <?php echo $RUTA3COLEGIOaudioUTILESJSON; ?>; 

var RUTA1NECESIDADESimagenSUBPESTANA = <?php echo $RUTA3COLEGIOimagenSUBPESTANAJSON; ?>;

//let PANELCENTRALAUXILIAR = document.querySelector("panel-CENTRALAUXILIAR");
let PANELCENTRALAUXILIAR = document.getElementById("panel-CENTRALAUXILIAR");
PANELCENTRALAUXILIAR.innerHTML=""; 

//PONER IMAGENES EN PANEL CENTRAL AUXILIAR
for(var i=0; i<RUTA1NECESIDADESimagenSUBPESTANA.length; i++){
   //let imagen = document.createElement("img");
   //imagen.src = "ALIMENTOimagen/" + elementos[i];
   //panelinferior.appendChild(boton);
   var aNECESIDADESimagenSUBPESTANAPANELCENTRALAUXILIAR = document.createElement("img");  //console.log(RI[i]);  //console.log(RISP[1]);
   aNECESIDADESimagenSUBPESTANAPANELCENTRALAUXILIAR.src = RUTA1NECESIDADESimagenSUBPESTANA[i];
   aNECESIDADESimagenSUBPESTANAPANELCENTRALAUXILIAR.style.width="200px"; aNECESIDADESimagenSUBPESTANAPANELCENTRALAUXILIAR.style.height="66px"; aNECESIDADESimagenSUBPESTANAPANELCENTRALAUXILIAR.style.marginRight="5px";
   PANELCENTRALAUXILIAR.appendChild(aNECESIDADESimagenSUBPESTANAPANELCENTRALAUXILIAR);
   
//INICIO PONER 1NECESIDADESimagen/ACCION  
   if(i===0){
      aNECESIDADESimagenSUBPESTANAPANELCENTRALAUXILIAR.addEventListener("click", function() {
      let PANELINFERIOR=document.getElementById("panel-INFERIOR");
      PANELINFERIOR.innerHTML=""; 
      for(let j=0; j<RUTA1NECESIDADESimagenEMOCION.length; j++){
      let aNECESIDADESimagenPANELINFERIOR = document.createElement("img");  //console.log(RUTAaNECESIDADESimagen[1]);  
      aNECESIDADESimagenPANELINFERIOR.src =  RUTA1NECESIDADESimagenEMOCION[j]; //console.log(RUTA1NECESIDADESimagen[j]); 
      aNECESIDADESimagenPANELINFERIOR.style.width="70px"; aNECESIDADESimagenPANELINFERIOR.style.height="70px"; aNECESIDADESimagenPANELINFERIOR.style.marginRight="7px";
      PANELINFERIOR.appendChild(aNECESIDADESimagenPANELINFERIOR);
      
      //PONER IMAGENES EN PANEL SUPERIOR
      aNECESIDADESimagenPANELINFERIOR.addEventListener("click", function() {    
      //console.log(RUTA1NECESIDADESimagen[j]); 
      let PANELSUPERIOR=document.getElementById("panel-SUPERIOR");
      let aNECESIDADESimagenPANELSUPERIOR = document.createElement("img");//console.log(RutaImagenS);  
      aNECESIDADESimagenPANELSUPERIOR.src = RUTA1NECESIDADESimagenEMOCION[j]; //console.log(RUTA1NECESIDADESimagen[1]); 
      aNECESIDADESimagenPANELSUPERIOR.style.width="70px"; aNECESIDADESimagenPANELSUPERIOR.style.height="70px"; aNECESIDADESimagenPANELSUPERIOR.style.marginRight="7px";
      PANELSUPERIOR.appendChild(aNECESIDADESimagenPANELSUPERIOR);
      
      //REPRODUCIR PANEL SUPERIOR         
      aNECESIDADESimagenPANELSUPERIOR.addEventListener("click", function() {
      const audio = new Audio(RUTA1NECESIDADESaudioEMOCION[j].replace(".png", ".wav"));
      audio.play();
      });  
      });
      }
      });
   }
//FIN PONER 1NECESIDADESimagen/ACCION
//INICIO PONER 1NECESIDADESimagen/EMOCION 
   if(i===1){
      aNECESIDADESimagenSUBPESTANAPANELCENTRALAUXILIAR.addEventListener("click", function() {
      let PANELINFERIOR=document.getElementById("panel-INFERIOR");
      PANELINFERIOR.innerHTML=""; 
      for(let j=0; j<RUTA1NECESIDADESimagenGESTOS.length; j++){
      let aNECESIDADESimagenPANELINFERIOR = document.createElement("img");  //console.log(RUTAaNECESIDADESimagen[1]);  
      aNECESIDADESimagenPANELINFERIOR.src =  RUTA1NECESIDADESimagenGESTOS[j]; //console.log(RUTA1NECESIDADESimagen[j]); 
      aNECESIDADESimagenPANELINFERIOR.style.width="70px"; aNECESIDADESimagenPANELINFERIOR.style.height="70px"; aNECESIDADESimagenPANELINFERIOR.style.marginRight="7px";
      PANELINFERIOR.appendChild(aNECESIDADESimagenPANELINFERIOR);
      
      //PONER IMAGENES EN PANEL SUPERIOR
      aNECESIDADESimagenPANELINFERIOR.addEventListener("click", function() {    
      //console.log(RUTA1NECESIDADESimagen[j]); 
      let PANELSUPERIOR=document.getElementById("panel-SUPERIOR");
      let aNECESIDADESimagenPANELSUPERIOR = document.createElement("img");//console.log(RutaImagenS);  
      aNECESIDADESimagenPANELSUPERIOR.src = RUTA1NECESIDADESimagenGESTOS[j]; //console.log(RUTA1NECESIDADESimagen[1]); 
      aNECESIDADESimagenPANELSUPERIOR.style.width="70px"; aNECESIDADESimagenPANELSUPERIOR.style.height="70px"; aNECESIDADESimagenPANELSUPERIOR.style.marginRight="7px";
      PANELSUPERIOR.appendChild(aNECESIDADESimagenPANELSUPERIOR);
      
        //REPRODUCIR PANEL SUPERIOR         
      aNECESIDADESimagenPANELSUPERIOR.addEventListener("click", function() {
      const audio = new Audio(RUTA1NECESIDADESaudioGESTOS[j].replace(".png", ".wav"));
      audio.play();
      });  
      });
      }
      });
   }
//FIN PONER 1NECESIDADESimagen/ACCION
//INICIO PONER 1NECESIDADESimagen/GESTOS 
   if(i===2){
      aNECESIDADESimagenSUBPESTANAPANELCENTRALAUXILIAR.addEventListener("click", function() {
      let PANELINFERIOR=document.getElementById("panel-INFERIOR");
      PANELINFERIOR.innerHTML=""; 
      for(let j=0; j<RUTA1NECESIDADESimagenVERDURAS.length; j++){
      let aNECESIDADESimagenPANELINFERIOR = document.createElement("img");  //console.log(RUTAaNECESIDADESimagen[1]);  
      aNECESIDADESimagenPANELINFERIOR.src =  RUTA1NECESIDADESimagenVERDURAS[j]; //console.log(RUTA1NECESIDADESimagen[j]); 
      aNECESIDADESimagenPANELINFERIOR.style.width="70px"; aNECESIDADESimagenPANELINFERIOR.style.height="70px"; aNECESIDADESimagenPANELINFERIOR.style.marginRight="7px";
      PANELINFERIOR.appendChild(aNECESIDADESimagenPANELINFERIOR);
      
      //PONER IMAGENES EN PANEL SUPERIOR
      aNECESIDADESimagenPANELINFERIOR.addEventListener("click", function() {    
      //console.log(RUTA1NECESIDADESimagen[j]); 
      let PANELSUPERIOR=document.getElementById("panel-SUPERIOR");
      let aNECESIDADESimagenPANELSUPERIOR = document.createElement("img");//console.log(RutaImagenS);  
      aNECESIDADESimagenPANELSUPERIOR.src = RUTA1NECESIDADESimagenVERDURAS[j]; //console.log(RUTA1NECESIDADESimagen[1]); 
      aNECESIDADESimagenPANELSUPERIOR.style.width="70px"; aNECESIDADESimagenPANELSUPERIOR.style.height="70px"; aNECESIDADESimagenPANELSUPERIOR.style.marginRight="7px";
      PANELSUPERIOR.appendChild(aNECESIDADESimagenPANELSUPERIOR);
      
        //REPRODUCIR PANEL SUPERIOR         
      aNECESIDADESimagenPANELSUPERIOR.addEventListener("click", function() {
      const audio = new Audio(RUTA1NECESIDADESaudioVERDURAS[j].replace(".png", ".wav"));
      audio.play();
      });  
      });
      }
      });
   }
//FIN PONER 1NECESIDADESimagen/GESTOS
//INICIO PONER 1NECESIDADESimagen/GESTOS 
   if(i===3){
      aNECESIDADESimagenSUBPESTANAPANELCENTRALAUXILIAR.addEventListener("click", function() {
      let PANELINFERIOR=document.getElementById("panel-INFERIOR");
      PANELINFERIOR.innerHTML=""; 
      for(let j=0; j<RUTA1NECESIDADESimagenUTILES.length; j++){
      let aNECESIDADESimagenPANELINFERIOR = document.createElement("img");  //console.log(RUTAaNECESIDADESimagen[1]);  
      aNECESIDADESimagenPANELINFERIOR.src =  RUTA1NECESIDADESimagenUTILES[j]; //console.log(RUTA1NECESIDADESimagen[j]); 
      aNECESIDADESimagenPANELINFERIOR.style.width="70px"; aNECESIDADESimagenPANELINFERIOR.style.height="70px"; aNECESIDADESimagenPANELINFERIOR.style.marginRight="7px";
      PANELINFERIOR.appendChild(aNECESIDADESimagenPANELINFERIOR);
      
      //PONER IMAGENES EN PANEL SUPERIOR
      aNECESIDADESimagenPANELINFERIOR.addEventListener("click", function() {    
      //console.log(RUTA1NECESIDADESimagen[j]); 
      let PANELSUPERIOR=document.getElementById("panel-SUPERIOR");
      let aNECESIDADESimagenPANELSUPERIOR = document.createElement("img");//console.log(RutaImagenS);  
      aNECESIDADESimagenPANELSUPERIOR.src = RUTA1NECESIDADESimagenUTILES[j]; //console.log(RUTA1NECESIDADESimagen[1]); 
      aNECESIDADESimagenPANELSUPERIOR.style.width="70px"; aNECESIDADESimagenPANELSUPERIOR.style.height="70px"; aNECESIDADESimagenPANELSUPERIOR.style.marginRight="7px";
      PANELSUPERIOR.appendChild(aNECESIDADESimagenPANELSUPERIOR);
      
        //REPRODUCIR PANEL SUPERIOR         
      aNECESIDADESimagenPANELSUPERIOR.addEventListener("click", function() {
      const audio = new Audio(RUTA1NECESIDADESaudioUTILES[j].replace(".png", ".wav"));
      audio.play();
      });  
      });
      }
      });
   }
//FIN PONER 1NECESIDADESimagen/GESTOS
  }
}
////////////FIN COLOCA 333COLEGIOimagen Y COLEGIOimagenSUBPESTANA EN PANELES












////////////INICIO 444ACTIVIDADESimagen Y 444ACTIVIDADESimagenSUBPESTANA EN PANELES
function mostrar4ACTIVIDADESimagen(){
var RUTA1NECESIDADESimagenACCION = <?php echo $RUTA4ACTIVIDADESimagenDIVERSIONJSON; ?>;
var RUTA1NECESIDADESaudioACCION = <?php echo $RUTA4ACTIVIDADESaudioDIVERSIONJSON; ?>; 

var RUTA1NECESIDADESimagenEMOCION = <?php echo $RUTA4ACTIVIDADESimagenHOGARJSON; ?>;
var RUTA1NECESIDADESaudioEMOCION = <?php echo $RUTA4ACTIVIDADESaudioHOGARJSON; ?>; 

var RUTA1NECESIDADESimagenGESTOS = <?php echo $RUTA4ACTIVIDADESimagenLUGARESJSON; ?>;
var RUTA1NECESIDADESaudioGESTOS = <?php echo $RUTA4ACTIVIDADESaudioLUGARESJSON; ?>; 

var RUTA1NECESIDADESimagenFRUTAS = <?php echo $RUTA4ACTIVIDADESimagenVIAJESJSON; ?>;
var RUTA1NECESIDADESaudioFRUTAS = <?php echo $RUTA4ACTIVIDADESaudioVIAJESJSON; ?>; 

var RUTA1NECESIDADESimagenSUBPESTANA = <?php echo $RUTA4ACTIVIDADESimagenSUBPESTANAJSON; ?>;
                                               
//let PANELCENTRALAUXILIAR = document.querySelector("panel-CENTRALAUXILIAR");
let PANELCENTRALAUXILIAR = document.getElementById("panel-CENTRALAUXILIAR");
PANELCENTRALAUXILIAR.innerHTML=""; 

//PONER IMAGENES EN PANEL CENTRAL AUXILIAR
for(var i=0; i<RUTA1NECESIDADESimagenSUBPESTANA.length; i++){
   //let imagen = document.createElement("img");
   //imagen.src = "ALIMENTOimagen/" + elementos[i];
   //panelinferior.appendChild(boton);
   var aNECESIDADESimagenSUBPESTANAPANELCENTRALAUXILIAR = document.createElement("img");  //console.log(RI[i]);  //console.log(RISP[1]);
   aNECESIDADESimagenSUBPESTANAPANELCENTRALAUXILIAR.src = RUTA1NECESIDADESimagenSUBPESTANA[i];
   aNECESIDADESimagenSUBPESTANAPANELCENTRALAUXILIAR.style.width="200px"; aNECESIDADESimagenSUBPESTANAPANELCENTRALAUXILIAR.style.height="66px"; aNECESIDADESimagenSUBPESTANAPANELCENTRALAUXILIAR.style.marginRight="5px";
   PANELCENTRALAUXILIAR.appendChild(aNECESIDADESimagenSUBPESTANAPANELCENTRALAUXILIAR);
   
//INICIO PONER 1NECESIDADESimagen/ACCION  
   if(i===0){
      aNECESIDADESimagenSUBPESTANAPANELCENTRALAUXILIAR.addEventListener("click", function() {
      let PANELINFERIOR=document.getElementById("panel-INFERIOR");
      PANELINFERIOR.innerHTML=""; 
      for(let j=0; j<RUTA1NECESIDADESimagenACCION.length; j++){
      let aNECESIDADESimagenPANELINFERIOR = document.createElement("img");  //console.log(RUTAaNECESIDADESimagen[1]);  
      aNECESIDADESimagenPANELINFERIOR.src =  RUTA1NECESIDADESimagenACCION[j]; //console.log(RUTA1NECESIDADESimagen[j]); 
      aNECESIDADESimagenPANELINFERIOR.style.width="70px"; aNECESIDADESimagenPANELINFERIOR.style.height="70px"; aNECESIDADESimagenPANELINFERIOR.style.marginRight="7px";
      PANELINFERIOR.appendChild(aNECESIDADESimagenPANELINFERIOR);
      
      //PONER IMAGENES EN PANEL SUPERIOR
      aNECESIDADESimagenPANELINFERIOR.addEventListener("click", function() {    
      //console.log(RUTA1NECESIDADESimagen[j]); 
      let PANELSUPERIOR=document.getElementById("panel-SUPERIOR");
      let aNECESIDADESimagenPANELSUPERIOR = document.createElement("img");//console.log(RutaImagenS);  
      aNECESIDADESimagenPANELSUPERIOR.src = RUTA1NECESIDADESimagenACCION[j]; //console.log(RUTA1NECESIDADESimagen[1]); 
      aNECESIDADESimagenPANELSUPERIOR.style.width="70px"; aNECESIDADESimagenPANELSUPERIOR.style.height="70px"; aNECESIDADESimagenPANELSUPERIOR.style.marginRight="7px";
      PANELSUPERIOR.appendChild(aNECESIDADESimagenPANELSUPERIOR);
      
      //REPRODUCIR PANEL SUPERIOR         
      aNECESIDADESimagenPANELSUPERIOR.addEventListener("click", function() {
      const audio = new Audio(RUTA1NECESIDADESaudioACCION[j].replace(".png", ".wav"));
      audio.play();
      });  
      });
      }
      });
   }
//FIN PONER 1NECESIDADESimagen/ACCION
//INICIO PONER 1NECESIDADESimagen/EMOCION 
   if(i===1){
      aNECESIDADESimagenSUBPESTANAPANELCENTRALAUXILIAR.addEventListener("click", function() {
      let PANELINFERIOR=document.getElementById("panel-INFERIOR");
      PANELINFERIOR.innerHTML=""; 
      for(let j=0; j<RUTA1NECESIDADESimagenEMOCION.length; j++){
      let aNECESIDADESimagenPANELINFERIOR = document.createElement("img");  //console.log(RUTAaNECESIDADESimagen[1]);  
      aNECESIDADESimagenPANELINFERIOR.src =  RUTA1NECESIDADESimagenEMOCION[j]; //console.log(RUTA1NECESIDADESimagen[j]); 
      aNECESIDADESimagenPANELINFERIOR.style.width="70px"; aNECESIDADESimagenPANELINFERIOR.style.height="70px"; aNECESIDADESimagenPANELINFERIOR.style.marginRight="7px";
      PANELINFERIOR.appendChild(aNECESIDADESimagenPANELINFERIOR);
      
      //PONER IMAGENES EN PANEL SUPERIOR
      aNECESIDADESimagenPANELINFERIOR.addEventListener("click", function() {    
      //console.log(RUTA1NECESIDADESimagen[j]); 
      let PANELSUPERIOR=document.getElementById("panel-SUPERIOR");
      let aNECESIDADESimagenPANELSUPERIOR = document.createElement("img");//console.log(RutaImagenS);  
      aNECESIDADESimagenPANELSUPERIOR.src = RUTA1NECESIDADESimagenEMOCION[j]; //console.log(RUTA1NECESIDADESimagen[1]); 
      aNECESIDADESimagenPANELSUPERIOR.style.width="70px"; aNECESIDADESimagenPANELSUPERIOR.style.height="70px"; aNECESIDADESimagenPANELSUPERIOR.style.marginRight="7px";
      PANELSUPERIOR.appendChild(aNECESIDADESimagenPANELSUPERIOR);
      
        //REPRODUCIR PANEL SUPERIOR         
      aNECESIDADESimagenPANELSUPERIOR.addEventListener("click", function() {
      const audio = new Audio(RUTA1NECESIDADESaudioEMOCION[j].replace(".png", ".wav"));
      audio.play();
      });  
      });
      }
      });
   }
//FIN PONER 1NECESIDADESimagen/ACCION
//INICIO PONER 1NECESIDADESimagen/GESTOS 
   if(i===2){
      aNECESIDADESimagenSUBPESTANAPANELCENTRALAUXILIAR.addEventListener("click", function() {
      let PANELINFERIOR=document.getElementById("panel-INFERIOR");
      PANELINFERIOR.innerHTML=""; 
      for(let j=0; j<RUTA1NECESIDADESimagenGESTOS.length; j++){
      let aNECESIDADESimagenPANELINFERIOR = document.createElement("img");  //console.log(RUTAaNECESIDADESimagen[1]);  
      aNECESIDADESimagenPANELINFERIOR.src =  RUTA1NECESIDADESimagenGESTOS[j]; //console.log(RUTA1NECESIDADESimagen[j]); 
      aNECESIDADESimagenPANELINFERIOR.style.width="70px"; aNECESIDADESimagenPANELINFERIOR.style.height="70px"; aNECESIDADESimagenPANELINFERIOR.style.marginRight="7px";
      PANELINFERIOR.appendChild(aNECESIDADESimagenPANELINFERIOR);
      
      //PONER IMAGENES EN PANEL SUPERIOR
      aNECESIDADESimagenPANELINFERIOR.addEventListener("click", function() {    
      //console.log(RUTA1NECESIDADESimagen[j]); 
      let PANELSUPERIOR=document.getElementById("panel-SUPERIOR");
      let aNECESIDADESimagenPANELSUPERIOR = document.createElement("img");//console.log(RutaImagenS);  
      aNECESIDADESimagenPANELSUPERIOR.src = RUTA1NECESIDADESimagenGESTOS[j]; //console.log(RUTA1NECESIDADESimagen[1]); 
      aNECESIDADESimagenPANELSUPERIOR.style.width="70px"; aNECESIDADESimagenPANELSUPERIOR.style.height="70px"; aNECESIDADESimagenPANELSUPERIOR.style.marginRight="7px";
      PANELSUPERIOR.appendChild(aNECESIDADESimagenPANELSUPERIOR);
      
        //REPRODUCIR PANEL SUPERIOR         
      aNECESIDADESimagenPANELSUPERIOR.addEventListener("click", function() {
      const audio = new Audio(RUTA1NECESIDADESaudioGESTOS[j].replace(".png", ".wav"));
      audio.play();
      });  
      });
      }
      });
   }
//FIN PONER 1NECESIDADESimagen/GESTOS
//INICIO PONER 1NECESIDADESimagen/GESTOS 
   if(i===3){
      aNECESIDADESimagenSUBPESTANAPANELCENTRALAUXILIAR.addEventListener("click", function() {
      let PANELINFERIOR=document.getElementById("panel-INFERIOR");
      PANELINFERIOR.innerHTML=""; 
      for(let j=0; j<RUTA1NECESIDADESimagenFRUTAS.length; j++){
      let aNECESIDADESimagenPANELINFERIOR = document.createElement("img");  //console.log(RUTAaNECESIDADESimagen[1]);  
      aNECESIDADESimagenPANELINFERIOR.src =  RUTA1NECESIDADESimagenFRUTAS[j]; //console.log(RUTA1NECESIDADESimagen[j]); 
      aNECESIDADESimagenPANELINFERIOR.style.width="70px"; aNECESIDADESimagenPANELINFERIOR.style.height="70px"; aNECESIDADESimagenPANELINFERIOR.style.marginRight="7px";
      PANELINFERIOR.appendChild(aNECESIDADESimagenPANELINFERIOR);
      
      //PONER IMAGENES EN PANEL SUPERIOR
      aNECESIDADESimagenPANELINFERIOR.addEventListener("click", function() {    
      //console.log(RUTA1NECESIDADESimagen[j]); 
      let PANELSUPERIOR=document.getElementById("panel-SUPERIOR");
      let aNECESIDADESimagenPANELSUPERIOR = document.createElement("img");//console.log(RutaImagenS);  
      aNECESIDADESimagenPANELSUPERIOR.src = RUTA1NECESIDADESimagenFRUTAS[j]; //console.log(RUTA1NECESIDADESimagen[1]); 
      aNECESIDADESimagenPANELSUPERIOR.style.width="70px"; aNECESIDADESimagenPANELSUPERIOR.style.height="70px"; aNECESIDADESimagenPANELSUPERIOR.style.marginRight="7px";
      PANELSUPERIOR.appendChild(aNECESIDADESimagenPANELSUPERIOR);
      
        //REPRODUCIR PANEL SUPERIOR         
      aNECESIDADESimagenPANELSUPERIOR.addEventListener("click", function() {
      const audio = new Audio(RUTA1NECESIDADESaudioFRUTAS[j].replace(".png", ".wav"));
      audio.play();
      });  
      });
      }
      });
   }
//FIN PONER 1NECESIDADESimagen/GESTOS

  }
}
////////////FIN COLOCA 444ACTIVIDADESimagen Y 444ACTIVIDADESimagenSUBPESTANA EN PANELES












////////////INICIO COLOCA 555ROPASimagen Y 555ROPASimagenSUBPESTANA EN PANELES
function mostrar5ROPASimagen(){
var RUTA1NECESIDADESimagenACCION = <?php echo $RUTA5ROPASimagenABRIGOJSON; ?>;
var RUTA1NECESIDADESaudioACCION = <?php echo $RUTA5ROPASaudioABRIGOJSON; ?>; 

var RUTA1NECESIDADESimagenEMOCION = <?php echo $RUTA5ROPASimagenFORMALJSON; ?>;
var RUTA1NECESIDADESaudioEMOCION = <?php echo $RUTA5ROPASaudioFORMALJSON; ?>; 

var RUTA1NECESIDADESimagenGESTOS = <?php echo $RUTA5ROPASimagenROPAJSON; ?>;
var RUTA1NECESIDADESaudioGESTOS = <?php echo $RUTA5ROPASaudioROPAJSON; ?>; 

var RUTA1NECESIDADESimagenSUBPESTANA = <?php echo $RUTA5ROPASimagenSUBPESTANAJSON; ?>;
                                               
//let PANELCENTRALAUXILIAR = document.querySelector("panel-CENTRALAUXILIAR");
let PANELCENTRALAUXILIAR = document.getElementById("panel-CENTRALAUXILIAR");
PANELCENTRALAUXILIAR.innerHTML=""; 

//PONER IMAGENES EN PANEL CENTRAL AUXILIAR
for(var i=0; i<RUTA1NECESIDADESimagenSUBPESTANA.length; i++){
   //let imagen = document.createElement("img");
   //imagen.src = "ALIMENTOimagen/" + elementos[i];
   //panelinferior.appendChild(boton);
   var aNECESIDADESimagenSUBPESTANAPANELCENTRALAUXILIAR = document.createElement("img");  //console.log(RI[i]);  //console.log(RISP[1]);
   aNECESIDADESimagenSUBPESTANAPANELCENTRALAUXILIAR.src = RUTA1NECESIDADESimagenSUBPESTANA[i];
   aNECESIDADESimagenSUBPESTANAPANELCENTRALAUXILIAR.style.width="200px"; aNECESIDADESimagenSUBPESTANAPANELCENTRALAUXILIAR.style.height="66px"; aNECESIDADESimagenSUBPESTANAPANELCENTRALAUXILIAR.style.marginRight="5px";
   PANELCENTRALAUXILIAR.appendChild(aNECESIDADESimagenSUBPESTANAPANELCENTRALAUXILIAR);
   
//INICIO PONER 1NECESIDADESimagen/ACCION  
   if(i===0){
      aNECESIDADESimagenSUBPESTANAPANELCENTRALAUXILIAR.addEventListener("click", function() {
      let PANELINFERIOR=document.getElementById("panel-INFERIOR");
      PANELINFERIOR.innerHTML=""; 
      for(let j=0; j<RUTA1NECESIDADESimagenACCION.length; j++){
      let aNECESIDADESimagenPANELINFERIOR = document.createElement("img");  //console.log(RUTAaNECESIDADESimagen[1]);  
      aNECESIDADESimagenPANELINFERIOR.src =  RUTA1NECESIDADESimagenACCION[j]; //console.log(RUTA1NECESIDADESimagen[j]); 
      aNECESIDADESimagenPANELINFERIOR.style.width="70px"; aNECESIDADESimagenPANELINFERIOR.style.height="70px"; aNECESIDADESimagenPANELINFERIOR.style.marginRight="7px";
      PANELINFERIOR.appendChild(aNECESIDADESimagenPANELINFERIOR);
      
      //PONER IMAGENES EN PANEL SUPERIOR
      aNECESIDADESimagenPANELINFERIOR.addEventListener("click", function() {    
      //console.log(RUTA1NECESIDADESimagen[j]); 
      let PANELSUPERIOR=document.getElementById("panel-SUPERIOR");
      let aNECESIDADESimagenPANELSUPERIOR = document.createElement("img");//console.log(RutaImagenS);  
      aNECESIDADESimagenPANELSUPERIOR.src = RUTA1NECESIDADESimagenACCION[j]; //console.log(RUTA1NECESIDADESimagen[1]); 
      aNECESIDADESimagenPANELSUPERIOR.style.width="70px"; aNECESIDADESimagenPANELSUPERIOR.style.height="70px"; aNECESIDADESimagenPANELSUPERIOR.style.marginRight="7px";
      PANELSUPERIOR.appendChild(aNECESIDADESimagenPANELSUPERIOR);
      
      //REPRODUCIR PANEL SUPERIOR         
      aNECESIDADESimagenPANELSUPERIOR.addEventListener("click", function() {
      const audio = new Audio(RUTA1NECESIDADESaudioACCION[j].replace(".png", ".wav"));
      audio.play();
      });  
      });
      }
      });
   }
//FIN PONER 1NECESIDADESimagen/ACCION
//INICIO PONER 1NECESIDADESimagen/EMOCION 
   if(i===1){
      aNECESIDADESimagenSUBPESTANAPANELCENTRALAUXILIAR.addEventListener("click", function() {
      let PANELINFERIOR=document.getElementById("panel-INFERIOR");
      PANELINFERIOR.innerHTML=""; 
      for(let j=0; j<RUTA1NECESIDADESimagenEMOCION.length; j++){
      let aNECESIDADESimagenPANELINFERIOR = document.createElement("img");  //console.log(RUTAaNECESIDADESimagen[1]);  
      aNECESIDADESimagenPANELINFERIOR.src =  RUTA1NECESIDADESimagenEMOCION[j]; //console.log(RUTA1NECESIDADESimagen[j]); 
      aNECESIDADESimagenPANELINFERIOR.style.width="70px"; aNECESIDADESimagenPANELINFERIOR.style.height="70px"; aNECESIDADESimagenPANELINFERIOR.style.marginRight="7px";
      PANELINFERIOR.appendChild(aNECESIDADESimagenPANELINFERIOR);
      
      //PONER IMAGENES EN PANEL SUPERIOR
      aNECESIDADESimagenPANELINFERIOR.addEventListener("click", function() {    
      //console.log(RUTA1NECESIDADESimagen[j]); 
      let PANELSUPERIOR=document.getElementById("panel-SUPERIOR");
      let aNECESIDADESimagenPANELSUPERIOR = document.createElement("img");//console.log(RutaImagenS);  
      aNECESIDADESimagenPANELSUPERIOR.src = RUTA1NECESIDADESimagenEMOCION[j]; //console.log(RUTA1NECESIDADESimagen[1]); 
      aNECESIDADESimagenPANELSUPERIOR.style.width="70px"; aNECESIDADESimagenPANELSUPERIOR.style.height="70px"; aNECESIDADESimagenPANELSUPERIOR.style.marginRight="7px";
      PANELSUPERIOR.appendChild(aNECESIDADESimagenPANELSUPERIOR);
      
        //REPRODUCIR PANEL SUPERIOR         
      aNECESIDADESimagenPANELSUPERIOR.addEventListener("click", function() {
      const audio = new Audio(RUTA1NECESIDADESaudioEMOCION[j].replace(".png", ".wav"));
      audio.play();
      });  
      });
      }
      });
   }
//FIN PONER 1NECESIDADESimagen/ACCION
//INICIO PONER 1NECESIDADESimagen/GESTOS 
   if(i===2){
      aNECESIDADESimagenSUBPESTANAPANELCENTRALAUXILIAR.addEventListener("click", function() {
      let PANELINFERIOR=document.getElementById("panel-INFERIOR");
      PANELINFERIOR.innerHTML=""; 
      for(let j=0; j<RUTA1NECESIDADESimagenGESTOS.length; j++){
      let aNECESIDADESimagenPANELINFERIOR = document.createElement("img");  //console.log(RUTAaNECESIDADESimagen[1]);  
      aNECESIDADESimagenPANELINFERIOR.src =  RUTA1NECESIDADESimagenGESTOS[j]; //console.log(RUTA1NECESIDADESimagen[j]); 
      aNECESIDADESimagenPANELINFERIOR.style.width="70px"; aNECESIDADESimagenPANELINFERIOR.style.height="70px"; aNECESIDADESimagenPANELINFERIOR.style.marginRight="7px";
      PANELINFERIOR.appendChild(aNECESIDADESimagenPANELINFERIOR);
      
      //PONER IMAGENES EN PANEL SUPERIOR
      aNECESIDADESimagenPANELINFERIOR.addEventListener("click", function() {    
      //console.log(RUTA1NECESIDADESimagen[j]); 
      let PANELSUPERIOR=document.getElementById("panel-SUPERIOR");
      let aNECESIDADESimagenPANELSUPERIOR = document.createElement("img");//console.log(RutaImagenS);  
      aNECESIDADESimagenPANELSUPERIOR.src = RUTA1NECESIDADESimagenGESTOS[j]; //console.log(RUTA1NECESIDADESimagen[1]); 
      aNECESIDADESimagenPANELSUPERIOR.style.width="70px"; aNECESIDADESimagenPANELSUPERIOR.style.height="70px"; aNECESIDADESimagenPANELSUPERIOR.style.marginRight="7px";
      PANELSUPERIOR.appendChild(aNECESIDADESimagenPANELSUPERIOR);
      
        //REPRODUCIR PANEL SUPERIOR         
      aNECESIDADESimagenPANELSUPERIOR.addEventListener("click", function() {
      const audio = new Audio(RUTA1NECESIDADESaudioGESTOS[j].replace(".png", ".wav"));
      audio.play();
      });  
      });
      }
      });
   }
//FIN PONER 1NECESIDADESimagen/GESTOS
  }
}
////////////FIN COLOCA 555ROPASimagen Y 555ROPASimagenSUBPESTANA EN PANELES












////////////INICIO COLOCA 666HIGIENEimagen Y 666HIGIENEimagenSUBPESTANA EN PANELES
function mostrar6HIGIENEimagen(){
var RUTA1NECESIDADESimagenACCION = <?php echo $RUTA6HIGIENEimagenASEOJSON; ?>;
var RUTA1NECESIDADESaudioACCION = <?php echo $RUTA6HIGIENEaudioASEOJSON; ?>; 

var RUTA1NECESIDADESimagenEMOCION = <?php echo $RUTA6HIGIENEimagenHIGIENEJSON; ?>;
var RUTA1NECESIDADESaudioEMOCION = <?php echo $RUTA6HIGIENEaudioHIGIENEJSON; ?>; 

var RUTA1NECESIDADESimagenGESTOS = <?php echo $RUTA6HIGIENEimagenLIMPIEZAJSON; ?>;
var RUTA1NECESIDADESaudioGESTOS = <?php echo $RUTA6HIGIENEaudioLIMPIEZAJSON; ?>; 

var RUTA1NECESIDADESimagenSUBPESTANA = <?php echo $RUTA6HIGIENEimagenSUBPESTANAJSON; ?>;
                                               
//let PANELCENTRALAUXILIAR = document.querySelector("panel-CENTRALAUXILIAR");
let PANELCENTRALAUXILIAR = document.getElementById("panel-CENTRALAUXILIAR");
PANELCENTRALAUXILIAR.innerHTML=""; 

//PONER IMAGENES EN PANEL CENTRAL AUXILIAR
for(var i=0; i<RUTA1NECESIDADESimagenSUBPESTANA.length; i++){
   //let imagen = document.createElement("img");
   //imagen.src = "ALIMENTOimagen/" + elementos[i];
   //panelinferior.appendChild(boton);
   var aNECESIDADESimagenSUBPESTANAPANELCENTRALAUXILIAR = document.createElement("img");  //console.log(RI[i]);  //console.log(RISP[1]);
   aNECESIDADESimagenSUBPESTANAPANELCENTRALAUXILIAR.src = RUTA1NECESIDADESimagenSUBPESTANA[i];
   aNECESIDADESimagenSUBPESTANAPANELCENTRALAUXILIAR.style.width="200px"; aNECESIDADESimagenSUBPESTANAPANELCENTRALAUXILIAR.style.height="66px"; aNECESIDADESimagenSUBPESTANAPANELCENTRALAUXILIAR.style.marginRight="5px";
   PANELCENTRALAUXILIAR.appendChild(aNECESIDADESimagenSUBPESTANAPANELCENTRALAUXILIAR);
   
//INICIO PONER 1NECESIDADESimagen/ACCION  
   if(i===0){
      aNECESIDADESimagenSUBPESTANAPANELCENTRALAUXILIAR.addEventListener("click", function() {
      let PANELINFERIOR=document.getElementById("panel-INFERIOR");
      PANELINFERIOR.innerHTML=""; 
      for(let j=0; j<RUTA1NECESIDADESimagenACCION.length; j++){
      let aNECESIDADESimagenPANELINFERIOR = document.createElement("img");  //console.log(RUTAaNECESIDADESimagen[1]);  
      aNECESIDADESimagenPANELINFERIOR.src =  RUTA1NECESIDADESimagenACCION[j]; //console.log(RUTA1NECESIDADESimagen[j]); 
      aNECESIDADESimagenPANELINFERIOR.style.width="70px"; aNECESIDADESimagenPANELINFERIOR.style.height="70px"; aNECESIDADESimagenPANELINFERIOR.style.marginRight="7px";
      PANELINFERIOR.appendChild(aNECESIDADESimagenPANELINFERIOR);
      
      //PONER IMAGENES EN PANEL SUPERIOR
      aNECESIDADESimagenPANELINFERIOR.addEventListener("click", function() {    
      //console.log(RUTA1NECESIDADESimagen[j]); 
      let PANELSUPERIOR=document.getElementById("panel-SUPERIOR");
      let aNECESIDADESimagenPANELSUPERIOR = document.createElement("img");//console.log(RutaImagenS);  
      aNECESIDADESimagenPANELSUPERIOR.src = RUTA1NECESIDADESimagenACCION[j]; //console.log(RUTA1NECESIDADESimagen[1]); 
      aNECESIDADESimagenPANELSUPERIOR.style.width="70px"; aNECESIDADESimagenPANELSUPERIOR.style.height="70px"; aNECESIDADESimagenPANELSUPERIOR.style.marginRight="7px";
      PANELSUPERIOR.appendChild(aNECESIDADESimagenPANELSUPERIOR);
      
      //REPRODUCIR PANEL SUPERIOR         
      aNECESIDADESimagenPANELSUPERIOR.addEventListener("click", function() {
      const audio = new Audio(RUTA1NECESIDADESaudioACCION[j].replace(".png", ".wav"));
      audio.play();
      });  
      });
      }
      });
   }
//FIN PONER 1NECESIDADESimagen/ACCION
//INICIO PONER 1NECESIDADESimagen/EMOCION 
   if(i===1){
      aNECESIDADESimagenSUBPESTANAPANELCENTRALAUXILIAR.addEventListener("click", function() {
      let PANELINFERIOR=document.getElementById("panel-INFERIOR");
      PANELINFERIOR.innerHTML=""; 
      for(let j=0; j<RUTA1NECESIDADESimagenEMOCION.length; j++){
      let aNECESIDADESimagenPANELINFERIOR = document.createElement("img");  //console.log(RUTAaNECESIDADESimagen[1]);  
      aNECESIDADESimagenPANELINFERIOR.src =  RUTA1NECESIDADESimagenEMOCION[j]; //console.log(RUTA1NECESIDADESimagen[j]); 
      aNECESIDADESimagenPANELINFERIOR.style.width="70px"; aNECESIDADESimagenPANELINFERIOR.style.height="70px"; aNECESIDADESimagenPANELINFERIOR.style.marginRight="7px";
      PANELINFERIOR.appendChild(aNECESIDADESimagenPANELINFERIOR);
      
      //PONER IMAGENES EN PANEL SUPERIOR
      aNECESIDADESimagenPANELINFERIOR.addEventListener("click", function() {    
      //console.log(RUTA1NECESIDADESimagen[j]); 
      let PANELSUPERIOR=document.getElementById("panel-SUPERIOR");
      let aNECESIDADESimagenPANELSUPERIOR = document.createElement("img");//console.log(RutaImagenS);  
      aNECESIDADESimagenPANELSUPERIOR.src = RUTA1NECESIDADESimagenEMOCION[j]; //console.log(RUTA1NECESIDADESimagen[1]); 
      aNECESIDADESimagenPANELSUPERIOR.style.width="70px"; aNECESIDADESimagenPANELSUPERIOR.style.height="70px"; aNECESIDADESimagenPANELSUPERIOR.style.marginRight="7px";
      PANELSUPERIOR.appendChild(aNECESIDADESimagenPANELSUPERIOR);
      
        //REPRODUCIR PANEL SUPERIOR         
      aNECESIDADESimagenPANELSUPERIOR.addEventListener("click", function() {
      const audio = new Audio(RUTA1NECESIDADESaudioEMOCION[j].replace(".png", ".wav"));
      audio.play();
      });  
      });
      }
      });
   }
//FIN PONER 1NECESIDADESimagen/ACCION
//INICIO PONER 1NECESIDADESimagen/GESTOS 
   if(i===2){
      aNECESIDADESimagenSUBPESTANAPANELCENTRALAUXILIAR.addEventListener("click", function() {
      let PANELINFERIOR=document.getElementById("panel-INFERIOR");
      PANELINFERIOR.innerHTML=""; 
      for(let j=0; j<RUTA1NECESIDADESimagenGESTOS.length; j++){
      let aNECESIDADESimagenPANELINFERIOR = document.createElement("img");  //console.log(RUTAaNECESIDADESimagen[1]);  
      aNECESIDADESimagenPANELINFERIOR.src =  RUTA1NECESIDADESimagenGESTOS[j]; //console.log(RUTA1NECESIDADESimagen[j]); 
      aNECESIDADESimagenPANELINFERIOR.style.width="70px"; aNECESIDADESimagenPANELINFERIOR.style.height="70px"; aNECESIDADESimagenPANELINFERIOR.style.marginRight="7px";
      PANELINFERIOR.appendChild(aNECESIDADESimagenPANELINFERIOR);
      
      //PONER IMAGENES EN PANEL SUPERIOR
      aNECESIDADESimagenPANELINFERIOR.addEventListener("click", function() {    
      //console.log(RUTA1NECESIDADESimagen[j]); 
      let PANELSUPERIOR=document.getElementById("panel-SUPERIOR");
      let aNECESIDADESimagenPANELSUPERIOR = document.createElement("img");//console.log(RutaImagenS);  
      aNECESIDADESimagenPANELSUPERIOR.src = RUTA1NECESIDADESimagenGESTOS[j]; //console.log(RUTA1NECESIDADESimagen[1]); 
      aNECESIDADESimagenPANELSUPERIOR.style.width="70px"; aNECESIDADESimagenPANELSUPERIOR.style.height="70px"; aNECESIDADESimagenPANELSUPERIOR.style.marginRight="7px";
      PANELSUPERIOR.appendChild(aNECESIDADESimagenPANELSUPERIOR);
      
        //REPRODUCIR PANEL SUPERIOR         
      aNECESIDADESimagenPANELSUPERIOR.addEventListener("click", function() {
      const audio = new Audio(RUTA1NECESIDADESaudioGESTOS[j].replace(".png", ".wav"));
      audio.play();
      });  
      });
      }
      });
   }
//FIN PONER 1NECESIDADESimagen/GESTOS
  }
}
////////////FIN COLOCA 666HIGIENEimagen Y 666HIGIENEimagenSUBPESTANA EN PANELES












////////////INICIO COLOCA 666HIGIENEimagen Y 666HIGIENEimagenSUBPESTANA EN PANELES
function mostrar7CUERPOimagen(){
var RUTA1NECESIDADESimagenACCION = <?php echo $RUTA7CUERPOimagenCUERPOJSON; ?>;
var RUTA1NECESIDADESaudioACCION = <?php echo $RUTA7CUERPOaudioCUERPOJSON; ?>; 

var RUTA1NECESIDADESimagenSUBPESTANA = <?php echo $RUTA7CUERPOimagenSUBPESTANAJSON; ?>;
                                               
//let PANELCENTRALAUXILIAR = document.querySelector("panel-CENTRALAUXILIAR");
let PANELCENTRALAUXILIAR = document.getElementById("panel-CENTRALAUXILIAR");
PANELCENTRALAUXILIAR.innerHTML=""; 

//PONER IMAGENES EN PANEL CENTRAL AUXILIAR
for(var i=0; i<RUTA1NECESIDADESimagenSUBPESTANA.length; i++){
   //let imagen = document.createElement("img");
   //imagen.src = "ALIMENTOimagen/" + elementos[i];
   //panelinferior.appendChild(boton);
   var aNECESIDADESimagenSUBPESTANAPANELCENTRALAUXILIAR = document.createElement("img");  //console.log(RI[i]);  //console.log(RISP[1]);
   aNECESIDADESimagenSUBPESTANAPANELCENTRALAUXILIAR.src = RUTA1NECESIDADESimagenSUBPESTANA[i];
   aNECESIDADESimagenSUBPESTANAPANELCENTRALAUXILIAR.style.width="200px"; aNECESIDADESimagenSUBPESTANAPANELCENTRALAUXILIAR.style.height="66px"; aNECESIDADESimagenSUBPESTANAPANELCENTRALAUXILIAR.style.marginRight="5px";
   PANELCENTRALAUXILIAR.appendChild(aNECESIDADESimagenSUBPESTANAPANELCENTRALAUXILIAR);
   
//INICIO PONER 1NECESIDADESimagen/ACCION  
   if(i===0){
      aNECESIDADESimagenSUBPESTANAPANELCENTRALAUXILIAR.addEventListener("click", function() {
      let PANELINFERIOR=document.getElementById("panel-INFERIOR");
      PANELINFERIOR.innerHTML=""; 
      for(let j=0; j<RUTA1NECESIDADESimagenACCION.length; j++){
      let aNECESIDADESimagenPANELINFERIOR = document.createElement("img");  //console.log(RUTAaNECESIDADESimagen[1]);  
      aNECESIDADESimagenPANELINFERIOR.src =  RUTA1NECESIDADESimagenACCION[j]; //console.log(RUTA1NECESIDADESimagen[j]); 
      aNECESIDADESimagenPANELINFERIOR.style.width="70px"; aNECESIDADESimagenPANELINFERIOR.style.height="70px"; aNECESIDADESimagenPANELINFERIOR.style.marginRight="7px";
      PANELINFERIOR.appendChild(aNECESIDADESimagenPANELINFERIOR);
      
      //PONER IMAGENES EN PANEL SUPERIOR
      aNECESIDADESimagenPANELINFERIOR.addEventListener("click", function() {    
      //console.log(RUTA1NECESIDADESimagen[j]); 
      let PANELSUPERIOR=document.getElementById("panel-SUPERIOR");
      let aNECESIDADESimagenPANELSUPERIOR = document.createElement("img");//console.log(RutaImagenS);  
      aNECESIDADESimagenPANELSUPERIOR.src = RUTA1NECESIDADESimagenACCION[j]; //console.log(RUTA1NECESIDADESimagen[1]); 
      aNECESIDADESimagenPANELSUPERIOR.style.width="70px"; aNECESIDADESimagenPANELSUPERIOR.style.height="70px"; aNECESIDADESimagenPANELSUPERIOR.style.marginRight="7px";
      PANELSUPERIOR.appendChild(aNECESIDADESimagenPANELSUPERIOR);
      
      //REPRODUCIR PANEL SUPERIOR         
      aNECESIDADESimagenPANELSUPERIOR.addEventListener("click", function() {
      const audio = new Audio(RUTA1NECESIDADESaudioACCION[j].replace(".png", ".wav"));
      audio.play();
      });  
      });
      }
      });
   }
//FIN PONER 1NECESIDADESimagen/ACCION
  }
}
////////////FIN COLOCA 666HIGIENEimagen Y 666HIGIENEimagenSUBPESTANA EN PANELES












////////////INICIO COLOCA 888ANIMALESimagen Y 888ANIMALESimagenSUBPESTANA EN PANELES
function mostrar8ANIMALESimagen(){
var RUTA1NECESIDADESimagenACCION = <?php echo $RUTA8ANIMALESimagenANIMALESJSON; ?>;
var RUTA1NECESIDADESaudioACCION = <?php echo $RUTA8ANIMALESaudioANIMALESJSON; ?>; 

var RUTA1NECESIDADESimagenEMOCION = <?php echo $RUTA8ANIMALESimagenAVESJSON; ?>;
var RUTA1NECESIDADESaudioEMOCION = <?php echo $RUTA8ANIMALESaudioAVESJSON; ?>; 

var RUTA1NECESIDADESimagenGESTOS = <?php echo $RUTA8ANIMALESimagenMARINOSJSON; ?>;
var RUTA1NECESIDADESaudioGESTOS = <?php echo $RUTA8ANIMALESaudioMARINOSJSON; ?>; 

var RUTA1NECESIDADESimagenTERRESTRES = <?php echo $RUTA8ANIMALESimagenTERRESTRESJSON; ?>;
var RUTA1NECESIDADESaudioTERRESTRES = <?php echo $RUTA8ANIMALESaudioTERRESTRESJSON; ?>; 

var RUTA1NECESIDADESimagenSUBPESTANA = <?php echo $RUTA8ANIMALESimagenSUBPESTANAJSON; ?>;
                                               
//let PANELCENTRALAUXILIAR = document.querySelector("panel-CENTRALAUXILIAR");
let PANELCENTRALAUXILIAR = document.getElementById("panel-CENTRALAUXILIAR");
PANELCENTRALAUXILIAR.innerHTML=""; 

//PONER IMAGENES EN PANEL CENTRAL AUXILIAR
for(var i=0; i<RUTA1NECESIDADESimagenSUBPESTANA.length; i++){
   //let imagen = document.createElement("img");
   //imagen.src = "ALIMENTOimagen/" + elementos[i];
   //panelinferior.appendChild(boton);
   var aNECESIDADESimagenSUBPESTANAPANELCENTRALAUXILIAR = document.createElement("img");  //console.log(RI[i]);  //console.log(RISP[1]);
   aNECESIDADESimagenSUBPESTANAPANELCENTRALAUXILIAR.src = RUTA1NECESIDADESimagenSUBPESTANA[i];
   aNECESIDADESimagenSUBPESTANAPANELCENTRALAUXILIAR.style.width="200px"; aNECESIDADESimagenSUBPESTANAPANELCENTRALAUXILIAR.style.height="66px"; aNECESIDADESimagenSUBPESTANAPANELCENTRALAUXILIAR.style.marginRight="5px";
   PANELCENTRALAUXILIAR.appendChild(aNECESIDADESimagenSUBPESTANAPANELCENTRALAUXILIAR);
   
//INICIO PONER 888ANIMALESimagen/ANIMALES
   if(i===0){
      aNECESIDADESimagenSUBPESTANAPANELCENTRALAUXILIAR.addEventListener("click", function() {
      let PANELINFERIOR=document.getElementById("panel-INFERIOR");
      PANELINFERIOR.innerHTML=""; 
      for(let j=0; j<RUTA1NECESIDADESimagenACCION.length; j++){
      let aNECESIDADESimagenPANELINFERIOR = document.createElement("img");  //console.log(RUTAaNECESIDADESimagen[1]);  
      aNECESIDADESimagenPANELINFERIOR.src =  RUTA1NECESIDADESimagenACCION[j]; //console.log(RUTA1NECESIDADESimagen[j]); 
      aNECESIDADESimagenPANELINFERIOR.style.width="70px"; aNECESIDADESimagenPANELINFERIOR.style.height="70px"; aNECESIDADESimagenPANELINFERIOR.style.marginRight="7px";
      PANELINFERIOR.appendChild(aNECESIDADESimagenPANELINFERIOR);
      
      //PONER IMAGENES EN PANEL SUPERIOR
      aNECESIDADESimagenPANELINFERIOR.addEventListener("click", function() {    
      //console.log(RUTA1NECESIDADESimagen[j]); 
      let PANELSUPERIOR=document.getElementById("panel-SUPERIOR");
      let aNECESIDADESimagenPANELSUPERIOR = document.createElement("img");//console.log(RutaImagenS);  
      aNECESIDADESimagenPANELSUPERIOR.src = RUTA1NECESIDADESimagenACCION[j]; //console.log(RUTA1NECESIDADESimagen[1]); 
      aNECESIDADESimagenPANELSUPERIOR.style.width="70px"; aNECESIDADESimagenPANELSUPERIOR.style.height="70px"; aNECESIDADESimagenPANELSUPERIOR.style.marginRight="7px";
      PANELSUPERIOR.appendChild(aNECESIDADESimagenPANELSUPERIOR);
      
      //REPRODUCIR PANEL SUPERIOR         
      aNECESIDADESimagenPANELSUPERIOR.addEventListener("click", function() {
      const audio = new Audio(RUTA1NECESIDADESaudioACCION[j].replace(".png", ".wav"));
      audio.play();
      });  
      });
      }
      });
   }
//FIN PONER 888ANIMALESimagen/ANIMALES
//INICIO PONER 888ANIMALESimagen/AVES
   if(i===1){
      aNECESIDADESimagenSUBPESTANAPANELCENTRALAUXILIAR.addEventListener("click", function() {
      let PANELINFERIOR=document.getElementById("panel-INFERIOR");
      PANELINFERIOR.innerHTML=""; 
      for(let j=0; j<RUTA1NECESIDADESimagenEMOCION.length; j++){
      let aNECESIDADESimagenPANELINFERIOR = document.createElement("img");  //console.log(RUTAaNECESIDADESimagen[1]);  
      aNECESIDADESimagenPANELINFERIOR.src =  RUTA1NECESIDADESimagenEMOCION[j]; //console.log(RUTA1NECESIDADESimagen[j]); 
      aNECESIDADESimagenPANELINFERIOR.style.width="70px"; aNECESIDADESimagenPANELINFERIOR.style.height="70px"; aNECESIDADESimagenPANELINFERIOR.style.marginRight="7px";
      PANELINFERIOR.appendChild(aNECESIDADESimagenPANELINFERIOR);
      
      //PONER IMAGENES EN PANEL SUPERIOR
      aNECESIDADESimagenPANELINFERIOR.addEventListener("click", function() {    
      //console.log(RUTA1NECESIDADESimagen[j]); 
      let PANELSUPERIOR=document.getElementById("panel-SUPERIOR");
      let aNECESIDADESimagenPANELSUPERIOR = document.createElement("img");//console.log(RutaImagenS);  
      aNECESIDADESimagenPANELSUPERIOR.src = RUTA1NECESIDADESimagenEMOCION[j]; //console.log(RUTA1NECESIDADESimagen[1]); 
      aNECESIDADESimagenPANELSUPERIOR.style.width="70px"; aNECESIDADESimagenPANELSUPERIOR.style.height="70px"; aNECESIDADESimagenPANELSUPERIOR.style.marginRight="7px";
      PANELSUPERIOR.appendChild(aNECESIDADESimagenPANELSUPERIOR);
      
        //REPRODUCIR PANEL SUPERIOR         
      aNECESIDADESimagenPANELSUPERIOR.addEventListener("click", function() {
      const audio = new Audio(RUTA1NECESIDADESaudioEMOCION[j].replace(".png", ".wav"));
      audio.play();
      });  
      });
      }
      });
   }
//FIN PONER 8ANIMALESimagen/AVES
//INICIO PONER 8ANIMALESimagen/MARINOS
   if(i===2){
      aNECESIDADESimagenSUBPESTANAPANELCENTRALAUXILIAR.addEventListener("click", function() {
      let PANELINFERIOR=document.getElementById("panel-INFERIOR");
      PANELINFERIOR.innerHTML=""; 
      for(let j=0; j<RUTA1NECESIDADESimagenGESTOS.length; j++){
      let aNECESIDADESimagenPANELINFERIOR = document.createElement("img");  //console.log(RUTAaNECESIDADESimagen[1]);  
      aNECESIDADESimagenPANELINFERIOR.src =  RUTA1NECESIDADESimagenGESTOS[j]; //console.log(RUTA1NECESIDADESimagen[j]); 
      aNECESIDADESimagenPANELINFERIOR.style.width="70px"; aNECESIDADESimagenPANELINFERIOR.style.height="70px"; aNECESIDADESimagenPANELINFERIOR.style.marginRight="7px";
      PANELINFERIOR.appendChild(aNECESIDADESimagenPANELINFERIOR);
      
      //PONER IMAGENES EN PANEL SUPERIOR
      aNECESIDADESimagenPANELINFERIOR.addEventListener("click", function() {    
      //console.log(RUTA1NECESIDADESimagen[j]); 
      let PANELSUPERIOR=document.getElementById("panel-SUPERIOR");
      let aNECESIDADESimagenPANELSUPERIOR = document.createElement("img");//console.log(RutaImagenS);  
      aNECESIDADESimagenPANELSUPERIOR.src = RUTA1NECESIDADESimagenGESTOS[j]; //console.log(RUTA1NECESIDADESimagen[1]); 
      aNECESIDADESimagenPANELSUPERIOR.style.width="70px"; aNECESIDADESimagenPANELSUPERIOR.style.height="70px"; aNECESIDADESimagenPANELSUPERIOR.style.marginRight="7px";
      PANELSUPERIOR.appendChild(aNECESIDADESimagenPANELSUPERIOR);
      
        //REPRODUCIR PANEL SUPERIOR         
      aNECESIDADESimagenPANELSUPERIOR.addEventListener("click", function() {
      const audio = new Audio(RUTA1NECESIDADESaudioGESTOS[j].replace(".png", ".wav"));
      audio.play();
      });  
      });
      }
      });
   }
//FIN PONER 888ANIMALESimagen/MARINOS
//INICIO PONER 888ANIMALESimagen/TERRESTRES
   if(i===3){
      aNECESIDADESimagenSUBPESTANAPANELCENTRALAUXILIAR.addEventListener("click", function() {
      let PANELINFERIOR=document.getElementById("panel-INFERIOR");
      PANELINFERIOR.innerHTML=""; 
      for(let j=0; j<RUTA1NECESIDADESimagenTERRESTRES.length; j++){
      let aNECESIDADESimagenPANELINFERIOR = document.createElement("img");  //console.log(RUTAaNECESIDADESimagen[1]);  
      aNECESIDADESimagenPANELINFERIOR.src =  RUTA1NECESIDADESimagenTERRESTRES[j]; //console.log(RUTA1NECESIDADESimagen[j]); 
      aNECESIDADESimagenPANELINFERIOR.style.width="70px"; aNECESIDADESimagenPANELINFERIOR.style.height="70px"; aNECESIDADESimagenPANELINFERIOR.style.marginRight="7px";
      PANELINFERIOR.appendChild(aNECESIDADESimagenPANELINFERIOR);
      
      //PONER IMAGENES EN PANEL SUPERIOR
      aNECESIDADESimagenPANELINFERIOR.addEventListener("click", function() {    
      //console.log(RUTA1NECESIDADESimagen[j]); 
      let PANELSUPERIOR=document.getElementById("panel-SUPERIOR");
      let aNECESIDADESimagenPANELSUPERIOR = document.createElement("img");//console.log(RutaImagenS);  
      aNECESIDADESimagenPANELSUPERIOR.src = RUTA1NECESIDADESimagenTERRESTRES[j]; //console.log(RUTA1NECESIDADESimagen[1]); 
      aNECESIDADESimagenPANELSUPERIOR.style.width="70px"; aNECESIDADESimagenPANELSUPERIOR.style.height="70px"; aNECESIDADESimagenPANELSUPERIOR.style.marginRight="7px";
      PANELSUPERIOR.appendChild(aNECESIDADESimagenPANELSUPERIOR);
      
        //REPRODUCIR PANEL SUPERIOR         
      aNECESIDADESimagenPANELSUPERIOR.addEventListener("click", function() {
      const audio = new Audio(RUTA1NECESIDADESaudioTERRESTRES[j].replace(".png", ".wav"));
      audio.play();
      });  
      });
      }
      });
   }
//FIN PONER 888ANIMALESimagen/TERRESTRES
  }
}
////////////FIN COLOCA 888ANIMALESimagen Y 888ANIMALESimagenSUBPESTANA EN PANELES












////////////INICIO COLOCA 888ANIMALESimagen Y 888ANIMALESimagenSUBPESTANA EN PANELES
function mostrar9OTROSimagen(){
var RUTA1NECESIDADESimagenACCION = <?php echo $RUTA9OTROSimagenOTROSJSON; ?>;
var RUTA1NECESIDADESaudioACCION = <?php echo $RUTA9OTROSaudioOTROSJSON; ?>;  

var RUTA1NECESIDADESimagenSUBPESTANA = <?php echo $RUTA9OTROSimagenSUBPESTANAJSON; ?>;
                                               
//let PANELCENTRALAUXILIAR = document.querySelector("panel-CENTRALAUXILIAR");
let PANELCENTRALAUXILIAR = document.getElementById("panel-CENTRALAUXILIAR");
PANELCENTRALAUXILIAR.innerHTML=""; 

//PONER IMAGENES EN PANEL CENTRAL AUXILIAR
for(var i=0; i<RUTA1NECESIDADESimagenSUBPESTANA.length; i++){
   //let imagen = document.createElement("img");
   //imagen.src = "ALIMENTOimagen/" + elementos[i];
   //panelinferior.appendChild(boton);
   var aNECESIDADESimagenSUBPESTANAPANELCENTRALAUXILIAR = document.createElement("img");  //console.log(RI[i]);  //console.log(RISP[1]);
   aNECESIDADESimagenSUBPESTANAPANELCENTRALAUXILIAR.src = RUTA1NECESIDADESimagenSUBPESTANA[i];
   aNECESIDADESimagenSUBPESTANAPANELCENTRALAUXILIAR.style.width="200px"; aNECESIDADESimagenSUBPESTANAPANELCENTRALAUXILIAR.style.height="66px"; aNECESIDADESimagenSUBPESTANAPANELCENTRALAUXILIAR.style.marginRight="5px";
   PANELCENTRALAUXILIAR.appendChild(aNECESIDADESimagenSUBPESTANAPANELCENTRALAUXILIAR);
   
//INICIO PONER 888ANIMALESimagen/ANIMALES
   if(i===0){
      aNECESIDADESimagenSUBPESTANAPANELCENTRALAUXILIAR.addEventListener("click", function() {
      let PANELINFERIOR=document.getElementById("panel-INFERIOR");
      PANELINFERIOR.innerHTML=""; 
      for(let j=0; j<RUTA1NECESIDADESimagenACCION.length; j++){
      let aNECESIDADESimagenPANELINFERIOR = document.createElement("img");  //console.log(RUTAaNECESIDADESimagen[1]);  
      aNECESIDADESimagenPANELINFERIOR.src =  RUTA1NECESIDADESimagenACCION[j]; //console.log(RUTA1NECESIDADESimagen[j]); 
      aNECESIDADESimagenPANELINFERIOR.style.width="70px"; aNECESIDADESimagenPANELINFERIOR.style.height="70px"; aNECESIDADESimagenPANELINFERIOR.style.marginRight="7px";
      PANELINFERIOR.appendChild(aNECESIDADESimagenPANELINFERIOR);
      
      //PONER IMAGENES EN PANEL SUPERIOR
      aNECESIDADESimagenPANELINFERIOR.addEventListener("click", function() {    
      //console.log(RUTA1NECESIDADESimagen[j]); 
      let PANELSUPERIOR=document.getElementById("panel-SUPERIOR");
      let aNECESIDADESimagenPANELSUPERIOR = document.createElement("img");//console.log(RutaImagenS);  
      aNECESIDADESimagenPANELSUPERIOR.src = RUTA1NECESIDADESimagenACCION[j]; //console.log(RUTA1NECESIDADESimagen[1]); 
      aNECESIDADESimagenPANELSUPERIOR.style.width="70px"; aNECESIDADESimagenPANELSUPERIOR.style.height="70px"; aNECESIDADESimagenPANELSUPERIOR.style.marginRight="7px";
      PANELSUPERIOR.appendChild(aNECESIDADESimagenPANELSUPERIOR);
      
      //REPRODUCIR PANEL SUPERIOR         
      aNECESIDADESimagenPANELSUPERIOR.addEventListener("click", function() {
      const audio = new Audio(RUTA1NECESIDADESaudioACCION[j].replace(".png", ".wav"));
      audio.play();
      });  
      });
      }
      });
   }
//FIN PONER 888ANIMALESimagen/ANIMALES
  }
}
////////////FIN COLOCA 888ANIMALESimagen Y 999OTROSmagenSUBPESTANA EN PANELES
    </script>
</body>

</html>