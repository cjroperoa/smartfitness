<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta name="author" content="Cristian 'GOPE' Ropero"/>
<meta http-equiv="content-language" content="es"/>

<title>Actualizar Datos Cliente</title>	

	
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
		top: 83%;
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
						<li><a href="../ADMINISTRADOR/CREAR_NUEVO.php"><span>Crear Nuevo Administrador</span></a></li>
						<li><a href="../ADMINISTRADOR/ENVIAR_ACT_DATOS.php"><span>Actualizar Mis Datos</span></a></li>
						<li><a href="../ADMINISTRADOR/VERIFICACION_CAMBIAR_CONTRASENA.php"><span>Cambiar Mi Contraseña</span></a></li>
                        <li><a href="../ADMINISTRADOR/ADMINISTRADORES_DEL_GIMNASIO.PHP"><span>Administradores Del Gimnasio</span></a></li>
						<li><a href="../ADMINISTRADOR/VERIFICACION_ELIMINAR_ADMINISTRADOR.PHP"><span>Eliminar Administrador</span></a></li>
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
						<li><a href="CREAR_NUEVO_CLIENTE.php" rel="lightbox_text"><span>Crear Nuevo</span></a></li>
						<li><a href="VERIFICACION_ACTUALIZACION_DATOS.php" rel="lightbox_text"><span>Actualizar Datos</span></a></li>
                        <li><a href="REGISTRAR_PAGO_CLIENTE.php" rel="lightbox_text"><span>Registrar Pago</span></a></li>
						<li><a href="VERIFICACION_MOSTRAR_RUTINA_CLIENTE.php" rel="lightbox_text"><span>Rutina Fisica</span></a></li>
                        <li><a href="VERIFICACION_MOSTRAR_DIETA_CLIENTE.php" rel="lightbox_text"><span>Rutina Alimentaria</span></a></li>
                        <li><a href="VERIFICACION_MOSTRAR_INFORME_CLIENTE.php" rel="lightbox_text"><span>Ver Informe</span></a></li>
                        <li><a href="MOSTRAR_CLIENTES_GIMNASIO.php" rel="lightbox_text">Lista Clientes<span></span></a></li>
                        <li><a href="MOSTRAR_PAGO_CLIENTES.php" rel="lightbox_text"><span>Lista Pagos </span></a></li>
                        <li><a href="VERIFICACION_ELIMINAR_CLIENTE.php" rel="lightbox_text"><span>Eliminar</span></a></li>
                        
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
     <?php
 
		require("../../CONEXION_BD.php");
		$documento=$_POST['documento'];
		$consulta="select nombre, documento, fecha_nacimiento, sexo, edad, mail, login, contrasena, telefono, celular from smartfitness.cliente where documento='$documento'";
		$result=mysql_query($consulta);

if($row=mysql_fetch_array($result))
{
		do
		{
		
		echo'
		<fieldset id="actualizardatos">
		<form method="post" autocomplete="off" action="INSERTAR_ACTUALIZACION_CLIENTES.php" onsubmit="return validar(this);" >

		<legend> ACTUALIZAR DATOS CLIENTE </legend>

			<div>
			<label for="name">NOMBRE:</label>
			<input name="nombre" type="text" value="'.$row["nombre"].'" size="29" pattern="|^[a-zA-Z ñÑáéíóúüç]*$|" title="El nombre debe estar formado únicamente por letras"/>
			</div>
            
            <div>
			<label for="pass">No. IDENTIFICACION:</label>		
			<input type="text" name="documento" value="'.$row["documento"].'" size="29" pattern="[0-9]+" title="El documento debe estar formado únicamente por nùmeros" />
			</div>
            
            <div>
			<label for="pass">FECHA NACIMIENTO:</label>
			<input type="text" name="fecha" value="'.$row["fecha_nacimiento"].'" size="29"  />
			</div>
            
            <div>
			<label for="pass">EDAD:</label>
			<input type="text" name="edad" value="'.$row["edad"].'" size="29"  pattern="[0-9]+" title="La edad debe estar formada únicamente por nùmeros" />
			</div>

            
            <div>
			<label for="pass">Sexo:</label>
      		<input type="text" name="sexo" value="'.$row["sexo"].'" size="29" />
			</div>
            
            <div>
			<label for="pass">E-MAIL:</label>
			<input type="text" name="mail" value="'.$row["mail"].'" size="29" pattern="^[a-zA-Z0-9.!#$%&*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$"  title="El correo electronico debe estar formado correctamente"/>
			</div>
            
            <div>
			<label for="pass">Celular:</label>
			<input type="text" name="celu" value="'.$row["celular"].'" size="29" pattern="[0-9]+" title="El celular debe estar formado únicamente por nùmeros" />
			</div>
			
			<div>
			<label for="pass">Telefono:</label>
			<input type="text" name="tele" value="'.$row["telefono"].'" size="29"  pattern="[0-9]+" title="El telefono debe estar formado únicamente por nùmeros" />
			</div>
			
			<div>
			<label for="name">Usuario:</label>
			<input name="login" type="text" value="'.$row["login"].'" size="29" pattern="|^[a-zA-Z ñÑáéíóúüç]*$|" title="El usuario debe estar formado únicamente por letras"/>
			</div>
			
			<div>
			<label for="pass">Contraseña:</label>
			<input type="text" name="contrasena" value="'.$row["contrasena"].'" size="29" pattern="\S{8,10}" title="Le contraseña debe ser mayor a 8 nuermos"/>
			</div>

         ';	

		}
		while ($row=mysql_fetch_array($result));
}		
else 
{
	echo('<script languaje="javascript">
		 alert("Documento de Cliente No Registrado.........Vuelva a Intentarlo");
		 document.location=("../../OPC_ADMINISTRADOR.php");
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


