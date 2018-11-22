<?php 
	header("Content-Type: text/html; charset=utf-8");

	$db_host = "localhost";
	$db_username = "root";
	$db_password = "1234";
	$db_name = "class"; 

	$db_link = @new mysqli($db_host, $db_username, $db_password, $db_name);

	if($db_link -> connect_error !=""){
		echo "connect fail!";
	}else{
		echo "connect success !<hr />";
		$db_link -> query("SET NAMES 'utf-8'");
	}

 ?>	