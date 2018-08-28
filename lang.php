<?php 

session_start(); 
// Comprobamos la variable get
if (isset($_GET["idioma"])) { 

	switch ($_GET["idioma"]) {
	// español
	case 'es':
	$_SESSION["idioma"]=$_GET["idioma"]; 
	break;
	// ingles
	case 'en':
	$_SESSION["idioma"]=$_GET["idioma"]; 
	break;
	//frances
	case 'fr':
	$_SESSION["idioma"]=$_GET["idioma"]; 
	break;
	// si no existe lo ponemos en español
	default:
	$_SESSION["idioma"]="es"; 
	break;
	}

} else {
	$_SESSION['idioma']="es";
}

// incluimos el idioma con las definiciones 
include("".$_SESSION["idioma"].".php"); 

?> 