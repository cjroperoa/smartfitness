<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta name="author" content="Cristian 'GOPE' Ropero"/>
<meta http-equiv="content-language" content="es"/>

<title>Actualizar Datos Entrenador</title>	

	
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
		padding-top:5%;
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
		top: 80%;
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
						<li><a href="ENVIAR_ACTUALIZACION_DATOS.PHP"><span>Actualizar Datos</span></a></li>
						<li><a href="insertar_mostrar_datos.php"><span>Mis Datos</span></a></li>
						<li><a href="VERIFICAR_CAMBIAR_CONTRASENA.PHP"><span>Cambiar Contraseña</span></a></li>
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
  <p>
	  <?php
	  
    require("/../../CONEXION_BD.php");
	
	
	
    $consulta="Select nombre, documento, fecha_nacimiento, edad, sexo, mail, telefono, celular  From smartfitness.entrenador where documento='$variable_en'";
	  
	  $result=mysql_query($consulta);  

		while ($row=mysql_fetch_array($result)) 
		{
			
		echo'
		<fieldset id="actualizardatos">
		<form method="post" autocomplete="off" action="INSERTAR_ACTUALIZACION_DATOS.PHP" />
		
		<legend> ACTUALIZAR DATOS </legend>
		
			<div>
			<label for="name">Nombre:</label>
			<input name="nombre" type="text" value="'.$row["nombre"].'" size="29" pattern="|^[a-zA-Z ñÑáéíóúüç]*$|"  title="El nombre debe estar formado únicamente por letras"/>
			</div>
			
			<div>
			<label for="name">Documento:</label>
			<input name="documento" type="text" value="'.$row["documento"].'" size="29" pattern="[0-9]+" title="El documento debe estar formado únicamente por numeros"/>
			</div>
			
			<div>
			<label for="pass">Fecha Nacimiento:</label>
			<input type="text" name="fecha" value="'.$row["fecha_nacimiento"].'" size="29" />
			</div>
						
			<div>
			<label for="pass">Edad:</label>
			<input type="text" name="edad" value="'.$row["edad"].'" size="29" pattern="[0-9]+" title="La edad debe estar formada únicamente por numeros"/>
			</div>
			
			<div>
			<label for="pass">Sexo:</label>
      		<input type="text" name="sexo" value="'.$row["sexo"].'" size="29" />
			</div>
			
			<div>
			<label for="pass">Mail:</label>
			<input type="text" name="mail" value="'.$row["mail"].'" size="29" pattern="^[a-zA-Z0-9.!#$%&*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$" title="El correo electronico contiene caracteres especiales"/>
			</div>
		
			<div>
			<label for="pass">Telefono:</label>
			<input type="text" name="tele" value="'.$row["telefono"].'" size="29" pattern="[0-9]+" title="El telefono debe estar formado únicamente por numeros"/>
			</div>
			
			<div>
			<label for="pass">Celular:</label>
			<input type="text" name="celu" value="'.$row["celular"].'" size="29" pattern="[0-9]+" title="El celular debe estar formada únicamente por numeros" />
			</div>
			
			
		
		';
		
		}
		
	?>
	  <input class="btenviar" name="enviar" type="image" src="../../IMAGENES/bt_enviar.png" value="Actualizar Datos" />
	  <br/>
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






