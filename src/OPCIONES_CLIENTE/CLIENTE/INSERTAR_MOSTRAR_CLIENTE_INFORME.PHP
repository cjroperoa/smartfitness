

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta name="author" content="Cristian 'GOPE' Ropero"/>
<meta http-equiv="content-language" content="es"/>

<title>Informe Cliente</title>	

	
    <link type="image/ico" href="../../IMAGENES/Favicon/Favicon.ico" rel="shortcut icon"> <!-- Carga del Favicon -->    
	<link type="text/css" href="../../ESTILOS/ESTILO_BASE.css" rel="stylesheet"/> <!-- CSS Base - Principal -->
	<link type="text/css" href="../../ESTILOS/MENU.css" rel="stylesheet"/> <!-- CSS - Menu -->

    <script type="text/javascript" src="../../SCRIPTS/jquery.js"></script> <!-- Script Utilidad JQuery-->
    <script type="text/javascript" src="../../SCRIPTS/Menu/menu.js"></script> <!-- Script Menu [Animación]-->
    
    <style>
	
	
	#actualizardatos {
		position:relative;
		width: 70%; /*Ancho Div*/
		height: 81%; /* Alto Div*/
		padding-top:3%;
		padding-left: 12%;
		border:medium none;
		color:#FFF;		
		font-family:'Trebuchet MS', Tahoma, Arial;
		text-shadow: #B1B1B1 0.1em 0.1em 0.2em;
		text-transform:uppercase;
		}
		
	#actualizardatos legend {
		font-size: 21px;
		padding-top: 20px;
		padding-right: -9px;
		letter-spacing:1px;
		padding-bottom:10px;
		text-decoration:underline;
		text-align:center;
		}
		
#actualizardatos table{
		border:#FFFFFF double;
		text-align:center;}
		
		#actualizardatos td{
		text-align:center;
		border:#FFFFFF double;}
		#actualizardatos label {
		font-size:17px;
		padding-left: 50px;
		padding-right: 50px;
		padding:10px 0 3px;		
	   /* float: left;		  		
		width: 25%;*/
		text-decoration:underline;
		}
	div {
  		margin: 1px 0;
		}
		
	.btenviar{
		position:fixed;
		top: 83%;
		left: 43%;
		} 
		
		#tabla
		{
		color:#FFFFFF;			
		}
	
    </style>
    
</head>

<body>
<?php
require("../../seguridad_smartfitness.php");
?>
	<!----- Imagen Fondo CSS ----->
	<img class="fondo" src="../../IMAGENES/fondo.jpg"/> 

    <!----- Bloque Cabecera [SALUDO]----->    
    <div id="tbcabecera">   
          
	  <img class="logo" src="../../IMAGENES/logo-smart.jpg"/>
      <h2 class="bienvenida"> Hola Cliente !! </h2>
      <img class="img-usuario" src="../../IMAGENES/admin.png"/>

	</div>
	
	<!----- Bloque Menu ----->
	<div id="tbmenu">	 
		<!----- Menu Desplegable ----->
		<div id="menu">
		 <ul class="menu">
         	<!-- Opciones Administrador -->
			<li><a href="#" class="parent"><span>ADMINISTRADOR</span></a>
				<div>
					<ul>
						<li><a href="../ADMINISTRADOR/MOSTRAR_DATOS_ADMINISTRADOR.PHP"><span>Mostrar Datos</span></a></li>
					</ul>
				</div>
           </li>
            <!-- Opciones Entrenador -->    
            <li><a href="#" class="parent"><span>ENTRENADOR</span></a>
				<div>
					<ul>
						<li><a href="../ENTRENADOR/insertar_mostrar_datos_entrenador.PHP"><span>Mostrar Datos</span></a></li>
						<li><a href="../ENTRENADOR/insertar_mostrar_datos_horario_entrenador.PHP"><span>Mostrar Horario</span></a></li>
					</ul>
				</div>
            </li>
            <!-- Opciones Cliente -->    
            <li><a href="../../OPC_CLIENTE.php" class="parent"><span>CLIENTE</span></a>
				<div>
					<ul>
						<li><a href="ENVIAR_ACTUALIZACION_CLIENTE_DATOS.php" rel="lightbox_text"><span>Actualizar Mis Datos</span></a></li>
						<li><a href="INSERTAR_MOSTRAR_DATOS_CLIENTE.php" rel="lightbox_text"><span> Mis Datos</span></a></li>
						<li><a href="INSERTAR_MOSTRAR_CLIENTE_PAGO.PHP" rel="lightbox_text"><span> Mis Pagos</span></a>
						<li><a href="INSERTAR_MOSTRAR_CLIENTE_INFORME.PHP" rel="lightbox_text"><span> Informe</span></a></li>
                        <li><a href="INSERTAR_MOSTRAR_RUTINA_FISICA_CLIENTE.PHP" rel="lightbox_text"><span> Rutina Fisica</span></a></li>
						 <li><a href="INSERTAR_MOSTRAR_RUTINA_ALIMENTARIA_CLIENTE.PHP" rel="lightbox_text"><span> Rutina Alimentaria</span></a></li>
                        <li><a href="mostrar_rutinas_descricion.php"rel="lightbox_text"><span>Descripcion De Rutina </span></a></li>
					</ul>
				</div> 
            </li>           
            <!----- Opciones Otras [Ayuda-Contacto-Cerrar]----->    		
             <li><a href="../../AYUDAS/AYUDA_CLIENTE.PHP"><span>AYUDA</span></a></li>	           
             
            <li><a href="../../cerrar_sesion.php"><span>CERRAR SESION</span></a></li>  
                   	
     	</ul>
       </div>       
       
	</div>
  
    <!-- Bloque Contenido (Principal) -->
	<div id="tbprincipal">

      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>
	  
        <?php

