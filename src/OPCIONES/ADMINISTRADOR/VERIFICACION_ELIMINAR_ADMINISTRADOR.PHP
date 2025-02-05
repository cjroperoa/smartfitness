<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta name="author" content="Cristian 'GOPE' Ropero"/>
<meta http-equiv="content-language" content="es"/>

<title>Eliminar Administrador</title>	
	
    <link type="image/ico" href="../CLIENTE/IMAGENES/Favicon/Favicon.ico" rel="shortcut icon"> <!-- Carga del Favicon -->    
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
            <p>Realmente desea Eliminar Un Administrador</p>
            <a class="aceptar" href="ELIMINAR_ADMINISTRADOR.PHP" rel="lightbox_text" ><img src="../../IMAGENES/aceptar.png"/></a>
            <a class="cancelar" href="../../OPC_ADMINISTRADOR.php"><img src="../../IMAGENES/cancelar.png"/></a>
            </div>
	</div>    

	<!----- Imagen Fondo CSS ----->
	<img class="fondo" src="../../IMAGENES/fondo.jpg"/> 
    
    <!----- Bloque Cabecera [SALUDO]----->    
    <div id="tbcabecera">   
          
	  <img class="logo" src="../../IMAGENES/logo-smart.jpg"/>
      <h2 class="bienvenida"> Hola Administrador !! </h2>
      <img class="img-usuario" src="../../IMAGENES/admin.png"/>

	</div>
    
    <!----- Bloque Menu ----->
	<div id="tbmenu">	 
		<!----- Menu Desplegable ----->
		<div id="menu">
		 <ul class="menu">
         	<!-- Opciones Administrador -->
			<li><a href="../../OPC_ADMINISTRADOR.php" class="parent"><span>ADMINISTRADOR</span></a>
				<div>
					<ul>
						<li><a href="CREAR_NUEVO.php"><span>Crear Nuevo Administrador</span></a></li>
						<li><a href="ENVIAR_ACT_DATOS.php"><span>Actualizar Mis Datos</span></a></li>
						<li><a href="VERIFICACION_CAMBIAR_CONTRASENA.php"><span>Cambiar Mi Contraseña</span></a></li>                 		 <li><a href="ADMINISTRADORES_DEL_GIMNASIO.PHP"><span>Administradores Del Gimnasio</span></a></li>
						<li><a href="VERIFICACION_ELIMINAR_ADMINISTRADOR.PHP"><span>Eliminar Administrador</span></a></li>
					</ul>
				</div>
             </li>
            <!-- Opciones Entrenador -->    
            <li><a href="#" class="parent"><span>ENTRENADOR</span></a>
				<div>
					<ul>
						<li><a href="../ENTRENADOR/CREAR_NUEVO_ENTRENADOR.php"><span>Crear Nuevo</span></a></li>
						<li><a href="../ENTRENADOR/VERIFICACION_ACTUALIZAR_DATOS_ENTRENADOR.php"><span>Actualizar Datos</span></a></li>
                        <li><a href="../ENTRENADOR/MOSTRAR_LISTA_ENTRENADORES.php"><span>Lista Entrenadores</span></a></li>
                        <li><a href="../ENTRENADOR/VERIFICACION_ELIMINAR_ENTRENADOR.php"><span>Eliminar</span></a></li>
					</ul>
				</div>
            </li>
            <!-- Opciones Cliente -->    
            <li><a href="#" class="parent"><span>CLIENTE</span></a>
				<div>
					<ul>
						<li><a href="../CLIENTE/CREAR_NUEVO_CLIENTE.php" rel="lightbox_text"><span>Crear Nuevo</span></a></li>
						<li><a href="../CLIENTE/VERIFICACION_ACTUALIZACION_DATOS.php" rel="lightbox_text"><span>Actualizar Datos</span></a></li>
                        <li><a href="../CLIENTE/REGISTRAR_PAGO_CLIENTE.php"rel="lightbox_text"><span>Registrar Pago</span></a></li>
						<li><a href="../CLIENTE/VERIFICACION_MOSTRAR_RUTINA_CLIENTE.php" rel="lightbox_text"><span>Rutina Fisica</span></a></li>
						 <li><a href="../CLIENTE/VERIFICACION_MOSTRAR_DIETA_CLIENTE.php"><span>Rutina Alimentaria</span></a></li>
						  <li><a href="../CLIENTE/VERIFICACION_MOSTRAR_INFORME_CLIENTE.php"rel="lightbox_text"><span>Ver Informe</span></a></li>
                        <li><a href="../CLIENTE/MOSTRAR_CLIENTES_GIMNASIO.php" rel="lightbox_text">Lista Clientes<span></span></a></li>
                        <li><a href="../CLIENTE/MOSTRAR_PAGO_CLIENTES.php" rel="lightbox_text"><span>Lista Pagos </span></a></li>
                        <li><a href="../CLIENTE/VERIFICACION_ELIMINAR_CLIENTE.php" rel="lightbox_text"><span>Eliminar</span></a></li>
                        
                       
                       
                        
					</ul>
				</div> 
            </li>           
            <!----- Opciones Otras [Ayuda-Contacto-Cerrar]----->    		
            <li><a href="../../AYUDAS/AYUDA_ADMINISTRADOR.PHP"><span>AYUDA</span></a></li>	           
            
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

