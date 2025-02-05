<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta name="author" content="Cristian 'GOPE' Ropero"/>
<meta http-equiv="content-language" content="es"/>

<title>Actualizar Rutina Alimentaria</title>	

	
    <link type="image/ico" href="../../IMAGENES/Favicon/Favicon.ico" rel="shortcut icon"> <!-- Carga del Favicon -->    
	<link type="text/css" href="../../ESTILOS/ESTILO_BASE.css" rel="stylesheet"/> <!-- CSS Base - Principal -->
	<link type="text/css" href="../../ESTILOS/MENU.css" rel="stylesheet"/> <!-- CSS - Menu -->

    <script type="text/javascript" src="../../SCRIPTS/jquery.js"></script> <!-- Script Utilidad JQuery-->
    <script type="text/javascript" src="../../SCRIPTS/Menu/menu.js"></script> <!-- Script Menu [Animación]-->
    
    <style>
	
	
	#tabla {
		position:relative;
		width: 70%; /*Ancho Div*/
		height: 81%; /* Alto Div*/
		top:15%;
		left: 5%;
		border:medium none;
		color:#FFF;		
		font-family:'Trebuchet MS', Tahoma, Arial;
		text-shadow: #B1B1B1 0.1em 0.1em 0.2em;
		text-transform:uppercase;
		}
		
		
		#tabla td{
		text-align:center;
		border:#FFFFFF double;}
	#tabla legend {
		font-size: 21px;
		padding-top: 20px;
		padding-right: -9px;
		letter-spacing:1px;
		padding-bottom:10px;
		text-decoration:underline;
		text-align:center;
		}
		
	#tabla label {
		font-size:14px;
		padding-left: 50px;
		padding-right: 50px;
		padding:10px 0 3px;		
	    float: left;		
	  	width: 25%;
		}
		
	#tabla input[type="text"] {
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
$consulta_lunes="select * from smartfitness.rutina_lunes_alimento where documento='$documento'";
$result_lunes=mysql_query($consulta_lunes);

