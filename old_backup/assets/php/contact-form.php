<?php

	$name = trim($_POST['name']);
	$email = trim($_POST['email']);
	$message = trim($_POST['message']);
	
	
	
	$myfile = fopen($email.".txt", "w") or die("Unable to open file!");
	$txt = "Nome:". $name .PHP_EOL;
	fwrite($myfile, $txt);
	
	$txt = "Email:". $email.PHP_EOL;
	fwrite($myfile, $txt);
	
	$txt = "Message:". $message.PHP_EOL;
	fwrite($myfile, $txt);
	
	fclose($myfile);



	
	echo ('SEND');
	
?>