include("../../CONEXION_BD.php");



$mostrar_datos="select  nombre, documento  from cliente where documento='$variable_cl' ;";
$enviar_consulta_mostrar=@mysql_query($mostrar_datos, $conexion);

echo '
<fieldset id="actualizardatos">
<legend>CLIENTE</legend>
<table >';

echo "<tr>";
echo "<td><label>NOMBRE</label></td> ";
echo "<td><label>DOCUMENTO</label></td> ";

echo "</tr> ";

while($datos=@mysql_fetch_row($enviar_consulta_mostrar))
{

echo "<tr>";


echo "<td>$datos[0]</td>";
echo "<td>$datos[1]</td>";

echo "</tr>";
}

echo "</table> ";

?>
	
	
	<?php



$mostrar_datos="select fecha_ingreso, peso, estatura, valoracion_medica, valoracion_fisica, ritmo_cardiaco  from cliente where documento='$variable_cl' ;";
$enviar_consulta_mostrar=@mysql_query($mostrar_datos, $conexion);

echo '
<legend>PRIMER INFORME REGISTRADO</legend>
<table >';


echo "<tr>";


echo "<tr>";
echo "<td><label>FECHA DE INFORME</label></td> ";
echo "<td><label>PESO ACTUAL</label></td> ";
echo "<td><label>ESTATURA ACTUAL</label></td> ";
echo "<td><label>VALORACION MEDICA ACTUAL</label></td> ";
echo "<td><label>VALORACION FISICA ACTUAL</label></td> ";
echo "<td><label>RITMO CARDIACO ACTUAL</label></td> ";

echo "</tr> ";


while($datos=@mysql_fetch_row($enviar_consulta_mostrar))
{

echo "<tr>";


echo "<td>$datos[0]</td>";
echo "<td>$datos[1]</td>";
echo "<td>$datos[2]</td>";
echo "<td>$datos[3]</td>";
echo "<td>$datos[4]</td>";
echo "<td>$datos[5]</td>";


echo "</tr>";
}

echo "</table> ";


?>
	<?php


$mostrar_datos="select  fecha_informe, peso, estatura, valoracion_medica, valoracion_fisica, ritmo_cardiaco from informe_cliente where documento='$variable_cl' ;";
$enviar_consulta_mostrar=@mysql_query($mostrar_datos, $conexion);

echo '
<legend>INFORME ACTUAL</legend>
<table >';


echo "<tr>";
echo "<td><label>FECHA DE INFORME</label></td> ";
echo "<td><label>PESO ACTUAL</label></td> ";
echo "<td><label>ESTATURA ACTUAL</label></td> ";
echo "<td><label>VALORACION MEDICA ACTUAL</label></td> ";
echo "<td><label>VALORACION FISICA ACTUAL</label></td> ";
echo "<td><label>RITMO CARDIACO ACTUAL</label></td> ";

echo "</tr> ";


while($datos=@mysql_fetch_row($enviar_consulta_mostrar))
{

echo "<tr>";


echo "<td>$datos[0]</td>";
echo "<td>$datos[1]</td>";
echo "<td>$datos[2]</td>";
echo "<td>$datos[3]</td>";
echo "<td>$datos[4]</td>";
echo "<td>$datos[5]</td>";

echo "</tr>";
}

echo "</table> ";

echo '</center>';

?>    </p>
	</div>

	<!-- Bloque Copyright -->
	<div id="tbCopyrigth">	  
		<div><span>&copy; Copyright 2012 | Todos los derechos Reservados <strong>  Online Web  </strong> Pol&iacute;tica de privacidad</span></div>	  
 	</div> 
    	    
</body>

</html>

<!-- Elimina Back-Link de Apycom -->
<div style="visibility:hidden">
<a href="http://apycom.com/">Apycom jQuery Menus</a>


