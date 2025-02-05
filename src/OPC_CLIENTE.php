<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta name="author" content="Cristian 'GOPE' Ropero"/>
<meta http-equiv="content-language" content="es"/>

<title>Bienvenido a Cliente</title>	
	
    <link type="image/ico" href="IMAGENES/Favicon/Favicon.ico" rel="shortcut icon"> <!-- Carga del Favicon -->    
	<link type="text/css" href="ESTILOS/ESTILO_BASE.css" rel="stylesheet"/> <!-- CSS Base - Principal -->
	<link type="text/css" href="ESTILOS/MENU.css" rel="stylesheet"/> <!-- CSS - Menu -->

    <script type="text/javascript" src="SCRIPTS/jquery.js"></script> <!-- Script Utilidad JQuery-->
    <script type="text/javascript" src="SCRIPTS/Menu/menu.js"></script> <!-- Script Menu [Animación]-->
    
</head>

<body>

<?php
	require("seguridad_smartfitness.php");
		
		?>

	<!----- Imagen Fondo CSS ----->
	<img class="fondo" src="IMAGENES/fondo.jpg"/> 

    <!----- Bloque Cabecera [SALUDO]----->    
    <div id="tbcabecera">   
          
	  <img class="logo" src="IMAGENES/logo-smart.jpg"/>
      
	  <h2 class="bienvenida"> Hola Cliente!! </h2>
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
						<li><a href="OPCIONES_CLIENTE/ADMINISTRADOR/mostrar_datos_administrador.php"><span>Mostrar Datos</span></a></li>
					</ul>
				</div>
             </li>
            <!-- Opciones Entrenador -->    
            <li><a href="#" class="parent"><span>ENTRENADOR</span></a>
				<div>
					<ul>
						<li><a href="OPCIONES_CLIENTE/ENTRENADOR/insertar_mostrar_datos_entrenador.PHP"><span>Mostrar Datos</span></a></li>
						<li><a href="OPCIONES_CLIENTE/ENTRENADOR/insertar_mostrar_datos_horario_entrenador.PHP"><span>Mostrar Horario</span></a></li>
					</ul>
				</div>
            </li>
            <!-- Opciones Cliente -->    
            <li><a href="OPC_CLIENTE.php" class="parent"><span>CLIENTE</span></a>
				<div>
					<ul>
						<li><a href="OPCIONES_CLIENTE/CLIENTE/ENVIAR_ACTUALIZACION_CLIENTE_DATOS.php"rel="lightbox_text"><span>Actualizar Mis Datos</span></a></li>
						<li><a href="OPCIONES_CLIENTE/CLIENTE/INSERTAR_MOSTRAR_DATOS_CLIENTE.php" rel="lightbox_text"><span>Verificar Mis Datos</span></a></li>
						<li><a href="OPCIONES_CLIENTE/CLIENTE/INSERTAR_MOSTRAR_CLIENTE_PAGO.PHP" rel="lightbox_text"><span> Mis Pagos</span></a>
						<li><a href="OPCIONES_CLIENTE/CLIENTE/INSERTAR_MOSTRAR_CLIENTE_INFORME.PHP" rel="lightbox_text"><span> Informe</span></a></li>
                        <li><a href="OPCIONES_CLIENTE/CLIENTE/INSERTAR_MOSTRAR_RUTINA_ALIMENTARIA_CLIENTE.PHP" rel="lightbox_text"><span> Rutina Fisica</span></a></li>
						 <li><a href="OPCIONES_CLIENTE/CLIENTE/INSERTAR_MOSTRAR_RUTINA_ALIMENTARIA_CLIENTE.PHP" rel="lightbox_text"><span> Rutina Alimentaria</span></a></li>
						 <li><a href="OPCIONES_CLIENTE/CLIENTE/mostrar_rutinas_descricion.php" rel="lightbox_text"><span>Descripcion De Rutina </span></a></li>
                        
					</ul>
				</div> 
            </li>           
            <!----- Opciones Otras [Ayuda-Contacto-Cerrar]----->    		
            <li><a href="AYUDAS/AYUDA_CLIENTE.PHP"><span>AYUDA</span></a></li>	           
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
<img src="IMAGENES/imagenes/1.jpg" /> <img src="IMAGENES/imagenes/2.jpg" /> <img src="IMAGENES/imagenes/3.jpg" /> <img src="IMAGENES/imagenes/4.jpg"  /><img src="IMAGENES/imagenes/5.jpg" /><img src="IMAGENES/imagenes/6.jpg" /><img src="IMAGENES/imagenes/7.jpg" />
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
