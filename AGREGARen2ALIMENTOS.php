<!DOCTYPE html>
<html>
<head>
    <title>Paneles y Tablas</title>
    <style>
body {
background-color: orange; /* Fondo de color naranja */
margin: 0;
padding: 0;
height: 569px;
     }

table {
border-collapse: collapse;
width: 70%;
height: 50px;
margin: 2px auto 10px;
resize: both;
overflow: auto;
margin-bottom: 5px;
       }

th, td {
border: 4px solid blue; /* Borde grueso de color negro */
padding: 2px;
text-align: center;
vertical-align: middle;
       }
img{
display: inline-block;
vertical-align: middle;            
    }        

    
#tabla1{
background-color: blue; /* Fondo de la tabla 1 de color azul */
color: white; /* Texto de color blanco */}
#tabla1 .fucsia {
background-color: fuchsia;}
#tabla1 .rosado {
background-color: hotpink;}
#tabla1 .agua {
background-color: aqua;}


#tabla2 {
width: 50%;}
#tabla2 td {
width: 33.33%;
height: 100px;}

#tabla2 .rojo {
background-color: red;}
#tabla2 .coral {
background-color: coral;}
#tabla2 .azul {
background-color: blue;}
#tabla2 .crimson {
background-color: crimson;}
#tabla2 .purpura {
background-color: purple;}
#tabla2 .marron {
background-color: maroon;}

#panel-superior {
background-color: black; /* Panel superior de color verde */
border: 4px solid red;
width: 90%;
height: 30px;
margin: 0px auto;
padding: 0px auto;
overflow: auto;
text-align: center;
margin-bottom: 10px;
color: violet;
font-size:25px;
        }
#panel-inferior {
background-color: lawngreen; /* Panel inferior de color lila */
/* Panel superior de color verde */
border: 4px solid fuchsia;
width: 70%;
height: 74px;
display: flex;
justify-content:center;
align-items:center;
margin: 0px auto;
padding: 0px;
overflow: auto;
text-align: center;  
margin-bottom: 10px;
                }        
    </style>
</head>
<body>
    <div id="panel-superior" contenteditable="true">COLOCA   MAS   IMÁGENES   Y   AUDIOS   EN   TUS   ALIMENTOS</div>
  
    
<table id="tabla1">
<tr>
    
<td class="fucsia">
<a href="dialogos.php">
<img src="PECSimagen/VOLVER A DIALOGAR.png" width="200" height="80" class="imagen" alt="1NECESIDADESimagen/ACCION">
</a>  
</td>

<td class="rosado">
<img src="AGREGARenBLOQUESUBITEMS/2ALIMENTOSp.png" width="200" height="80" class="imagen" alt="IMAGEN DE ALIMENTOS">
</td>

<td class="agua">
<a href="AgregarEn.php">
<img src="PECSimagen/VOLVER A PANEL MULTIMEDIA.png" width="200" height="80" class="imagen" alt="1NECESIDADESimagen/ACCION">
</a>  
</td>

</tr>
</table>
    
      
<table id="tabla2">
<tr>  
<td style="color:black; font-size:20px;" class="marron">
<a href="agregar2ALIMENTOSimagenBEBIDAS.php">
<img src="2ALIMENTOSimagenSUBPESTANA/BEBIDAS.png" width="195" height="139" class="imagen" alt="1NECESIDADESimagen/ACCION">        
</a>
</td>

<td style="color:blue; font-size:20px;" class="rojo">
<a href="agregar2ALIMENTOSimagenCARNES.php">
<img src="2ALIMENTOSimagenSUBPESTANA/CARNES.png" width="195" height="139" class="imagen" alt="1NECESIDADESimagen/ACCION">
</a>
</td> 

<td style="color:green; font-size:20px;" class="azul">
<a href="agregar2ALIMENTOSimagenCEREALES.php">
<img src="2ALIMENTOSimagenSUBPESTANA/CEREALES.png" width="195" height="139" class="imagen" alt="1NECESIDADESimagen/ACCION">
</a>
</td> 
</tr>

<tr>
<td style="color:blue; font-size:20px;" class="coral">
<a href="agregar2ALIMENTOSimagenFRUTAS.php">
<img src="2ALIMENTOSimagenSUBPESTANA/FRUTAS.png" width="195" height="130" class="imagen" alt="1NECESIDADESimagen/ACCION">
</a>
</td>

<td style="color:blue; font-size:20px;" class="crimson">
</td>

<td style="color:blue; font-size:20px;" class="purpura">
<a href="agregar2ALIMENTOSimagenVERDURAS.php">
<img src="2ALIMENTOSimagenSUBPESTANA/VERDURAS.png" width="195" height="130" class="imagen" alt="1NECESIDADESimagen/ACCION">
</a>
</td>
</tr>
</table>
    
    
<div id="panel-inferior">
 <a href="index.php">   
    <img src="PECSimagen/CASA.png" width="70" height="70" class="imagen" alt="casa">
 </a>
</div>
      
</body>
</html>