<?php
	session_start();
	
	
    
	$variable_ad=$_SESSION['administrador'];
	$variable_en=$_SESSION['entrenador'];
	$variable_cl=$_SESSION["cliente"];
		
	
	if($_SESSION['login']==0)
	{
		header("Location:http://localhost/smartfitness/");
	}
		
?>
