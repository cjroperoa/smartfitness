<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta name="author" content="Cristian 'GOPE' Ropero"/>
<meta http-equiv="content-language" content="es"/>

<title>Registrar Rutina fisica</title>	
	
    <link type="image/ico" href="../../IMAGENES/Favicon/Favicon.ico" rel="shortcut icon"> <!-- Carga del Favicon -->    
	<link type="text/css" href="../../ESTILOS/ESTILO_BASE.css" rel="stylesheet"/> <!-- CSS Base - Principal -->
	<link type="text/css" href="../../ESTILOS/MENU.css" rel="stylesheet"/> <!-- CSS - Menu -->

    <script type="text/javascript" src="../../SCRIPTS/jquery.js"></script> <!-- Script Utilidad JQuery-->
    <script type="text/javascript" src="../../SCRIPTS/Menu/menu.js"></script> <!-- Script Menu [Animación]-->
    
    <style>
	
	#rutina {
		position:absolute;
		width:auto; /*Ancho Div*/
		height: 85%; /* Alto Div*/
		top:10%;
		
		left: 4%;		
		color:#FFF;		
		font-family:'Trebuchet MS', Tahoma, Arial;
		}
		#rutina table{
		border:#FFFFFF double;
		text-align:center;}
		
		#rutina td{
		text-align:center;
		border:#FFFFFF double;}
		
		#rutina tr{
		text-align:center;
		border:#FFFFFF double;}
	#rutina legend {
		font-size: 13px;
		padding-top: 10px;
		padding-right: -9px;
		letter-spacing:1px;
		padding-bottom:10px;
		text-decoration:underline;
		text-align:center;
		}
		
	#rutina label {
		font-size:16px;
		padding-left: 10px;
		padding-right: 50px;
		padding:10px 0 3px;		
	    /*float: left;	*/	
	  	width: 30%;
		}
		
	#rutina input[type="text"] {
	
		position:relative;
		left:2%;
		botton: 10%;
		float: inherit;
		}
	
	#rutina input[type="textarea"]{
		height:20px;
		padding-left:2px;
		text-align:center;
		}
	
		
	div {
  		margin: 1px 0;
		}
		
	.btenviar{
		position:fixed;
		top: 90%;
		left: 45%;
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
						<li><a href="../ENTRENADOR/ENVIAR_ACTUALIZACION_DATOS.PHP"><span>Actualizar Datos</span></a></li>
						<li><a href="../ENTRENADOR/insertar_mostrar_datos.php"><span>Mis Datos</span></a></li>
						<li><a href="../ENTRENADOR/VERIFICAR_CAMBIAR_CONTRASENA.PHP"><span>Cambiar Contraseña</span></a></li>
						<li><a href="../ENTRENADOR/mostrar_horario_trabajo.php"><span>Horario De Trabajo</span></a></li>
					</ul>
				</div>
            </li>
            <!-- Opciones Cliente -->    
            <li><a href="#" class="parent"><span>CLIENTE</span></a>
				<div>
					<ul>
						<li><a href="clientes_asignados.php"><span>Clientes Asignados</span></a></li>
                        <li><a href="REGISTRAR_RUTINA]_FISICA.PHP"><span>Crear Rutina Fisica</span></a></li>
						<li><a href="REGISTRAR_RUTINA_ALIMENTICIA.PHP"><span>Crear Rutina Alimenticia</span></a></li>
						<li><a href="REGISTRAR_INFORME_CLIENTE.PHP"><span>Registrar Informe</span></a></li>
						<li><a href="verificar_actualizar_informe.php"><span>Actualizar Informe</span></a></li>
						<li><a href="verificar_actualizar_rutina_fisica.php" ><span>Actualizar Rutina Fisica</span></a></li>
						<li><a href="verificar_actualizar_rutina_alimentaria.php"><span>Actualizar Rutina Alimenticia</span></a></li>
                        
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
    
	<fieldset id="rutina">
	<form method="post" action="INSERTAR_RUTINA_FISICA.PHP" />
        
		<table>
          <tr>
            <td></td>
            <td><legend>LUNES</legend></td>
            <td><legend>MARTES</legend></td>
            <td><legend>MIERCOLES</legend></td>
            <td><legend>JUEVES</legend></td>
            <td><legend>VIERNES</legend></td>
            <td><legend>SABADO</legend></td>
          </tr>
          <tr>
            <td ><label>DOCUMENTO CLIENTE</label></td>
            <td colspan="6"><input name="DOCUMENTO" required="required" type="text" id="DOCUMENTO1" size="15" pattern="[0-9]+" title="El documento debe contener numeros"/>            </td>
			</tr>
          <tr>
            <td><label>ACTIVIDAD</label></td>
            <td><textarea name="ACTIVIDAD1" cols="12" id="ACTIVIDAD1" required></textarea></td>
            <td><textarea name="ACTIVIDAD2" cols="12" id="ACTIVIDAD2" required></textarea></td>
            <td><textarea name="ACTIVIDAD3"  cols="12" id="ACTIVIDAD3" required></textarea></td>
            <td><textarea name="ACTIVIDAD4"  cols="12" id="ACTIVIDAD4" required></textarea></td>
            <td><textarea name="ACTIVIDAD5" cols="12" id="ACTIVIDAD5" required></textarea></td>
            <td><textarea name="ACTIVIDAD6" cols="12" id="ACTIVIDAD6" required></textarea></td>
          </tr>
          <tr>
            <td><label>DESCRIPCION</label></td>
            <td><textarea name="DESCRIPCION1" cols="12" id="DESCRIPCION1" required></textarea></td>
            <td><textarea name="DESCRIPCION2" cols="12" id="DESCRIPCION2" required></textarea></td>
            <td><textarea name="DESCRIPCION3" cols="12" id="DESCRIPCION3" required></textarea></td>
            <td><textarea name="DESCRIPCION4" cols="12" id="DESCRIPCION4" required></textarea></td>
            <td><textarea name="DESCRIPCION5" cols="12" id="DESCRIPCION5" required></textarea></td>
            <td><textarea name="DESCRIPCION6" cols="12" id="DESCRIPCION6" required></textarea></td>
          </tr>
          <tr>
            <td><label>DURACION</label></td>
            <td><textarea name="DURACION1" cols="12" id="DURACION1" required></textarea></td>
            <td><textarea name="DURACION2" cols="12" id="DURACION2" required></textarea></td>
            <td><textarea name="DURACION3" cols="12" id="DURACION3" required></textarea></td>
            <td><textarea name="DURACION4" cols="12" id="DURACION4" required></textarea></td>
            <td><textarea name="DURACION5" cols="12" id="DURACION5" required></textarea></td>
            <td><textarea name="DURACION6" cols="12" id="DURACION6" required></textarea></td>
          </tr>
          <tr>
            <td><label>SESION</label></td>
            <td><textarea name="SESION1" cols="12" id="SESION1" required></textarea></td>
            <td><textarea name="SESION2" cols="12" id="SESION2" required></textarea></td>
            <td><textarea name="SESION3" cols="12" id="SESION3" required></textarea></td>
            <td><textarea name="SESION4" cols="12" id="SESION4" required></textarea></td>
            <td><textarea name="SESION5" cols="12" id="SESION5" required></textarea></td>
            <td><textarea name="SESION6" cols="12" id="SESION6" required></textarea></td>
          </tr>
          <tr>
            <td >NOMBRE MAQUINA</td>
            <td><textarea name="MAQUINA1" cols="12" id="MAQUINA1" required></textarea></td>
            <td><textarea name="MAQUINA2" cols="12" id="MAQUINA2" required></textarea></td>
            <td><textarea name="MAQUINA3" cols="12" id="MAQUINA3" required></textarea></td>
            <td><textarea name="MAQUINA4" cols="12" id="MAQUINA4" required></textarea></td>
            <td><textarea name="MAQUINA5" cols="12" id="MAQUINA5" required></textarea></td>
            <td><textarea name="MAQUINA6" cols="12" id="MAQUINA6" required></textarea></td>
          </tr>
          <tr>
            <td><label>CONOCER RUTINA</label>
            </td>
            <td><input name="rutina_lu" type="text" id="rutina_lu" required size="15" /></td>
            <td><input name="rutina_ma" type="text" id="rutina_ma"  required size="15" /></td>
            <td><input name="rutina_mi" type="text" id="rutina_mi"  required size="15" /></td>
            <td><input name="rutina_ju" type="text" id="rutina_ju" required size="15" /></td>
            <td><input name="rutina_vi" type="text" id="rutina_vi" required size="15" /></td>
            <td><input name="rutina_sa" type="text" id="rutina_sa" required size="15" /></td>
          </tr>
		  <tr><input class="btenviar" type="submit" name="Submit" value="Registrar" /></tr>
        </form>
		</table><br />
		
		
		
		
		
		</fieldset>	
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
