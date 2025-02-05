<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta name="author" content="Cristian 'GOPE' Ropero"/>
<meta http-equiv="content-language" content="es"/>

<title>Cambiar Mi Contraseña</title>	
	
    <link type="image/ico" href="IMAGENES/Favicon/Favicon.ico" rel="shortcut icon"> <!-- Carga del Favicon -->    
	<link type="text/css" href="../../ESTILOS/ESTILO_BASE.css" rel="stylesheet"/> <!-- CSS Base - Principal -->    
    <link type="text/css" href="../../ESTILOS/MENU.css" rel="stylesheet"/> <!-- CSS - Menu -->
    <link type="text/css" href="../../ESTILOS/LIGHTBOX.css" rel="stylesheet" media="screen" /> <!-- CSS - LightBox -->
    
    <script src="../../SCRIPTS/LightBox/prototype.js" type="text/javascript"></script>
	<script src="../../SCRIPTS/LightBox/scriptaculous.js?load=effects" type="text/javascript"></script>
	<script src="../../SCRIPTS/LightBox/lightbox.js" type="text/javascript"></script>

</head>

<body>



<?php

require("../../seguridad_smartfitness.php");

?>

	<div id="contenedor"> 	
            <div id="opcverificar">
            <p>Realmente desea Cambiar su Contraseña</p>
            <a class="aceptar" href="CAMBIAR_CONTRASENA_ENTRENADOR.PHP" ><img src="../../IMAGENES/aceptar.png"/></a>
            <a class="cancelar" href="../../OPC_ENTRENADOR.php"><img src="../../IMAGENES/cancelar.png"/></a>
            </div>
         </div>    

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