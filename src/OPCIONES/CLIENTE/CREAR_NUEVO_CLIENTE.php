<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta name="author" content="Cristian 'GOPE' Ropero"/>
<meta http-equiv="content-language" content="es"/>

<title>Crear Nuevo Cliente - ADMINISTRADOR</title>	
	
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
		padding-left: 27%;
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
		
	#actualizardatos input[type="password"]{
		height:20px;
		padding-left:2px;
		text-align:center;
		} 
		
	#actualizardatos input[type="textarea"]{
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
		/*position:fixed;
		top: 85.8%;*/
		left: 39%;
		} 
	</style>
    
</head>

<body>

<?php

include("../../seguridad_smartfitness.php");

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
    
    <fieldset id="actualizardatos">
    <form id="form1" name="form1" method="post" action="INSERTAR_NUEVO_CLIENTE.php" onsubmit="return validar(this);">
    
    <legend> CREAR NUEVO ENTRENADOR </legend>
    
    <div>
    <label>NOMBRE</label>
	<input name="nombre" required placeholder="NOMBRE" autocomplete="off" size="29" type="text" pattern="|^[a-zA-Z ñÑáéíóúüç]*$|" title="El nombre debe estar formado únicamente por letras"/>
    </div>
    
    <div>
    <label>APELLIDO</label>
	<input name="apellido" required placeholder="APELLIDO" autocomplete="off" size="29" type="text" pattern="|^[a-zA-Z ñÑáéíóúüç]*$|" title="El apellido debe estar formado únicamente por letras"/>
    </div>
    
	<div>
    <label>No. DOCUMENTO</label>
    <input name="docu" required placeholder="No. DOCUMENTO" autocomplete="off" type="text" size="29" pattern="[0-9]+"  title="El documento debe estar formado únicamente por nùmeros"/>
    </div>
    
    <div>
    <label>FECHA NACIMIENTO</label>
    <select name="dia" required>
      <option>Dia</option>
      <option value="1">1</option>
      <option value="2">2</option>
      <option value="3">3</option>
      <option value="4">4</option>
      <option value="5">5</option>
      <option value="6">6</option>
      <option value="7">7</option>
      <option value="8">8</option>
      <option value="9">9</option>
      <option value="10">10</option>
      <option value="11">11</option>
      <option value="12">12</option>
      <option value="13">13</option>
      <option value="14">14</option>
      <option value="15">15</option>
      <option value="16">16</option>
      <option value="17">17</option>
      <option value="18">18</option>
      <option value="19">19</option>
      <option value="20">20</option>
      <option value="21">21</option>
      <option value="22">22</option>
      <option value="23">23</option>
      <option value="24">24</option>
      <option value="25">25</option>
      <option value="26">26</option>
      <option value="27">27</option>
      <option value="28">28</option>
      <option value="29">29</option>
      <option value="30">30</option>
      <option value="31">31</option>
    </select>
    <select name="mes" required>
      <option selected="selected" value="">Mes</option>
      <option value="1">Enero</option>
      <option value="2">Febrero</option>
      <option value="3">Marzo</option>
      <option value="4">Abril</option>
      <option value="5">Mayo</option>
      <option value="6">Junio</option>
      <option value="7">Julio</option>
      <option value="8">Agosto</option>
      <option value="9">Septiembre</option>
      <option value="10">Octubre</option>
      <option value="11">Noviembre</option>
      <option value="12">Diciembre</option>
    </select>
    <select name="axo" id="axo" required>
      <option selected="selected" value="">A&ntilde;o</option>
      <option value="2012">2012</option>
      <option value="2011">2011</option>
      <option value="2010">2010</option>
      <option value="2009">2009</option>
      <option value="2008">2008</option>
      <option value="2007">2007</option>
      <option value="2006">2006</option>
      <option value="2005">2005</option>
      <option value="2004">2004</option>
      <option value="2003">2003</option>
      <option value="2002">2002</option>
      <option value="2001">2001</option>
      <option value="2000">2000</option>
      <option value="1999">1999</option>
      <option value="1998">1998</option>
      <option value="1997">1997</option>
      <option value="1996">1996</option>
      <option value="1995">1995</option>
      <option value="1994">1994</option>
      <option value="1993">1993</option>
      <option value="1992">1992</option>
      <option value="1991">1991</option>
      <option value="1990">1990</option>
      <option value="1989">1989</option>
      <option value="1988">1988</option>
      <option value="1987">1987</option>
      <option value="1986">1986</option>
      <option value="1985">1985</option>
      <option value="1984">1984</option>
      <option value="1983">1983</option>
      <option value="1982">1982</option>
      <option value="1981">1981</option>
      <option value="1980">1980</option>
      <option value="1979">1979</option>
      <option value="1978">1978</option>
      <option value="1977">1977</option>
      <option value="1976">1976</option>
      <option value="1975">1975</option>
      <option value="1974">1974</option>
      <option value="1973">1973</option>
      <option value="1972">1972</option>
      <option value="1971">1971</option>
      <option value="1970">1970</option>
      <option value="1969">1969</option>
      <option value="1968">1968</option>
      <option value="1967">1967</option>
      <option value="1966">1966</option>
      <option value="1965">1965</option>
      <option value="1964">1964</option>
      <option value="1963">1963</option>
      <option value="1962">1962</option>
      <option value="1961">1961</option>
      <option value="1960">1960</option>
      <option value="1959">1959</option>
      <option value="1958">1958</option>
      <option value="1957">1957</option>
      <option value="1956">1956</option>
      <option value="1955">1955</option>
      <option value="1954">1954</option>
      <option value="1953">1953</option>
      <option value="1952">1952</option>
      <option value="1951">1951</option>
      <option value="1950">1950</option>
      <option value="1949">1949</option>
      <option value="1948">1948</option>
      <option value="1947">1947</option>
      <option value="1946">1946</option>
      <option value="1945">1945</option>
      <option value="1944">1944</option>
      <option value="1943">1943</option>
      <option value="1942">1942</option>
      <option value="1941">1941</option>
    </select>
    </div>
     
    <div>
    <label>EDAD</label>                    
    <input name="edad" required placeholder="EDAD" autocomplete="off" type="text" size="29" pattern="[0-9]+"  title="La edad debe estar formada únicamente por nùmeros"/>
    </div>
    
    <div>
    <label>SEXO</label>
    <select name="sexo" id="sexo" required>
          <option>---Seleccione---</option>
          <option>Femenino</option>
          <option>Masculino</option>
    </select>
    </div>
    
    <div>
    <label>E-MAIL</label>
    <input name="mail" required placeholder="E-MAIL" autocomplete="off" type="text" size="29" pattern="^[a-zA-Z0-9.!#$%&*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$"  title="El correo electronico debe estar formado correctamente"/>
    </div>
    
    <div>
    <label>TELEFONO</label>
    <input name="tele" required placeholder="TELEFONO" autocomplete="off" type="text" size="29" pattern="[0-9]+"  title="El telefono debe estar formado únicamente por nùmeros"/>
    </div>
    
    <div>
    <label>CELULAR</label>
    <input name="celu" required placeholder="CELULAR" autocomplete="off" type="text" size="29" pattern="[0-9]+"  title="El celular debe estar formado únicamente por nùmeros"/>
    </div>
    
    <div>
    <label>FECHA INGRESO</label>
    <input name="fecha_ingreso" required placeholder="FECHA INGRESO" autocomplete="off"  size="29" type="date" title="La fecha de ingreso es obligatorio"/>
    </div>
    
    <div>
    <label>USUARIO</label>
    <input name="login" required placeholder="USUARIO" autocomplete="off" type="text" size="29" pattern="|^[a-zA-Z ñÑáéíóúüç]*$|" title="El usuario debe estar formado únicamente por letras"/>
    </div>
    
    <div>
    <label>CONTRASE&Ntilde;A</label>
    <input name="pass" required placeholder="CONTRASEÑA" autocomplete="off" type="password"  size="29" pattern="\S{8,10}" title="La cntraseña debe ser mayor a 8 numeros"/>
    </div>
    
    <div>
    <label>PESO</label>
    <input name="peso" required placeholder="PESO" autocomplete="off" type="text" size="29" pattern="[a-zA-Z0-9]+" title="El peso puede estar formado  por letras y numeros"/>
    </div>
    
    <div>
    <label>RITMO CARDIACO</label>
    <input name="ritmo" required placeholder="RITMO CARDIACO" autocomplete="off" type="text" size="29" pattern="[a-zA-Z0-9]+" title="El ritmo cardiaco puede estar formado  por letras y numeros" />
    </div>
    
    <div>
    <label>ESTATURA</label>
    <input name="esta" required placeholder="ESTATURA" autocomplete="off" type="text" size="29" pattern="[a-zA-Z0-9]+" title="La estatura puede estar formado  por letras y numeros"/>
    </div>
    
    <div>
    <label>VALORACION MEDICA</label>
    <textarea name="valome" required placeholder="VALORACION MEDICA" size="29" ></textarea>
    </div>
    
    <div>
    <label>VALORACION FISICA</label>
    <textarea name="valofi" required placeholder="VALORACION FISICA" size="29" ></textarea>
    </div>
    
    <div>
    <label>NOM. ENTRENADOR</label>
    <input name="nomen" required placeholder="NOMBRE ENTRENADOR" autocomplete="off" size="29" type="text" pattern="|^[a-zA-Z ñÑáéíóúüç]*$|" title="El nombre del entrenador debe estar formado por letras"/>
    </div>
    
    <div>
    <label>CELULAR ENTRENADOR</label>
    <input name="celuen" required placeholder="CELULAR ENTRENADOR" autocomplete="off" type="text" size="29" pattern="[0-9]+" title="El celular del entrenador debe estar formado por numeros"/>
    </div>
    
    <div>
    <input class="btenviar" name="enviar" type="image" src="../../IMAGENES/bt_enviar.png" value="enviar"/>
    </div>
    
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
