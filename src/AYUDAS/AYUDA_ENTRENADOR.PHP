<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta name="author" content="Cristian 'GOPE' Ropero"/>
<meta http-equiv="content-language" content="es"/>

<title>Bienvenido a Entrenador</title>	
	
  <link type="image/ico" href="../IMAGENES/Favicon/Favicon.ico" rel="shortcut icon"> <!-- Carga del Favicon -->    
	<link type="text/css" href="../ESTILOS/ESTILO_BASE.css" rel="stylesheet"/> <!-- CSS Base - Principal -->
	<link type="text/css" href="../ESTILOS/MENU.css" rel="stylesheet"/> <!-- CSS - Menu -->

    <script type="text/javascript" src="../SCRIPTS/jquery.js"></script> <!-- Script Utilidad JQuery-->
    <script type="text/javascript" src="../SCRIPTS/Menu/menu.js"></script> <!-- Script Menu [Animación]-->
  <style>
	
	
	#actualizardatos {
		position:relative;
		width: 57%; /*Ancho Div*/
		height: 80%; /* Alto Div*/
		padding-top:5%;
		padding-left: 20%;
		border:medium none;
		color:#FFF;		
		font-family:'Trebuchet MS', Tahoma, Arial;
		text-shadow: #B1B1B1 0.1em 0.1em 0.2em;
		text-transform:uppercase;
		}
		
	#actualizardatos legend {
		font-size: 22px;
		padding-top: 20px;
		padding-right: -9px;
		letter-spacing:1px;
		padding-bottom:10px;
		text-decoration:underline;
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
		
		
	
    </style>
       
</head>

<body>
<?php

session_start();

$variable_cliente=$_SESSION['entrenador'];

?>
	<!----- Imagen Fondo CSS ----->
	<img class="fondo" src="../IMAGENES/fondo.jpg"/> 

    <!----- Bloque Cabecera [SALUDO]----->    
    <div id="tbcabecera">   
          
	<img class="logo" src="../IMAGENES/logo-smart.jpg"/>
      <h2 class="bienvenida"> Hola Entrenador !! </h2>
      <img class="img-usuario" src="../IMAGENES/admin.png"/>

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
						<li><a href="../opciones_entrenador/ADMINISTRADOR/MOSTRAR_DATOS_ADMINISTRADOR.PHP"><span>Mostar Datos</span></a></li>
					</ul>
				</div>
             </li>
            <!-- Opciones Entrenador -->    
            <li><a href="../OPC_ENTRENADOR.php" class="parent"><span>ENTRENADOR</span></a>
				<div>
					<ul>
						<li><a href="../opciones_entrenador/ENTRENADOR/ENVIAR_ACTUALIZACION_DATOS.PHP"><span>Actualizar Datos</span></a></li>
						<li><a href="../opciones_entrenador/ENTRENADOR/insertar_mostrar_datos.php"><span>Mis Datos</span></a></li>
						<li><a href="../opciones_entrenador/ENTRENADOR/VERIFICAR_CAMBIAR_CONTRASENA.PHP"><span>Cambiar Contraseña</span></a></li>
						<li><a href="../opciones_entrenador/ENTRENADOR/mostrar_horario_trabajo.php"><span>Horario De Trabajo</span></a></li>
						
					</ul>
				</div>
            </li>
            <!-- Opciones Cliente -->    
            <li><a href="#" class="parent"><span>CLIENTE</span></a>
				<div>
					<ul>
						<li><a href="../opciones_entrenador/cliente/clientes_asignados.php"><span>Clientes Asignados</span></a></li>
                        <li><a href="../opciones_entrenador/cliente/REGISTRAR_RUTINA]_FISICA.PHP"><span>Crear Rutina Fisica</span></a></li>
						<li><a href="../opciones_entrenador/cliente/REGISTRAR_RUTINA_ALIMENTICIA.PHP"><span>Crear Rutina Alimenticia</span></a></li>
						<li><a href="../opciones_entrenador/cliente/REGISTRAR_INFORME_CLIENTE.PHP"><span>Registrar Informe</span></a></li>
						<li><a href="../opciones_entrenador/cliente/verificar_actualizar_informe.php"><span>Actualizar Informe</span></a></li>
						<li><a href="../opciones_entrenador/cliente/verificar_actualizar_rutina_fisica.php" ><span>Actualizar Rutina Fisica</span></a></li>
						<li><a href="../opciones_entrenador/cliente/verificar_actualizar_rutina_alimentaria.php" ><span>Actualizar Rutina Alimenticia</span></a></li>
					</ul>
				</div> 
            </li>           
            <!----- Opciones Otras [Ayuda-Contacto-Cerrar]----->    		
            <li><a href="AYUDA_ENTRENADOR.PHP"><span>AYUDA</span></a></li>	           
            <li><a href="../cerrar_sesion.php"><span>CERRAR SESION</span></a></li> 
                   	
     	</ul>
       </div>       
            
	</div>
    
    <!-- Bloque Contenido (Principal) -->
	<div id="tbprincipal">
	
<img src="../IMAGENES/ayuda_entrenador/pagina_principal.JPG" width="433" height="404" id="actualizardatos"/>
<img src="../IMAGENES/ayuda_entrenador/1_en.JPG" width="433" height="404" id="actualizardatos" />
<img src="../IMAGENES/ayuda_entrenador/2_en.JPG" width="433" height="404" id="actualizardatos" />
<img src="../IMAGENES/ayuda_entrenador/3_en.JPG" width="433" height="404" id="actualizardatos" />
<img src="../IMAGENES/ayuda_entrenador/4_en.JPG" width="433" height="404" id="actualizardatos" />
<img src="../IMAGENES/ayuda_entrenador/5_en.JPG" width="433" height="404" id="actualizardatos" />

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
