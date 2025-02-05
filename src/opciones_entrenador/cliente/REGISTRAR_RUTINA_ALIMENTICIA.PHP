<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta name="author" content="Cristian 'GOPE' Ropero"/>
<meta http-equiv="content-language" content="es"/>

<title>Crear  Rutina Alimentaria</title>	
	
    <link type="image/ico" href="../../IMAGENES/Favicon/Favicon.ico" rel="shortcut icon"> <!-- Carga del Favicon -->    
	<link type="text/css" href="../../ESTILOS/ESTILO_BASE.css" rel="stylesheet"/> <!-- CSS Base - Principal -->
	<link type="text/css" href="../../ESTILOS/MENU.css" rel="stylesheet"/> <!-- CSS - Menu -->

    <script type="text/javascript" src="../../SCRIPTS/jquery.js"></script> <!-- Script Utilidad JQuery-->
    <script type="text/javascript" src="../../SCRIPTS/Menu/menu.js"></script> <!-- Script Menu [Animación]-->
    
    <style>
	
	#rutina {
		position:absolute;
		width:auto; /*Ancho Div*/
		height: auto; /* Alto Div*/
		top:10%;
		left:10%;
		
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
		font-size: 15px;
		padding-top: 20px;
		padding-right: -9px;
		letter-spacing:1px;
		padding-bottom:10px;
		text-decoration:underline;
		text-align:center;
		}
		
	#rutina label {
		font-size:14px;
		padding-left: 50px;
		padding-right: 50px;
		padding:10px 0 3px;		
	    float: left;		
	  	width: 25%;
		}
		
	#rutina input[type="text"] {
		position:fixed;
		left: 50%;
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
		top: 80%;
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
	<form id="form1" name="form1" method="post" action="insetar_rutina_alimenticia.php" />
       <table >
	    
        <tr>
          <td><legend></legend></td>
          <td ><legend>LUNES</legend></td>
          <td><legend>MARTES</legend></td>
          <td ><legend>MIERCOLES</legend></td>
          <td ><legend>JUEVES</legend> </td>
          <td ><legend>VIERNES</legend></td>
          <td ><legend>SABADO</legend></td>
        </tr>
		
        <tr>
          <td><label>DOCUMENTO</label></td>
          <td colspan="6"><input name="DOCUMENTO" type="text" required id="DOCU1" size="15" pattern="[0-9]+"  title="El documento debe contener numeros"/></td>          
        </tr>
		
        <tr>
          <td><label>DESAYUNO</label></td>
          <td><textarea name="DESAYUNO1" cols="12" id="DESAYUNO1" required></textarea></td>
          <td><textarea name="DESAYUNO2" cols="12" id="DESAYUNO2" required></textarea></td>
          <td><textarea name="DESAYUNO3" cols="12" id="DESAYUNO3" required></textarea></td>
          <td><textarea name="DESAYUNO4" cols="12" id="DESAYUNO4" required></textarea></td>
          <td><textarea name="DESAYUNO5" cols="12" id="DESAYUNO5" required></textarea></td>
          <td><textarea name="DESAYUNO6" cols="12" id="DESAYUNO6" required></textarea></td>
        </tr>
		
        <tr>
          <td><label>ONCES</label></td>
          <td><textarea name="ONCES1" cols="12" id="ONCES1" required></textarea></td>
          <td><textarea name="ONCES2" cols="12" id="ONCES2" required></textarea></td>
          <td><textarea name="ONCES3" cols="12" id="ONCES3" required></textarea></td>
          <td><textarea name="ONCES4" cols="12" id="ONCES4" required></textarea></td>
          <td><textarea name="ONCES5" cols="12" id="ONCES5" required></textarea></td>
          <td><textarea name="ONCES6" cols="12" id="ONCES6" required></textarea></td>
        </tr>
		
		 <tr>
          <td><label>ALMUERZO</label></td>
          <td><textarea name="ALMUERZO1" cols="12" id="ALMUERZO1" required></textarea></td>
          <td><textarea name="ALMUERZO2" cols="12" id="ALMUERZO2" required></textarea></td>
          <td><textarea name="ALMUERZO3" cols="12" id="ALMUERZO3" required></textarea></td>
          <td><textarea name="ALMUERZO4" cols="12" id="ALMUERZO4" required></textarea></td>
          <td><textarea name="ALMUERZO5" cols="12" id="ALMUERZO5" required></textarea></td>
          <td><textarea name="ALMUERZO6" cols="12" id="ALMUERZO6" required></textarea></td>
        </tr>
		
        <tr>
          <td><label>ONCES</label></td>
          <td><textarea name="ONCE1" cols="12" id="ONCE1" required></textarea></td>
          <td><textarea name="ONCE2" cols="12" id="ONCE2" required></textarea></td>
          <td><textarea name="ONCE3" cols="12" id="ONCE3" required></textarea></td>
          <td><textarea name="ONCE4" cols="12" id="ONCE4" required></textarea></td>
          <td><textarea name="ONCE5" cols="12" id="ONCE5" required></textarea></td>
          <td><textarea name="ONCE6" cols="12" id="ONCE6" required></textarea></td>
        </tr>
		
        <tr>
          <td><label>CENA</label></td>
          <td><textarea name="CENA1" cols="12" id="CENA1" required></textarea></td>
          <td><textarea name="CENA2" cols="12" id="CENA2" required></textarea></td>
          <td><textarea name="CENA3" cols="12" id="CENA3" required></textarea></td>
          <td><textarea name="CENA4" cols="12" id="CENA4" required></textarea></td>
          <td><textarea name="CENA5" cols="12" id="CENA5" required></textarea></td>
          <td><textarea name="CENA6" cols="12" id="CENA6" required></textarea></td>
        </tr>
		
        
      </table>
	       
      <input class="btenviar" type="submit" name="Submit" value="Registrar" />
    </form>
	
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
