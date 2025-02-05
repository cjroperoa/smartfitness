<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta name="author" content="Cristian 'GOPE' Ropero"/>
<meta http-equiv="content-language" content="es"/>

<title>Clientes</title>	

	
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
		padding-left: 18%;
		border:medium none;
		color:#FFF;		
		font-family:'Trebuchet MS', Tahoma, Arial;
		text-shadow: #B1B1B1 0.1em 0.1em 0.2em;
		text-transform:uppercase;
		}
		#actualizardatos table{
		border:#FFFFFF double;
		text-align:center;}
		
		#actualizardatos td{
		text-align:center;
		border:#FFFFFF double;}
	#actualizardatos legend {
		font-size: 22px;
		padding-top: 20px;
		padding-right: -9px;
		letter-spacing:1px;
		padding-bottom:10px;
		text-decoration:underline;
		text-align:center;
		}
		#actualizardatos label {
		font-size:17px;
		padding-left: 50px;
		padding-right: 50px;
		padding:10px 0 3px;		
	    float: left;		
	  	width: 25%;
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
	.color_letra {color: #FFFFFF}
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
      <h2 class="bienvenida"> Hola Entrenador !! </h2>
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
						<li><a href="../ADMINISTRADOR/MOSTRAR_DATOS_ADMINISTRADOR.PHP"><span>Mostar Datos</span></a></li>

					</ul>
				</div>
           </li>
            <!-- Opciones Entrenador -->    
            <li><a href="../../OPC_ENTRENADOR.php" class="parent"><span>ENTRENADOR</span></a>
				<div>
					<ul>
						<li><a href="../ENTRENADOR/ENVIAR_ACTUALIZACION_DATOS.PHP"><span>Actualizar Datos</span></a></li>
						<li><a href="../ENTRENADOR/insertar_mostrar_datos.php"><span>Mis Datos</span></a></li>
						<li><a href="../ENTRENADOR/VERIFICAR_CAMBIAR_CONTRASENA.PHP"><span>Cambiar Contraseña</span></a></li>
						<li><a href="../ENTRENADOR/mostrar_horario_trabajo.php"><span>Horario De Trabajo</span></a></li>
					</ul>
				</div>
            </li>
            <!-- Opciones Cliente -->    
            <li><a href="#" class="parent"><span>CLIENTE</span></a>
				<div>
					<ul>
						<li><a href="clientes_asignados.php"><span>Clientes Asignados</span></a></li>
                        <li><a href="REGISTRAR_RUTINA]_FISICA.PHP"><span>Crear Rutina Fisica</span></a></li>
						<li><a href="REGISTRAR_RUTINA_ALIMENTICIA.PHP"><span>Crear Rutina Alimenticia</span></a></li>
						<li><a href="REGISTRAR_INFORME_CLIENTE.PHP"><span>Registrar Informe</span></a></li>
						<li><a href="verificar_actualizar_informe.php"><span>Actualizar Informe</span></a></li>
						<li><a href="verificar_actualizar_rutina_fisica.php" ><span>Actualizar Rutina Fisica</span></a></li>
						<li><a href="verificar_actualizar_rutina_alimentaria.php"><span>Actualizar Rutina Alimenticia</span></a></li>
                        
					</ul>
				</div> 
            </li>           
            <!----- Opciones Otras [Ayuda-Contacto-Cerrar]----->    		
            <li><a href="../../AYUDAS/AYUDA_ENTRENADOR.PHP"><span>AYUDA</span></a></li>	           
             
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
require("/../../CONEXION_BD.php");



$consulta=mysql_query("SELECT nombre FROM smartfitness.entrenador WHERE documento='$variable_en'");

if ($consultar=mysql_fetch_array($consulta))  //si existe la consulta
{

	do
	{
	   $nnombre=stripslashes($consultar["nombre"]);
	      
	   
			
	}
	while($consultar=mysql_fetch_array($consulta));
}  

?>
<?php


$mostrar_clientes="select nombre, sexo ,edad , mail, telefono, celular from cliente where nombre_entrenador='$nnombre';";
$enviar_consulta_clientes=mysql_query($mostrar_clientes, $conexion);

echo '
<fieldset id="actualizardatos">
<center><legend>Datos Personales De Los Clientes</legend></center>
<table>

<tr>
<td><label>Nombre</label></td>
<td><label>Sexo</label></td>
<td><label>Edad</label></td>
<td><label>Correo Electronico</label></td>
<td><label>Telefono</label></td>
<td><label>Celular</label></td>
</tr> ';


while ($clientes = mysql_fetch_row($enviar_consulta_clientes))
{

echo "
<tr>
<td>$clientes[0]</td>
<td>$clientes[1]</td>
<td>$clientes[2]</td>
<td>$clientes[3]</td>
<td>$clientes[4]</td>
<td>$clientes[5]</td>
</tr>";

}

echo "</table> <br><br>";


?>
 <?php

$mostrar_datos="select nombre, peso, estatura, valoracion_medica, valoracion_fisica, ritmo_cardiaco from cliente where nombre_entrenador='$nnombre';";
$enviar_consulta_mostrar=@mysql_query($mostrar_datos, $conexion);

echo '
<center><legend>Datos Fisicos Del Cliente</legend></center>
<table>

<tr>
<td><label>Nombre</label></td>
<td><label>Peso</label></td> 
<td><label>Estatura</label></td>
<td><label>Valoracion Medica</label></td>
<td><label>Valoracion Fisica</label></td>
<td><label>Ritmo Cardiaco</label></td> 
</tr>';


while ($datos = mysql_fetch_row($enviar_consulta_mostrar))
{

echo "<tr><span class='color_letra'>
<td>$datos[0]</td>
<td>$datos[1]</td>
<td>$datos[2]</td>
<td>$datos[3]</td>
<td>$datos[4]</td>
<td>$datos[5]</td>
</tr>";

}

echo "</table> ";
echo '</center></span><br><br>';
?>
      </p>
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
</div>