<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta name="author" content="Cristian 'GOPE' Ropero"/>
<meta http-equiv="content-language" content="es"/>

<title>Actualizar Informe Cliente</title>	

	
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
		padding-left: 25%;
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
		top: 60%;
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
						<li><a href="verificar_actualizar_rutina_fisica.php"><span>Actualizar Rutina Fisica</span></a></li>
						<li><a href="verificar_actualizar_rutina_fisica.php"><span>Actualizar Rutina Alimenticia</span></a></li>
                        
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
 
		require("../../CONEXION_BD.php");
		
		$documento=$_POST['documento'];
		
		$consulta="select * from smartfitness.informe_cliente where documento='$documento'";
		$result=mysql_query($consulta);

if ($row = mysql_fetch_array($result))
{
	
	do   
		{

		echo'
		<fieldset id="actualizardatos">
		<form method="post" autocomplete="off" action="insertar_actualizacion_informe.php" onsubmit="return validar(this);" >

		<legend> ACTUALIZAR INFORME CLIENTE </legend>

			<div>
			<label for="name">No. IDENTIFICACION:</label>
			<input name="documento" type="text" value="'.$row["documento"].'" size="18" pattern="[0-9]+" title="El documento es numerico"/>
			</div>
            
            <div>
			<label for="pass">FECHA DE INFORME:</label>		
			<input type="date" name="fecha" value="'.$row["fecha_informe"].'" size="18" />
			</div>
            
            <div>
			<label for="pass">PESO:</label>
			<input type="text" name="peso" value="'.$row["peso"].'" size="18" title="El peso es obligatorio"/>
			</div>
            
            <div>
			<label for="pass">ESTATURA:</label>
			<input type="text" name="esta" value="'.$row["estatura"].'" size="18" title="La estatura es obligatorio"/>
			</div>

            
            <div>
			<label for="pass">VALO. MEDICA:</label>
      		<input type="text" name="valome" value="'.$row["valoracion_medica"].'" size="18" title="La valoracion medica es obligatorio"/>
			</div>
            
            <div>
			<label for="pass">VALO. FISICA:</label>
			<input type="text" name="valofi" value="'.$row["valoracion_fisica"].'" size="18" title="La valoracion fisica es obligatorio"/>
			</div>
            
            <div>
			<label for="pass">RITMO CARDIACO:</label>
			<input type="text" name="ritmo" value="'.$row["ritmo_cardiaco"].'" size="18" title="El ritmo cardiaco es obligatorio"/>
			</div>
			
			';	

		}
		

	
    while ($row = mysql_fetch_array($result)); //Hace todo el recorrido por la tabla
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
    	<br/> 
        <input class="btenviar" name="enviar" type="image" src="../../IMAGENES/bt_enviar.png" value="Actualizar Datos"/>         
        </form>  
       </fieldset>
    
		<script language="javascript">

function validar(pepe)
{
	 if(form1.pass.value.length < 8)
		{
			alert("La Contraseña Mayor a ocho carateres");
			form1.pass.focus();
			return false;
		}
}

</script>

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