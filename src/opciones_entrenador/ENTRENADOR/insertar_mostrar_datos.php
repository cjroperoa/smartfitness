<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta name="author" content="Cristian 'GOPE' Ropero"/>
<meta http-equiv="content-language" content="es"/>

<title>Datos Entrenador</title>	

	
    <link type="image/ico" href="../../IMAGENES/Favicon/Favicon.ico" rel="shortcut icon"> <!-- Carga del Favicon -->    
	<link type="text/css" href="../../ESTILOS/ESTILO_BASE.css" rel="stylesheet"/> <!-- CSS Base - Principal -->
	<link type="text/css" href="../../ESTILOS/MENU.css" rel="stylesheet"/> <!-- CSS - Menu -->

    <script type="text/javascript" src="../../SCRIPTS/jquery.js"></script> <!-- Script Utilidad JQuery-->
    <script type="text/javascript" src="../../SCRIPTS/Menu/menu.js"></script> <!-- Script Menu [Animaci�n]-->
    
    <style>
	
	
	#actualizardatos {
		position:relative;
		width: 70%; /*Ancho Div*/
		height: 81%; /* Alto Div*/
		padding-top:3%;
		padding-left: 10%;
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
		font-size: 21px;
		padding-top: 20px;
		padding-right: -9px;
		letter-spacing:1px;
		padding-bottom:10px;
		text-decoration:underline;
		text-align:center;
		}
		
	#actualizardatos label {
		font-size:14px;
		padding-left: 50px;
		padding-right: 50px;
		padding:10px 0 3px;		
	    float: left;		
	  	width: 25%;
		}
		
	#actualizardatos input[type="text"] {
		/*border:medium none !important;
		font-size:12px;*/
		height:20px;
		padding-left:2px;
		text-align:center;
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
	.Estilo1 {color: #FFFFFF}
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
						<li><a href="ENVIAR_ACTUALIZACION_DATOS.PHP"><span>Actualizar Datos</span></a></li>
						<li><a href="insertar_mostrar_datos.php"><span>Mis Datos</span></a></li>
						<li><a href="VERIFICAR_CAMBIAR_CONTRASENA.PHP"><span>Cambiar Contrase�a</span></a></li>
						<li><a href="mostrar_horario_trabajo.php"><span>Horario De Trabajo</span></a></li>
					</ul>
				</div>
            </li>
            <!-- Opciones Cliente -->    
            <li><a href="#" class="parent"><span>CLIENTE</span></a>
				<div>
					<ul>
						<li><a href="../cliente/clientes_asignados.php"><span>Clientes Asignados</span></a></li>
                        <li><a ><span>Crear Rutina Fisica</span></a></li>
						<li><a ><span>Crear Rutina Alimenticia</span></a></li>
						<li><a href="../cliente/REGISTRAR_INFORME_CLIENTE.PHP"><span>Registrar Informe</span></a></li>
						<li><a href="../cliente/verificar_actualizar_informe.php"><span>Actualizar Informe</span></a></li>
						<li><a ><span>Actualizar Rutina Fisica</span></a></li>
						<li><a ><span>Actualizar Rutina Alimenticia</span></a></li>
                        
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

require("../../CONEXION_BD.php");


$mostrar_datos="select nombre, documento, fecha_nacimiento, edad, sexo, mail, telefono, celular from entrenador where documento='$variable_en';";
$enviar_consulta_mostrar=@mysql_query($mostrar_datos, $conexion);

echo '
<fieldset id="actualizardatos">
<center>DATOS PERSONALES</center>
<table >

<tr>
<td><b>Nombre</b></td> 
<td><b>Documento</b></td>
<td><b>Fecha De Nacimiento</b></td> 
<td><b>Sexo</b></td> 
<td><b>Edad</b></td> 
<td><b>Correo Electronico</b></td> 
<td><b>Telefono</b></td> 
<td><b>Celular</b></td> 

</tr> ';


while($datos=@mysql_fetch_row($enviar_consulta_mostrar))
{

echo "<tr>
<td>$datos[0]</td>
<td>$datos[1]</td>
<td>$datos[2]</td>
<td>$datos[3]</td>
<td>$datos[4]</td>
<td>$datos[5]</td>
<td>$datos[6]</td>
<td>$datos[7]</td>
</tr>";
}

echo "</table> </center><br><br>";
?>
</p>
	  <p>
        <?php


$mostrar_datos="select login, contrasena from entrenador where documento='$variable_en';";
$enviar_consulta_mostrar=@mysql_query($mostrar_datos, $conexion);

echo '
<center>INGRESO AL SISTEMA
<table></center>


<tr>
<td><b>Usuario</b></td>
<td><b>Contrase&ntilde;a</b></td>
</tr> ';


while($datos=@mysql_fetch_row($enviar_consulta_mostrar))
{

echo "<tr>
<td>$datos[0]</td>
<td>$datos[1]</td>
</tr>";
}

echo "</table> </center>";

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