if ($row = mysql_fetch_array($result_lunes))
{
	
	do   
		{
				echo '<fieldset id="tabla">
				<FORM  METHOD="POST" AUTOCOMPLETE="OFF" ACTION="insertar_actualizacion_rutina_alimetaria.php" onsubmit="return validar(this);" >';

					echo"<table>
					
					<tr>	
					<td ></td>				
					<td >Desayuno:</td>
					<td >Medias Nueves:</td>
					<td >Almuerzo:</td>
					<td>Onces:</td>
					<td >Cena:</td>
					</tr>
					
					<tr>
					<td>Documento:</td>
					<td colspan='5'><input type='text' name='documento' value='".$row["documento"]."' pattern='[0-9]+' title='El es numerico'></br><br>
					</tr>
					<tr>
					 <td >Lunes</td>
					 <td ><input type='text' name='desayuno1'  value='".$row["desayuno"]."'></td>
					 <td ><input type='text' name='onces1' value='".$row["onces_manana"]."'></td>
					 <td ><input type='text' name='almuerzo1' value='".$row["almuerzo"]."'></td>
					 <td ><input type='text' name='once1' value='".$row["onces_tarde"]."'></td>
					 <td ><input type='text' name='cena1' value='".$row["cena"]."'></td>
					 </tr>";
					
				}

	
    while ($row = mysql_fetch_array($result_lunes)); //Hace todo el recorrido por la tabla
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

$consulta_martes="select * from smartfitness.rutina_martes_alimento where documento='$documento'";
$result_martes=mysql_query($consulta_martes);

if ($row = mysql_fetch_array($result_martes))
{
	
	do   
		{

			echo"<tr>
			<td >Martes  </td>
			<td ><input type='text' name='desayuno2'  value='".$row["desayuno"]."'></td>
			<td><input type='text' name='onces2' value='".$row["onces_manana"]."'></td>
			<td ><input type='text' name='almuerzo2' value='".$row["almuerzo"]."'></td>
			<td ><input type='text' name='once2' value='".$row["onces_tarde"]."'></td>
			<td><input type='text' name='cena2' value='".$row["cena"]."'></td>
			</tr>";
		}
		 while ($row = mysql_fetch_array($result_martes)); //Hace todo el recorrido por la tabla
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
	
$consulta_miercoles="select * from smartfitness.rutina_miercoles_alimento where documento='$documento'";
$result_miercoles=mysql_query($consulta_miercoles);

if ($row = mysql_fetch_array($result_miercoles))
{
	
	do   
	{
			echo"<tr>
			<td>Miercoles</td>
			<td><input type='text' name='desayuno3'  value='".$row["desayuno"]."'></td>
			<td ><input type='text' name='onces3' value='".$row["onces_manana"]."'></td>
			<td ><input type='text' name='almuerzo3' value='".$row["almuerzo"]."'></td>
			<td ><input type='text' name='once3' value='".$row["onces_tarde"]."'></td>
			<td ><input type='text' name='cena3' value='".$row["cena"]."'></td>
			</tr>";
		}
		 while ($row = mysql_fetch_array($result_miercoles)); //Hace todo el recorrido por la tabla
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
	
$consulta_jueves="select * from smartfitness.rutina_jueves_alimento where documento='$documento'";
$result_jueves=mysql_query($consulta_jueves);
if ($row4 = mysql_fetch_array($result_jueves))
{
	
	do   
	{
			echo"<tr>
			<td >Jueves </td>
			<td ><input type='text' name='desayuno4'  value='".$row4["desayuno"]."'></td>
			<td><input type='text' name='onces4' value='".$row4["onces_manana"]."'></td>
			<td ><input type='text' name='almuerzo4' value='".$row4["almuerzo"]."'></td>
			<td ><input type='text' name='once4' value='".$row4["onces_tarde"]."'></td>
			<td ><input type='text' name='cena4' value='".$row4["cena"]."'></td>
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
	
$consulta_viernes="select * from smartfitness.rutina_viernes_alimento where documento='$documento'";
$result_viernes=@mysql_query($consulta_viernes);

if ($row5 = mysql_fetch_array($result_viernes))
{
	
	do   
	{
			echo"<tr>
			<td>Viernes</td>
			<td><input type='text' name='desayuno5'  value='".$row5["desayuno"]."'></td>
			<td><input type='text' name='onces5' value='".$row5["onces_manana"]."'></td>
			<td ><input type='text' name='almuerzo5' value='".$row5["almuerzo"]."'></td>
			<td ><input type='text' name='once5' value='".$row5["onces_tarde"]."'></td>
			<td ><input type='text' name='cena5' value='".$row5["cena"]."'></td>
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
	
$consulta_sabado="select * from smartfitness.rutina_sabado_alimento where documento='$documento'";
$result_sabado=@mysql_query($consulta_sabado);

if ($row6 = mysql_fetch_array($result_sabado))
{
	
	do   
	{

			echo"<tr>
			<td >Sabado</td>
			<td><input type='text' name='desayuno6'  value='".$row6["desayuno"]."'></td>
			<td ><input type='text' name='onces6' value='".$row6["onces_manana"]."'></td>
			<td><input type='text' name='almuerzo6' value='".$row6["almuerzo"]."'></td>
			<td ><input type='text' name='once6' value='".$row6["onces_tarde"]."'></td>
			<td ><input type='text' name='cena6' value='".$row6["cena"]."'></td>
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
</div><!-- Bloque Copyright -->
	<div id="tbCopyrigth">	  
		<div><span>&copy; Copyright 2012 | Todos los derechos Reservados <strong>  Online Web  </strong> Pol&iacute;tica de privacidad</span></div>	  
 	</div> 
    	    
</body>

</html>

<!-- Elimina Back-Link de Apycom -->
<div style="visibility:hidden">
<a href="http://apycom.com/">Apycom jQuery Menus</a>
</div>