<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf8" />
  <meta name="author" content="Cristian 'GOPE' Ropero" />
  <meta http-equiv="content-language" content="es" />

  <title>Bienvenidos a SMART-FITNEES</title>

  <link type="image/ico" href="IMAGENES/Favicon/Favicon.ico" rel="shortcut icon"> <!-- Carga del Favicon -->
  <link type="text/css" href="ESTILOS/ESTILO_BASE.css" rel="stylesheet" /> <!-- CSS Base - Principal -->
  <link type="text/css" href="ESTILOS/MENU.css" rel="stylesheet" /> <!-- CSS - Menu -->

  <script type="text/javascript" src="SCRIPTS/jquery.js"></script> <!-- Script Utilidad JQuery-->
  <script type="text/javascript" src="SCRIPTS/Menu/menu.js"></script> <!-- Script Menu [Animaci�n]-->
  <script src="SCRIPTS/swfobject_modified.js" type="text/javascript"></script>
  <!--Video -->
  <script src="https://unpkg.com/@ruffle-rs/ruffle"></script>

</head>

<body>
  <!-- Imagen Fondo CSS-->
  <img class="fondo" src="IMAGENES/fondo.jpg" />

  <!-- Tabla Cabecera  [Formulario LOGIN]-->
  <div id="tbcabecera">

    <img class="logo" src="IMAGENES/logo-smart.jpg" />

    <form name="login" method="post" autocomplete="OFF" action="ACCEDER.php">
      <input type="text" name="usuario" maxlength="20" placeholder="USUARIO" required />
      <input type="password" name="clave" maxlength="20" placeholder="CONTRASEÑA" required />
      <input type="image" name="ok" src="IMAGENES/bt_ingresar.png" />
    </form>
  </div>
  <div id="tbmenu">
    <!----- Menu Desplegable ----->
    <div id="menu">
      <ul class="menu">
        <!-- Opciones Administrador -->
        <li><a href="index.php"><span>SMARTFITNESS</span></a>
        </li>
        <!-- Opciones Entrenador -->
        <li><a href="#" class="parent"><span>NUESTRO GIMNASIO</span></a>
          <div>
            <ul>
              <li><a href="gimnasio/nuestra_historia/historia.php"><span>Historia</span></a></li>
              <li><a href="gimnasio/nuestra_historia/mision.php"><span>Misi�n</span></a></li>
              <li><a href="gimnasio/nuestra_historia/vision.php"><span>Visi�n</span></a></li>

            </ul>
          </div>
        </li>
        <!-- Opciones Cliente -->
        <li><a href="#" class="parent"><span>PERSONAL</span></a>
          <div>
            <ul>
              <li><a href="gimnasio/personal/administrador.php" rel="lightbox_text"><span>Administradores</span></a></li>
              <li><a href="gimnasio/personal/entrenadores.php" rel="lightbox_text"><span>Entrenadores</span></a></li>


            </ul>
          </div>
        </li>
        <!----- Opciones Otras [Ayuda-Contacto-Cerrar]----->
        <li><a href="gimnasio/ejercicios/ejercicios_gimnasio.php"><span>EJERCICIOS</span></a></li>
        <li><a href="gimnasio/contacto/contacto_gimnasio.php"><span>CONTACTENOS</span></a></li>
        <li><a href="gimnasio/acceso/como_acceder.php"><span>COMO ACCEDER</span></a></li>

      </ul>
    </div>

  </div>

  <!-- Bloque Principal Contenido [VIDEO] -->
  <div id="tbprincipal">
    <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="600" height="297" class="swfcentro" id="FlashID" title="Smart-Fitnees">
      <param name="movie" value="VIDEOS/smart_logo.swf" />
      <param name="swfversion" value="6.0.65.0" />
      <!-- Esta etiqueta param indica a los usuarios de Flash Player 6.0 r65 o posterior que descarguen la versi�n m�s reciente de Flash Player. Elim�nela si no desea que los usuarios vean el mensaje. -->
      <param name="expressinstall" value="SCRIPTS/expressInstall.swf" />
      <param name="SCALE" value="noborder" />
      <param name="QUALITY" value="high" />
      <!-- La siguiente etiqueta object es para navegadores distintos de IE. Oc�ltela a IE mediante IECC. -->
      <!--[if !IE]>-->
      <object data="VIDEOS/smart_logo.swf" type="application/x-shockwave-flash" width="600" height="375">
        <!--<![endif]-->
        <param name="swfversion" value="6.0.65.0" />
        <param name="expressinstall" value="SCRIPTS/expressInstall.swf" />
        <param name="SCALE" value="noborder" />
        <param name="QUALITY" value="high" />
        <!-- El navegador muestra el siguiente contenido alternativo para usuarios con Flash Player 6.0 o versiones anteriores. -->

        <div>
          <h4>El contenido de esta p&aacute;gina requiere una versi&oacute;n m&aacute;s reciente de Adobe Flash Player.</h4>
          <p><a href="http://www.adobe.com/go/getflashplayer"><img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="Obtener Adobe Flash Player" width="600" height="297" /></a></p>
        </div>
        <!--[if !IE]>-->
      </object>
      <!--<![endif]-->
    </object>

  </div>
  <!-- Bloque Copyright -->
  <div id="tbCopyrigth">
    <div><span>&copy; Copyright 2012 | Todos los derechos Reservados <strong> Online Web </strong> Pol&iacute;tica de privacidad</span></div>
  </div>

</body>

</html>
<!-- no back link -->
<div style="visibility:hidden">
  <a href="http://apycom.com/">Apycom jQuery Menus</a>
</div>