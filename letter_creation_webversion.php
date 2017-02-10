<?php


	$mes = fopen("assets/files/message.txt", "r");
	//$mes = fgets("message.txt");
	$mes = fread($mes, 10000);
	$mes = str_replace('\n', "<br>", $mes);

	$message = $mes;
	//echo $message;



	$full_message = $message;
	echo $full_message;

		echo "<br>";
		echo "<br>";
		echo "<br>";
		echo "<hr>";

?>