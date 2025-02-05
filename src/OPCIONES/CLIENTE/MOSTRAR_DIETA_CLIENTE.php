<style>

#form1 {
	}
	
#form1 label{
	position:absolute;
	top:22%;
	left: 14%;
	font-family:'Trebuchet MS', Tahoma, Arial;
	font-size:16px;
	color:#fff;
	text-decoration:none;
    text-transform:none;
    font-weight:normal;
	line-height:24px;
	text-shadow: black 0.1em 0.1em 0.2em;	
	}
	
#form1 input[type="text"]{
	position:absolute;
	top:53%;
	left:14%;}
	
#form1 input[type="image"]{
	position:absolute;
	width:54px;
	height:50px;
	top:45%;
	right:10%;}
	
#outerTextContainer{
	position: absolute;
	background-color: #979797;
	width: 22%;/*300px*/
	height: 22%;/*320px*/
	top: 28%;
	left: 38%;
	margin: 0 auto;
	line-height:1.5em;
	text-align:left;
	font-weight:600;
	padding:10px;	border:1px solid #000;
	border-radius:6px;
}
</style>

<form id="form1" name="form1" method="post" action="INSERTAR_MOSTRAR_DIETA_CLIENTE.php">
<label> DIGITE No. DOCUMENTO CLIENTE</label>
<input name="documento" required placeholder="No. Documento" autocomplete="off" type="text" pattern="[0-9]+" title="El documento debe estar formado únicamente por nùmeros"/>
<input type="image" name="ok" value="ok"  src="../../IMAGENES/aceptar.png" />
</form>