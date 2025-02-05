<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta name="author" content="Cristian 'GOPE' Ropero"/>
<meta http-equiv="content-language" content="es"/>

<title>Actualizar Rutina Fisica</title>	

	
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
		top:12%;
		left: 5%;
		border:medium none;
		color:#FFF;		
		font-family:'Trebuchet MS', Tahoma, Arial;
		text-shadow: #B1B1B1 0.1em 0.1em 0.2em;
		text-transform:uppercase;
		}
		#actualizardatos tabla{
		text-align:center;
		border:#FFFFFF double;}
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
		top: 70%;
		left: 43%;
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
    
	
	  <?php
require("/../../CONEXION_BD.php");


$documento=$_POST['documento'];
$consulta_lunes="select * from smartfitness.rutina_lunes where documento_cliente='$documento'";
$result_lunes=mysql_query($consulta_lunes);

if ($row1 = mysql_fetch_array($result_lunes))
{
	
	do   
		{

		echo '<fieldset id="actualizardatos">
		<FORM  METHOD="POST" AUTOCOMPLETE="OFF" ACTION="insertar_actuaizacion_rutina_fisica.php" onsubmit="return validar(this);" >';
		echo"<table>
			
		<tr>
		<td ></td>		
		<td >Nombre De La Actividad:</td>		
		<td >Descripcion De La Actividad</td>		
		<td >Duracion Del Ejercicio</td>		
		<td >Sesion</td>		
		<td >Nombre De La Maquina</td>
		</tr>
		
		
		<tr>
		<td>Documento:</td>
		<td colspan='5'><input type='text' name='documento' value='".$row1["documento_cliente"]."' pattern='[0-9]+' title='El es numerico' / ></td></br><br>
		</tr>
		<tr>
		<td >Lunes</td>
		<td ><input type='text' name='ACTIVIDAD1'  value='".$row1["nombre_actividad"]."'></td>
		<td ><input type='text' name='DESCRIPCION1' value='".$row1["descripcion_actividad"]."'></td>
		<td ><input type='text' name='DURACION1' value='".$row1["duracion"]."'></td>
		<td ><input type='text' name='SESION1' value='".$row1["sesion"]."'></td>
		<td><input type='text' name='MAQUINA1' value='".$row1["nombre_maquina"]."'></td>
		</tr>";

	}

	
    while ($row1 = mysql_fetch_array($result_lunes)); //Hace todo el recorrido por la tabla
}
else
{
	echo('<script languaje="javascript">
		document.location=("../../OPC_ENTRENADOR.php");
		alert("Documento Incorrecto");
	</script>
	');
}
	?>
      <?php
	  
$consulta_martes="select * from smartfitness.rutina_martes where documento_cliente='$documento'";
$result_martes=mysql_query($consulta_martes);

if ($row2 = mysql_fetch_array($result_martes))
{
	
	do   
		{

			echo"<tr>
			<td >Martes</td>
			<td ><input type='text' name='activi'  value='".$row2["nombre_actividad"]."'></td>
			<td><input type='text' name='descri' value='".$row2["descripcion_actividad"]."'></td>
			<td><input type='text' name='dura' value='".$row2["duracion"]."'></td>
			<td ><input type='text' name='sesion' value='".$row2["sesion"]."'></td>
			<td ><input type='text' name='maqui' value='".$row2["nombre_maquina"]."'></td>
			</tr>";
			
			
		}while ($row2 = mysql_fetch_array($result_martes)); //Hace todo el recorrido por la tabla
}
else
{
	echo('<script languaje="javascript">
		document.location=("../../OPC_ENTRENADOR.php");
		alert("Documento Incorrecto");
	</script>
	');
}
	?>
      <?php 
	



$consulta_miercoles="select * from smartfitness.rutina_miercoles where documento_cliente='$documento'";

$result_miercoles=mysql_query($consulta_miercoles);


if ($row3 = mysql_fetch_array($result_miercoles))
{
	
	do   
		{
		echo"<tr>
		<td>Miercoles </td>
		<td ><input type='text' name='ACTIVIDAD3'  value='".$row3["nombre_actividad"]."'></td>
		<td ><input type='text' name='DESCRIPCION3' value='".$row3["descripcion_actividad"]."'></td>
		<td><input type='text' name='DURACION3' value='".$row3["duracion"]."'></td>
		<td ><input type='text' name='SESION3' value='".$row3["sesion"]."'></td>
		<td><input type='text' name='MAQUINA3' value='".$row3["nombre_maquina"]."'></td>
		</tr>";
		
}while ($row3 = mysql_fetch_array($result_miercoles)); //Hace todo el recorrido por la tabla
}
else
{
	echo('<script languaje="javascript">
		document.location=("../../OPC_ENTRENADOR.php");
		alert("Documento Incorrecto");
	</script>
	');
}

	?>
      <?php

$consulta_jueves="select * from smartfitness.rutina_jueves where documento_cliente='$documento'";
$result_jueves=mysql_query($consulta_jueves);

if ($row4 = mysql_fetch_array($result_jueves))
{
	
	do   
		{
			echo"<tr>
			<td >Jueves </td>
			<td><input type='text' name='ACTIVIDAD4'  value='".$row4["nombre_actividad"]."'></td>
			<td ><input type='text' name='DESCRIPCION4' value='".$row4["descripcion_actividad"]."'></td>
			<td ><input type='text' name='DURACION4' value='".$row4["duracion"]."'></td>
			<td ><input type='text' name='SESION4' value='".$row4["sesion"]."'></td>
			<td ><input type='text' name='MAQUINA4' value='".$row4["nombre_maquina"]."'></td>
			</tr>";
		}
		while ($row4 = mysql_fetch_array($result_jueves)); //Hace todo el recorrido por la tabla
}
else
{
	echo('<script languaje="javascript">
		document.location=("../../OPC_ENTRENADOR.php");
		alert("Documento Incorrecto");
	</script>
	');
}
	?>
      <?php
	
$consulta_viernes="select * from smartfitness.rutina_viernes where documento_cliente='$documento'";
$result_viernes=@mysql_query($consulta_viernes);

if ($row5 = mysql_fetch_array($result_viernes))
{
	
	do   
		{

			echo"<tr>
			<td >Viernes </td>
			<td ><input type='text' name='ACTIVIDAD5'  value='".$row5["nombre_actividad"]."'></td>
			<td ><input type='text' name='DESCRIPCION5' value='".$row5["descripcion_actividad"]."'></td>
			<td ><input type='text' name='DURACION5' value='".$row5["duracion"]."'></td>
			<td ><input type='text' name='SESION5' value='".$row5["sesion"]."'></td>
			<td ><input type='text' name='MAQUINA5' value='".$row5["nombre_maquina"]."'></td>
			</tr>";
		}
		while ($row5 = mysql_fetch_array($result_viernes)); //Hace todo el recorrido por la tabla
}
else
{
	echo('<script languaje="javascript">
		document.location=("../../OPC_ENTRENADOR.php");
		alert("Documento Incorrecto");
	</script>
	');
}
	?>
      <?php
	


$consulta_sabado="select * from smartfitness.rutina_sabado where documento_cliente='$documento'";
$result_sabado=@mysql_query($consulta_sabado);

if ($row6 = mysql_fetch_array($result_sabado))
{
	
	do   
		{
			echo"<tr>
			<td >Sabado </td>
			<td ><input type='text' name='ACTIVIDAD6'  value='".$row6["nombre_actividad"]."'></td>
			<td><input type='text' name='DESCRIPCION6' value='".$row6["descripcion_actividad"]."'></td>
			<td><input type='text' name='DURACION6' value='".$row6["duracion"]."'></td>
			<td><input type='text' name='SESION6' value='".$row6["sesion"]."'></td>
			<td ><input type='text' name='MAQUINA6' value='".$row6["nombre_maquina"]."'></td>
			</tr>
			
			</table>
			</fieldset>";
		}
		while ($row6 = mysql_fetch_array($result_sabado)); //Hace todo el recorrido por la tabla
}
else
{
	echo('<script languaje="javascript">
		document.location=("../../OPC_ENTRENADOR.php");
		alert("Documento Incorrecto");
	</script>
	');
}
	?>
<input class="btenviar" name="enviar" type="image" src="../../IMAGENES/bt_enviar.png" value="Actualizar Datos" />
      </form>  
       </fieldset>   
       
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
