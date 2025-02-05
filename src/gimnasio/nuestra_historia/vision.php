<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta name="author" content="Cristian 'GOPE' Ropero" />
<meta http-equiv="content-language" content="es" />

<title>Visiòn</title>
	
    <link type="image/ico" href="../../IMAGENES/Favicon/Favicon.ico" rel="shortcut icon"> <!-- Carga del Favicon -->
	<link type="text/css" href="../../ESTILOS/ESTILO_BASE.css" rel="stylesheet"/> <!-- CSS Base - Principal -->
   	<link type="text/css" href="../../ESTILOS/MENU.css" rel="stylesheet"/> <!-- CSS - Menu -->

    <script type="text/javascript" src="../../SCRIPTS/jquery.js"></script> <!-- Script Utilidad JQuery-->
    <script type="text/javascript" src="../../SCRIPTS/Menu/menu.js"></script> <!-- Script Menu [Animación]-->
   
<style>

#historia {
		position:relative;
		width: 90%; /*Ancho Div*/
		height: 81%; /* Alto Div*/
		padding-top:7%;
		padding-left: 10%;
		
		border:medium none;
		color:#FFF;		
		font-family:'Trebuchet MS', Tahoma, Arial;
		text-shadow: #B1B1B1 0.1em 0.1em 0.2em;
		text-transform:uppercase;
		}

#historia legend {
    color:#FFFFFF;
		font-size: 22px;
		padding-top: 20px;
		padding-left:40%;
		padding-right: -9px;
		letter-spacing:1px;
		padding-bottom:10px;
		text-decoration:underline;
		text-align:center;
		}
		#historia label {
		font-size:14px;
		left:10%;
		right:10%;
		/*padding:10px 0 3px;		
	    float: left;		
	  	width: 25%;*/
		color:#FFFFFF;
		}
		

</style>	
   

</head>

<body>
	<!-- Imagen Fondo CSS-->
	<img class="fondo" src="../../IMAGENES/fondo.jpg"/> 
	
    <!-- Tabla Cabecera  [Formulario LOGIN]-->
	<div id="tbcabecera">   
          
	  <img class="logo" src="../../IMAGENES/logo-smart.jpg"/>
      
        	<form  name="login" method="post" autocomplete="OFF" action="../../ACCEDER.php" >         	
        		    <input type="text" name="usuario"  maxlength="20" placeholder="USUARIO" required/>
        		    <input type="password" name="clave" maxlength="20" placeholder="CONTRASEÑA" required/>
              <input type="image" name="ok" src="../../IMAGENES/bt_ingresar.png"/> 		
        	</form> 
	</div>
    <div id="tbmenu">	 
		<!----- Menu Desplegable ----->
		<div id="menu">
		 <ul class="menu">
         	<!-- Opciones Administrador -->
			<li><a href="../../index.php"><span>SMARTFITNESS</span></a>				
           </li>
            <!-- Opciones Entrenador -->    
            <li><a href="#" class="parent"><span>NUESTRO GIMNASIO</span></a>
				<div>
					<ul>
                     <li><a href="historia.php"><span>Historia</span></a></li>
						<li><a href="mision.php"><span>Misión</span></a></li>
						<li><a href="vision.php"><span>Visión</span></a></li>
                        
					</ul>
				</div>
            </li>
            <!-- Opciones Cliente -->    
            <li><a href="#" class="parent"><span>PERSONAL</span></a>
				<div>
					<ul>
						<li><a href="../personal/administrador.php" rel="lightbox_text"><span>Administradores</span></a></li>
						<li><a href="../personal/entrenadores.php" rel="lightbox_text"><span>Entrenadores</span></a></li>
                        
                        
					</ul>
				</div> 
            </li>           
            <!----- Opciones Otras [Ayuda-Contacto-Cerrar]----->    		
            <li><a href="../ejercicios/ejercicios_gimnasio.php"><span>EJERCICIOS</span></a></li>	    
			<li><a href="../contacto/contacto_gimnasio.php"><span>CONTACTENOS</span></a></li> 
            <li><a href="../acceso/como_acceder.php"><span>COMO ACCEDER</span></a></li>
                
                   	
     	</ul>
       </div>       
            
	</div>
	
	<!-- Bloque Principal Contenido [VIDEO] -->
	<div id="tbprincipal">
    <fieldset id="historia">
	
	<form>
	<legend>Visiòn</legend>
    <label>Ser un Gimnasio de clase alta con un reconocido liderazgo en el medio, generando valor para nuestros clientes, colaboradores.Los cuales aran posible nuestro crecimiento.</label>
	
	<br />
	<br />
	<marquee width=1020 direction=left>
<img src="../../IMAGENES/imagenes_externas/1.jpg" /><img src="../../IMAGENES/imagenes_externas/2.jpg" /><img src="../../IMAGENES/imagenes_externas/3.jpg" /><img src="../../IMAGENES/imagenes_externas/4.jpg" />  
            </marquee>
   </form>
    </fieldset>
	</div>
    <!-- Bloque Copyright -->
	<div id="tbCopyrigth">	  
		<div><span>&copy; Copyright 2012 | Todos los derechos Reservados <strong>  Online Web  </strong> Pol&iacute;tica de privacidad</span></div>	  
	</div> 
    	    
</body>

</html>
<div style="visibility:hidden">
<a href="http://apycom.com/">Apycom jQuery Menus</a>
</div>