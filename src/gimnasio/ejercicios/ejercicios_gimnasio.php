<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta name="author" content="Cristian 'GOPE' Ropero" />
<meta http-equiv="content-language" content="es" />

<title>Ejercicios</title>
	
    <link type="image/ico" href="../../IMAGENES/Favicon/Favicon.ico" rel="shortcut icon"> <!-- Carga del Favicon -->
	 <link type="text/css" href="../../ESTILOS/ESTILO_BASE.css" rel="stylesheet"/> <!-- CSS Base - Principal -->
  <link type="text/css" href="../../ESTILOS/MENU.css" rel="stylesheet"/> 	<!-- CSS - Menu -->

     <script type="text/javascript" src="../../SCRIPTS/jquery.js"></script><!-- Script Utilidad JQuery-->
    <script type="text/javascript" src="../../SCRIPTS/Menu/menu.js"></script>


<style>

.mar1
 {
 position:relative;
 top:10%;
 left:10%;
 right:10%;
 
}
.mar1 img
 {
 
width:180px;
 height:210px;
}
.mar2
 {
 position:relative;
 top:10%;
 left:10%;
 
}
.mar2 img
 {
 
 width:180px;
 height:210px;
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
         	<!-- Opciones Administrador--> 
			<li><a href="../../index.php"><span>SMARTFITNESS</span></a>				
           </li>
          <!-- Opciones Entrenador -->
            <li><a href="#" class="parent"><span>NUESTRO GIMNASIO</span></a>
			<div>
					<ul>
                    <li><a href="../nuestra_historia/historia.php"><span>Historia</span></a></li>
						<li><a href="../nuestra_historia/mision.php"><span>Misión</span></a></li>
						<li><a href="../nuestra_historia/vision.php"><span>Visión</span></a></li>
                        
					</ul>
				</div>	 
            </li>
          <!-- Opciones Cliente    -->
            <li><a href="#" class="parent"><span>PERSONAL</span></a>
				<div>
					<ul>
						<li><a href="../personal/administrador.php" rel="lightbox_text"><span>Administradores</span></a></li>
						<li><a href="../personal/entrenadores.php" rel="lightbox_text"><span>Entrenadores</span></a></li>
                        
                        
					</ul>
				</div> 
            </li> 
			           
            <!----- Opciones Otras [Ayuda-Contacto-Cerrar]   -->		
            <li><a href="ejercicios_gimnasio.php"><span>EJERCICIOS</span></a></li>	    
			<li><a href="../contacto/contacto_gimnasio.php"><span>CONTACTENOS</span></a></li> 
            <li><a href="../acceso/como_acceder.php"><span>COMO ACCEDER</span></a></li>
                   	
     	</ul> 
       </div>       
           
	</div> 
	
	<!-- Bloque Principal Contenido [VIDEO] -->
<div id="tbprincipal">

<marquee width=1020 direction=right class="mar1">
	<img src="../../IMAGENES/imagenes_gimnasio/1.png" alt="ejercicio" width="300" height="370" />
	<img src="../../IMAGENES/imagenes_gimnasio/2.png" alt="ejercicio" />
	<img src="../../IMAGENES/imagenes_gimnasio/3.png" alt="ejercicio" />
	<img src="../../IMAGENES/imagenes_gimnasio/4.png" alt="ejercicio" />
	<img src="../../IMAGENES/imagenes_gimnasio/5.png" alt="ejercicio" />
	<img src="../../IMAGENES/imagenes_gimnasio/6.png" alt="ejercicio" />
	<img src="../../IMAGENES/imagenes_gimnasio/7.png" alt="ejercicio" />
	<img src="../../IMAGENES/imagenes_gimnasio/8.png" alt="ejercicio" />
	 
	 </marquee>
	 
	<marquee width=1020 direction=left class="mar2">
	<img src="../../IMAGENES/imagenes_gimnasio/9.png" alt="ejercicio" />
	<img src="../../IMAGENES/imagenes_gimnasio/10.png" alt="ejercicio" />
	<img src="../../IMAGENES/imagenes_gimnasio/11.png" alt="ejercicio" />
	<img src="../../IMAGENES/imagenes_gimnasio/12.png" alt="ejercicio" />
	<img src="../../IMAGENES/imagenes_gimnasio/13.png" alt="ejercicio" />
	<img src="../../IMAGENES/imagenes_gimnasio/14.png" alt="ejercicio" />
	<img src="../../IMAGENES/imagenes_gimnasio/15.png" alt="ejercicio" />
	<img src="../../IMAGENES/imagenes_gimnasio/16.png" alt="ejercicio" />
	</marquee>		
     
     </div>


    <!-- Bloque Copyright -->
</body>

</html>


<!-- borrar Not Ride-->
<div style="visibility:hidden">
<a href="http://apycom.com/">Apycom jQuery Menus</a>
</div>