<?php session_start();

	session_destroy();
	header('Location:http://evangelicalunitedmethodist.org/login.php');	
?>