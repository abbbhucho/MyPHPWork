<?php
	try{
		$bdd = new PDO("mysql:host=localhost;dbname=chat_message","root"."");
	 	//echo "connected";
		
	 }	
	catch(Exception $e){
		die("Error: ".$e->getmessage());
	}




?>