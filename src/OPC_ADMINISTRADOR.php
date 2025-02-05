<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta name="author" content="Cristian 'GOPE' Ropero"/>
<meta http-equiv="content-language" content="es"/>

<title>Bienvenido a Administrador</title>	
	
    <link type="image/ico" href="IMAGENES/Favicon/Favicon.ico" rel="shortcut icon"> <!-- Carga del Favicon -->    
	<link type="text/css" href="ESTILOS/ESTILO_BASE.css" rel="stylesheet"/> <!-- CSS Base - Principal -->
	<link type="text/css" href="ESTILOS/MENU.css" rel="stylesheet"/> <!-- CSS - Menu -->

    <script type="text/javascript" src="SCRIPTS/jquery.js"></script> <!-- Script Utilidad JQuery-->
    <script type="text/javascript" src="SCRIPTS/Menu/menu.js"></script> <!-- Script Menu [Animación]-->
    
</head>

<body>

<?php
	require('seguridad_smartfitness.php');
		
		?>
    
	<!----- Imagen Fondo CSS ----->
	<img class="fondo" src="IMAGENES/fondo.jpg"/> 

    <!----- Bloque Cabecera [SALUDO]----->    
    <div id="tbcabecera">   
          
	  <img class="logo" src="IMAGENES/logo-smart.jpg"/>
      <h2 class="bienvenida"> Hola Administrador !! </h2>
      <img class="img-usuario" src="IMAGENES/admin.png"/>

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
					<li><a href="OPCIONES/ADMINISTRADOR/CREAR_NUEVO.php"><span>Crear Nuevo Administrador</span></a></li>
						<li><a href="OPCIONES/ADMINISTRADOR/ENVIAR_ACT_DATOS.php"><span>Actualizar Mis Datos</span></a></li>
						<li><a href="OPCIONES/ADMINISTRADOR/VERIFICACION_CAMBIAR_CONTRASENA.php"><span>Cambiar Mi Contraseña</span></a></li>
                        <li><a href="OPCIONES/ADMINISTRADOR/ADMINISTRADORES_DEL_GIMNASIO.PHP"><span>Administradores Del Gimnasio</span></a></li>
						 <li><a href="OPCIONES/ADMINISTRADOR/VERIFICACION_ELIMINAR_ADMINISTRADOR.PHP"><span>Eliminar Administrador</span></a></li>
						 
					</ul>
				</div>
             </li>
            <!-- Opciones Entrenador -->    
            <li><a href="#" class="parent"><span>ENTRENADOR</span></a>
				<div>
					<ul>
						<li><a href="OPCIONES/ENTRENADOR/CREAR_NUEVO_ENTRENADOR.php"><span>Crear Nuevo</span></a></li>
						<li><a href="OPCIONES/ENTRENADOR/VERIFICACION_ACTUALIZAR_DATOS_ENTRENADOR.php"><span>Actualizar Datos</span></a></li>
                        <li><a href="OPCIONES/ENTRENADOR/MOSTRAR_LISTA_ENTRENADORES.php"><span>Lista Entrenadores</span></a></li>
                        <li><a href="OPCIONES/ENTRENADOR/VERIFICACION_ELIMINAR_ENTRENADOR.php"><span>Eliminar</span></a></li>
					</ul>
				</div>
            </li>
            <!-- Opciones Cliente -->    
            <li><a href="#" class="parent"><span>CLIENTE</span></a>
				<div>
					<ul>
						<li><a href="OPCIONES/CLIENTE/CREAR_NUEVO_CLIENTE.php"><span>Crear Nuevo</span></a></li>
						<li><a href="OPCIONES/CLIENTE/VERIFICACION_ACTUALIZACION_DATOS.php"><span>Actualizar Datos</span></a></li>
                        <li><a href="OPCIONES/CLIENTE/REGISTRAR_PAGO_CLIENTE.php"><span>Registrar Pago</span></a></li>
						<li><a href="OPCIONES/CLIENTE/VERIFICACION_MOSTRAR_RUTINA_CLIENTE.php"><span>Rutina Fisica</span></a></li>
						<li><a href="OPCIONES/CLIENTE/VERIFICACION_MOSTRAR_DIETA_CLIENTE.php" ><span>Rutina Alimentaria</span></a></li>
						<li><a href="OPCIONES/CLIENTE/VERIFICACION_MOSTRAR_INFORME_CLIENTE.php" ><span>Ver Informe</span></a></li>
                        <li><a href="OPCIONES/CLIENTE/MOSTRAR_CLIENTES_GIMNASIO.php"><span>Lista Clientes</span></a></li>
                        <li><a href="OPCIONES/CLIENTE/MOSTRAR_PAGO_CLIENTES.php"><span>Lista Pagos</span></a></li>
                        
                        <li><a href="OPCIONES/CLIENTE/VERIFICACION_ELIMINAR_CLIENTE.php"><span>Eliminar</span></a></li>                        
                        
                        
                        
					</ul>
				</div> 
            </li>           
            <!----- Opciones Otras [Ayuda-Contacto-Cerrar]----->    		
            <li><a href="AYUDAS/AYUDA_ADMINISTRADOR.PHP"><span>AYUDA</span></a></li>	      
            <li><a href="cerrar_sesion.php"><span>CERRAR SESION</span></a></li> 
                   	
     	</ul>
       </div>       
            
	</div>
    
    <!-- Bloque Contenido (Principal) -->
	<div id="tbprincipal">
	<br />
	<br />
	<br />
	<br />
	<br />
	<br />
	<marquee width=1000 direction=left>
<img src="IMAGENES/imagenes/1.jpg" /> <img src="IMAGENES/imagenes/2.jpg" /> <img src="IMAGENES/imagenes/3.jpg" /> <img src="IMAGENES/imagenes/4.jpg"  /> <img src="IMAGENES/imagenes/5.jpg" /> <img src="IMAGENES/imagenes/6.jpg" /> <img src="IMAGENES/imagenes/7.jpg" />
            </marquee>
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
