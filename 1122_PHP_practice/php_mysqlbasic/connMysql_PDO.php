<?php 
	$db_host = "localhost";
	$db_username = "root";
	$db_password = "1234";
	$db_name = "class"; 

	//exception handle
	try{
		//connect to database
		$db_link = new PDO("mysql:host={$db_host}; dbname={$db_name};charset=utf8",$db_username,$db_password);
		print "connect by PDO success!<hr>";
	}catch(PDOException $e){
		print "connect fail ,message:{$e -> getMessage()}<br/>";
		die();
	}

 ?>