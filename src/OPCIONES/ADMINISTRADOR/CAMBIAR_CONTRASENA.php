<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta name="author" content="Cristian 'GOPE' Ropero"/>
<meta http-equiv="content-language" content="es"/>

<title>Cambiar Contraseña Administrador </title>	
	
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
		padding-top:10%;
		padding-left: 30%;
		border:medium none;
		color:#FFF;		
		font-family:'Trebuchet MS', Tahoma, Arial;
		text-shadow: #B1B1B1 0.1em 0.1em 0.2em;
		text-transform:uppercase;
		}
		
	#actualizardatos legend {
		font-size: 21px;
		padding-top: 20px;
		/*padding-right: -9px;
		padding-left: 25%;*/
		letter-spacing:1px;
		padding-bottom:10px;
		text-decoration:underline;
		text-align:center;
		}
		
	#actualizardatos label {
		font-size:14px;
		padding-left: 25px;
		padding-right: 0px;	
		padding:10px 0 3px;	
	    /*float:left;*/		
	  	width: 25%;
		}
		
	#actualizardatos input[type="text"] {
		/*border:medium none !important;
		font-size:12px;*/
		height:20px;
		padding-left:1px;
		float:left;
		}
		
	div {
  		margin: 1px 0;
		}
		
	.Submit{
		position:fixed;
		top: 49%;
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
		<form name="form" id="form" method="post" action="INSERTAR_ACT_CONTRASENA.php" onsubmit="return validar(this);" />

        
        <legend>MODIFICAR CONTRASEÑA</legend>
        
        <div>
        <label>Nueva Contraseña:</label>
        <input name="contrasena" type="password" id="contrasena" size="20" required/ placeholder="Contraseña" pattern="\S{8,10}" title="Valor Numerico Mayor a Ocho caracteres">
        </div>
        
        <div>
        <label>Repita Contraseña:</label>
        <input name="contrasena2" type="password" id="contrasena2" size="20" required placeholder="Confirme su contraseña"/>
        </div>
                
        <input type="submit" name="Submit" value="Modificar" /> 
               
      </form>
	     
 </fieldset>   


      
    </div>
    
    
    		
	<!-- Bloque Copyright -->
	<div id="tbCopyrigth">	  
		<div><span>&copy; Copyright 2012 | Todos los derechos Reservados <strong>  Online Web  </strong> Pol&iacute;tica de privacidad</span></div>	  
 	</div> 
<script>
function validar()
{
		if ((document.form.contrasena.value==document.form.contrasena2.value))
		{
			document.form.submit(); 
		}
		 
			else
			{
		 alert(" las contraseñas deben ser iguales!! ");
		  document.form.contrasena.focus();
		   return false; 
	 }

}
</script>
</body>

</html>

<!-- Elimina Back-Link de Apycom -->
<div style="visibility:hidden">
<a href="http://apycom.com/">Apycom jQuery Menus</a>
</div>