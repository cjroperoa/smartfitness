<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta name="author" content="Cristian 'GOPE' Ropero"/>
<meta http-equiv="content-language" content="es"/>

<title>Crear Nuevo Administrador - ADMINISTRADOR</title>	
	
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
	
	#actualizardatos select {
		/*border:medium none !important;
		font-size:12px;*/
		padding-left:2px;
		padding-top: 2px;
		text-align:center;
		}
		
	div {
  		margin: 1px 0;
		}
		
	.btenviar{
		position:fixed;
		top: 85%;
		left: 39%;
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
      <h2 class="bienvenida"> Hola Administrador !! </h2>
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
    
    	<fieldset id="actualizardatos">
		<form name="form1" method="post" action="INSERTAR_NUEVO.php" onsubmit="return validar(this);">
        
        <legend> CREAR NUEVO ADMINISTRADOR:</legend>
        
        <div>
        <label>Nombre:</label>
        <input name="nombre" required autocomplete="off" placeholder="NOMBRE" type="text" id="nombre" pattern="|^[a-zA-Z ñÑáéíóúüç]*$|" title="El nombre debe estar formado únicamente por letras" />
        </div>
        
        <div>
        <label>Apellido:</label>
        <input name="apellido"  required autocomplete="off" placeholder="APELLIDO" type="text" id="apellido" pattern="|^[a-zA-Z ñÑáéíóúüç]*$|" title="El nombre debe estar formado únicamente por letras"/>
        </div>
        
        <div>
        <label>Documento:</label>
        <input name="documento" required type="text" autocomplete="off" placeholder="DOCUMENTO" id="documento" pattern="[0-9]+" title="El documento debe estar formado únicamente por numeros" />
        </div>
        
       <div>
        <label>Sexo:</label>
        <select  name="sexo" id="sexo">
            <option>--Seleccione--</option>
            <option>Femenino</option>
            <option>Masculino</option>
        </select>
        </div>
        
        <div>
        <label>EDAD:</label>
        <input name="edad" required autocomplete="off" placeholder="EDAD" type="text" id="edad" pattern="[0-9]+" title="Le edad debe estar formado únicamente por numeros"/>
        </div>
        
        <div>
        <label>Mail:</label>
        <input name="mail" required autocomplete="off" placeholder="CORREO ELECTRONICO" pattern="^[a-zA-Z0-9.!#$%&*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$" type="text" id="mail" title="El correo electronico debe estar formado correctamente" />
        </div>
        
        <div>
        <label>TELEFONO:</label>
        <input name="tele" required autocomplete="off" placeholder="TELEFONO" type="text" id="tele" pattern="[0-9]+" title="El telefono debe estar formado únicamente por numeros" />
        </div>
        
        <div>
        <label>CELULAR:</label>
        <input name="celu" required autocomplete="off" placeholder="CELULAR" type="text" id="celu" pattern="[0-9]+" title="El celular debe estar formado únicamente por numeros"  />
        </div>
        
        <legend>Ingreso Al Sistema</legend>
        
        <div>
        <label>USUARIO:</label>
        <input name="login"  required autocomplete="off" placeholder="USUARIO" type="text" id="login" pattern="|^[a-zA-Z ñÑáéíóúüç]*$|" title="El usuario debe estar formado únicamente por letras"/>
        </div>
        
        <div>
        <label>CONTRASE&Ntilde;A:</label>
        <input name="contrasena" required autocomplete="off"  type="password" id="contrasena" pattern="\S{8,10}" title="Contraseña Numerica Mayor a Ocho caracteres" />
        </div>
        
        <input class="btenviar" name="enviar" type="image" src="../../IMAGENES/bt_enviar.png" value="Ingresar"/> 
               
      </form>
      </fieldset>           
    </div>
    
    <script language="javascript">

	function validar(variable)
	{		
		if(form1.sexo.value=='--Seleccione--')
		{
			alert("Porvaor seleccion sexo");
			form1.sexo.focus();
			return false;
		}
		
				
	   if(form1.contrasena.value.length < 8)
		{
			alert("La Contraseña Mayor a ocho carateres");
			form1.contrasena.focus();
			return false;
		}
					
	}
</script>
    		
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