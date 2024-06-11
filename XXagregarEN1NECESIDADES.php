<?php
session_start();
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

<head>
    <title>Mi página web</title>
    <style>
.PANELSUPERIOR{
width:100%;    
height:115px;
border: 0px solid black;
padding: 0px;
margin-bottom: 0px;
display: flex;
flex-wrap: wrap;
overflow-x:hidden;

justify-content:center;
align-items:center;
background-color:#ff00ff;
}
.PANELSUPERIOR img{
margin:5px;
padding: 0px;
}




.PANELCENTRAL {
width: 100%;
height:85px;
border: 2px solid black;
padding: 0px;
margin-bottom: 0px;
display: flex;
flex-wrap: wrap;
overflow-x:hidden;

justify-content:center;
align-items:center;
background-color:#00ffff;
} 
.PANELCENTRAL img{
margin:5px;
width:15%;
height:85%;    
}



.PANELINFERIOR {
width: 100%;
height:315px;
border: 2px solid black;
padding: 0px;
margin-bottom: 0px;
display: flex;

flex-wrap: wrap;
overflow-x:hidden;

justify-content:center;
align-items:center;
background-color:#ff00ff;
}



.PANELINFERIORAUXILIAR {
width: 100%;
height:30px;    
border: 2px solid black;
padding: 0px;
display: flex;
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
.PANELINFERIORAUXILIAR img{
    margin-right: 200px;
    margin-left: 200px;
}

    </style>
</head>
<body>
   
   <?php 
////////////
//MATRICIANDO LAS IMAGENES DE CARPETAS ((NO SUB PESTANAS))
//////////// 






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
?>





    
<div class="PANELSUPERIOR" id="PANELSUPERIOR">  
</div>

    
    
    
    
    
    
    
    
    
    
    <div class="PANELCENTRAL" id="PANELCENTRAL" style="overflow-x: auto;">
<img id="imagen" src="1NECESIDADESimagenSUBPESTANA/ACCION.png" alt="Imagen" onclick="SELECCIONARARCHIVOpara1NECESIDADESimagen_ACCION()" width="77" height="77">
<form id="formulario1" action="agregarEN1NECESIDADES.php" method="post" enctype="multipart/form-data" style="display:none;">
<input type="file" name="ARCHIVOpara1NECESIDADESimagen_ACCION" id="ARCHIVOpara1NECESIDADESimagen_ACCION" onchange="SUBIRARCHIVOpara1NECESIDADESimagen_ACCION()">
</form>

<img id="imagen" src="1NECESIDADESimagenSUBPESTANA/EMOCION.png" alt="Imagen" onclick="SELECCIONARARCHIVOpara1NECESIDADESimagen_EMOCION()" width="77" height="77">
<form id="formulario2" action="agregarEN1NECESIDADES.php" method="post" enctype="multipart/form-data" style="display:none;">
<input type="file" name="ARCHIVOpara1NECESIDADESimagen_EMOCION" id="ARCHIVOpara1NECESIDADESimagen_EMOCION" onchange="SUBIRARCHIVOpara1NECESIDADESimagen_EMOCION()">
</form>

<img id="imagen" src="1NECESIDADESimagenSUBPESTANA/GESTOS.png" alt="Imagen" onclick="SELECCIONARARCHIVOpara1NECESIDADESimagen_GESTOS()" width="77" height="77">
<form id="formulario3" action="agregarEN1NECESIDADES.php" method="post" enctype="multipart/form-data" style="display:none;">
<input type="file" name="ARCHIVOpara1NECESIDADESimagen_GESTOS" id="ARCHIVOpara1NECESIDADESimagen_GESTOS" onchange="SUBIRARCHIVOpara1NECESIDADESimagen_GESTOS()">
</form>
</div>
    
    
    
    
    
    
    
    
    
    
    
<?php    
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
?>    
<div class="PANELINFERIOR" id="PANELINFERIOR" style="overflow-y: auto;">

</div>
<script>
var RUTA1NECESIDADESimagenACCION = <?php echo $RUTA1NECESIDADESimagenACCIONJSON; ?>;
var RUTA1NECESIDADESaudioACCION = <?php echo $RUTA1NECESIDADESaudioACCIONJSON; ?>; 

var RUTA1NECESIDADESimagenEMOCION = <?php echo $RUTA1NECESIDADESimagenEMOCIONJSON; ?>;
var RUTA1NECESIDADESaudioEMOCION = <?php echo $RUTA1NECESIDADESaudioEMOCIONJSON; ?>; 

var RUTA1NECESIDADESimagenGESTOS = <?php echo $RUTA1NECESIDADESimagenGESTOSJSON; ?>;
var RUTA1NECESIDADESaudioGESTOS = <?php echo $RUTA1NECESIDADESaudioGESTOSJSON; ?>; 

let PANELINFERIOR = document.getElementById("PANELINFERIOR");
//PANELINFERIOR.innerHTML="";  
function SUBIRARCHIVOpara1NECESIDADESimagen_ACCION() {
document.getElementById('formulario1').submit();}

function SELECCIONARARCHIVOpara1NECESIDADESimagen_ACCION() {
//PONER IMAGENES EN PANEL CENTRAL AUXILIAR
PANELINFERIOR.innerHTML="";  
for(var i=0; i<RUTA1NECESIDADESimagenACCION.length; i++){
   var aNECESIDADESimagenSUBPESTANAPANELCENTRALAUXILIAR = document.createElement("img");  //console.log(RI[i]);  //console.log(RISP[1]);
   aNECESIDADESimagenSUBPESTANAPANELCENTRALAUXILIAR.src = RUTA1NECESIDADESimagenACCION[i];
   aNECESIDADESimagenSUBPESTANAPANELCENTRALAUXILIAR.style.width="200px"; aNECESIDADESimagenSUBPESTANAPANELCENTRALAUXILIAR.style.height="66px"; aNECESIDADESimagenSUBPESTANAPANELCENTRALAUXILIAR.style.marginRight="5px";
   PANELINFERIOR.appendChild(aNECESIDADESimagenSUBPESTANAPANELCENTRALAUXILIAR);
}
document.getElementById('ARCHIVOpara1NECESIDADESimagen_ACCION').click();
}
</script>          
        
<?php
if(isset($_FILES['ARCHIVOpara1NECESIDADESimagen_ACCION'])){
    $archivo = $_FILES['ARCHIVOpara1NECESIDADESimagen_ACCION'];
    $nombre = $archivo['name'];
    $ruta = "1NECESIDADESimagen/ACCION/" . $nombre;
    move_uploaded_file($archivo['tmp_name'], $ruta);
    //echo "I";
    //echo $ruta;
} else {
    //echo "";
}
?>


<script>
        function SELECCIONARARCHIVOpara1NECESIDADESimagen_EMOCION() {
            document.getElementById('ARCHIVOpara1NECESIDADESimagen_EMOCION').click();
        }

        function SUBIRARCHIVOpara1NECESIDADESimagen_EMOCION() {
            document.getElementById('formulario2').submit();
        }
</script>
<?php
if(isset($_FILES['ARCHIVOpara1NECESIDADESimagen_EMOCION'])){
    $archivo = $_FILES['ARCHIVOpara1NECESIDADESimagen_EMOCION'];
    $nombre = $archivo['name'];
    $ruta = "1NECESIDADESimagen/EMOCION/" . $nombre;
    move_uploaded_file($archivo['tmp_name'], $ruta);
    //echo "I";
    //echo $ruta;
} else {
    //echo "";
}
?>


<script>
        function SELECCIONARARCHIVOpara1NECESIDADESimagen_GESTOS() {
            document.getElementById('ARCHIVOpara1NECESIDADESimagen_GESTOS').click();
        }

        function SUBIRARCHIVOpara1NECESIDADESimagen_GESTOS() {
            document.getElementById('formulario3').submit();
        }
</script>
<?php
if(isset($_FILES['ARCHIVOpara1NECESIDADESimagen_GESTOS'])){
    $archivo = $_FILES['ARCHIVOpara1NECESIDADESimagen_GESTOS'];
    $nombre = $archivo['name'];
    $ruta = "1NECESIDADESimagen/GESTOS/" . $nombre;
    move_uploaded_file($archivo['tmp_name'], $ruta);
    //echo "I";
    //echo $ruta;
} else {
    //echo "";
}
?>












    
<?php 
//MATRICIAR A LA CARPETA ALIMENTO
   $ALIMENTOimagen = scandir('1NECESIDADESimagen/ACCION');
   $RutaALIMENTOimagen=array();
   $MatrizALIMENTOimagen=array(); //echo $MatrizImagenes[$i];
   $i=0;
   foreach ($ALIMENTOimagen as $imagenALIMENTOimagen) {
      if ($imagenALIMENTOimagen != '.' && $imagenALIMENTOimagen != '..') { //echo $imagen;
         $MatrizALIMENTOimagen[$i]=$imagenALIMENTOimagen;
      $RutaALIMENTOimagen[$i]='1NECESIDADESimagen/ACCION/'.$imagenALIMENTOimagen;
         $RutaALIMENTOaudio[$i]='1NECESIDADESaudio/ACCION/'.$imagenALIMENTOimagen; //echo $RutaImagen[$i];
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


<?php
////////////
//MATRICIANDO CARPETA BOTONagregarIMAGENESaudios           
//////////// 
////////////////////////INICIO 
echo "<tr>";
   $BOTONagregarIMAGENESaudios = scandir('BOTONagregarIMAGENESaudios');
   $RUTABOTONagregarIMAGENESaudios=array();
   $i=0;
   foreach ($BOTONagregarIMAGENESaudios as $imagen) {
      if ($imagen != '.' && $imagen != '..') {
      $RUTABOTONagregarIMAGENESaudios[$i]='BOTONagregarIMAGENESaudios/'.$imagen;
      $i++;
      }
}
$RUTABOTONagregarIMAGENESaudiosJSON=json_encode($RUTABOTONagregarIMAGENESaudios);

?>
<script>
// PONER IMAGENES EN PANEL SUPERIOR
var rutaBOTONESmultimedia = <?php echo $RUTABOTONagregarIMAGENESaudiosJSON; ?>;
for (var i = 0; i < rutaBOTONESmultimedia.length; i++) {
   var ruta1 = document.createElement("img");  
   ruta1.src = rutaBOTONESmultimedia[i]; 
   if (i === 0) {ruta1.addEventListener("click", function(){window.location.href = "index1.php";});}
   if (i === 1) {ruta1.addEventListener("click", function(){window.location.href = "dialogos.php";});}
   if (i === 2) {ruta1.addEventListener("click", function(){window.location.href = "AGREGARen.php";});}
   if (i === 3) {ruta1.style.width = "270px"; ruta1.style.height = "105px";} 
   else {ruta1.style.width = "120px"; ruta1.style.height = "70px";}
   PANELSUPERIOR.appendChild(ruta1);
}








//PANELCENTRALAUXILIAR.innerHTML=""; 
var RUTA1NECESIDADESimagenACCION = <?php echo $RUTA1NECESIDADESimagenACCIONJSON; ?>;
var RUTA1NECESIDADESaudioACCION = <?php echo $RUTA1NECESIDADESaudioACCIONJSON; ?>; 

var RUTA1NECESIDADESimagenEMOCION = <?php echo $RUTA1NECESIDADESimagenEMOCIONJSON; ?>;
var RUTA1NECESIDADESaudioEMOCION = <?php echo $RUTA1NECESIDADESaudioEMOCIONJSON; ?>; 

var RUTA1NECESIDADESimagenGESTOS = <?php echo $RUTA1NECESIDADESimagenGESTOSJSON; ?>;
var RUTA1NECESIDADESaudioGESTOS = <?php echo $RUTA1NECESIDADESaudioGESTOSJSON; ?>; 

</script>
<div class="PANELINFERIORAUXILIAR" id="PANELINFERIORAUXILIAR">
<a href="index1.php"> <img src="PECSimagen/boton_inicio.png" style=" width:120px; height:24px;"></a> 
<a href="index.php"> <img src="PECSimagen/boton_salir.png"; alt="boton_salir" style="width:100px; height:18px;  "></a> 
</div>
</body>

</html>