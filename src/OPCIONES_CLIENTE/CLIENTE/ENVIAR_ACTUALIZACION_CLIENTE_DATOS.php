<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta name="author" content="Cristian 'GOPE' Ropero"/>
<meta http-equiv="content-language" content="es"/>

<title>Actualizar Cliente</title>	

	
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
	  	width: 25%;
		float: left;
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
      <h2 class="bienvenida"> Hola Cliente !! </h2>
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
						<li><a href="../ADMINISTRADOR/MOSTRAR_DATOS_ADMINISTRADOR.PHP"><span>Mostrar Datos</span></a></li>
					</ul>
				</div>
           </li>
            <!-- Opciones Entrenador -->    
            <li><a href="#" class="parent"><span>ENTRENADOR</span></a>
				<div>
					<ul>
						<li><a href="../ENTRENADOR/insertar_mostrar_datos_entrenador.PHP"><span>Mostrar Datos</span></a></li>
						<li><a href="../ENTRENADOR/insertar_mostrar_datos_horario_entrenador.PHP"><span>Mostrar Horario</span></a></li>
					</ul>
				</div>
            </li>
            <!-- Opciones Cliente -->    
            <li><a href="../../OPC_CLIENTE.php" class="parent"><span>CLIENTE</span></a>
				<div>
					<ul>
						<li><a href="ENVIAR_ACTUALIZACION_CLIENTE_DATOS.php" rel="lightbox_text"><span>Actualizar Mis Datos</span></a></li>
						<li><a href="INSERTAR_MOSTRAR_DATOS_CLIENTE.php" rel="lightbox_text"><span>Mis Datos</span></a></li>
						<li><a href="INSERTAR_MOSTRAR_CLIENTE_PAGO.PHP" rel="lightbox_text"><span> Mis Pagos</span></a>
						<li><a href="INSERTAR_MOSTRAR_CLIENTE_INFORME.PHP" rel="lightbox_text"><span> Informe</span></a></li>
                        <li><a href="INSERTAR_MOSTRAR_RUTINA_FISICA_CLIENTE.PHP" rel="lightbox_text"><span> Rutina Fisica</span></a></li>
						 <li><a href="INSERTAR_MOSTRAR_RUTINA_ALIMENTARIA_CLIENTE.PHP" rel="lightbox_text"><span> Rutina Alimentaria</span></a></li>
						 <li><a href="mostrar_rutinas_descricion.php" rel="lightbox_text"><span>Descripcion De Rutina </span></a></li>
					</ul>
				</div> 
            </li>           
            <!----- Opciones Otras [Ayuda-Contacto-Cerrar]----->    		
            <li><a href="../../AYUDAS/AYUDA_CLIENTE.PHP"><span>AYUDA</span></a></li>	           
             
            <li><a href="../../cerrar_sesion.php"><span>CERRAR SESION</span></a></li>  
                   	
     	</ul>
       </div>       
            
	</div>
    
    <!-- Bloque Contenido (Principal) -->
	<div id="tbprincipal">
    
	  
	  
	    <?php
include("../../CONEXION_BD.php");





$consulta="select nombre, documento, fecha_nacimiento, sexo, edad, mail, contrasena, telefono, celular from smartfitness.cliente where documento='$variable_cl'";

$result=mysql_query($consulta);

while ($row=mysql_fetch_array($result))
{

echo "
	<fieldset id='actualizardatos'> 
	
	<FORM METHOD='POST' AUTOCOMPLETE='OFF' ACTION='INSERTAR_ACTUALIZACION_CLIENTES_DATOS.php' onsubmit='return validar(this);'>
	
	<legend> ACTUALIZAR DATOS </legend>

	<div>
	<label for='name'>Nombre:</label>
	<input type='text' name='nombre' value='".$row["nombre"]."' size='29' pattern='|^[a-zA-Z ñÑáéíóúüç]*$|' title='El nombre debe tener letras'>
	</div>

	<div>
	<label for='name'>No. Identificacion:</label>
	<input type='text' name='documento' value='".$row["documento"]."' size='29' pattern='[0-9]+' title='El documento debe tener numeros'>
	</div>
	
	<div>
	<label for='name'>Fecha Nacimiento:</label>
	<input type='text' name='fecha' value='".$row["fecha_nacimiento"]."' size='29'>
	</div>
	
	<div>
	<label for='name'>Sexo:</label>
	<input type='text' name='sexo' value='".$row["sexo"]."' size='29' />
	</div>

	<div>
	<label for='name'>Edad:</label>
	<input type='text' name='edad' value='".$row["edad"]."' size='29' pattern='[0-9]+' title='La edad debe tener numeros'>
	</div>
	
	<div>
	<label for='name'>Mail:</label>
	<input type='text' name='mail' value='".$row["mail"]."' size='29' pattern='^[a-zA-Z0-9.!#$%&*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$'  title='El correo electronico debe tener caracteres especiales'/>
	</div>

	


	<div>
	<label for='name'>Telefono:</label>
	<input type='text' name='tele' value='".$row["telefono"]."' size='29' pattern='[0-9]+' title='El telefono debe tener numeros'>
	</div>

	<div>
	<label for='name'>Celular:</label>
	<input type='text' name='celu' value='".$row["celular"]."' size='29' pattern='[0-9]+' title='El celular debe tener numeros'>
	</div>

	<div>
	<label for='name'>Contrase&ntilde;a:</label>
	<input type='text' name='pass' value='".$row["contrasena"]."' size='29' pattern='\S{8,10}' title='La contraseña debe ser mayor de 8 numeros'>
	</div>";
}

?>
     
	    <input class="btenviar" name="enviar" type="submit" src="../../IMAGENES/bt_enviar.png" value="Actualizar Datos"/>         
	    </form>  
	    </fieldset>      
      
	</div>
    
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




