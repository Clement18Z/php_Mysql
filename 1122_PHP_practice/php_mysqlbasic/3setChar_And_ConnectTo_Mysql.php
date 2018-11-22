<?php 
	
	$db_host = "localhost";
	$db_username = "root";
	$db_password = "1234";

	$db_link = @mysqli_connect($db_host,$db_username ,$db_password);   
	if(!$db_link)die("connecting fail!");

	mysqli_query($db_link,"SET NAMES 'utf-8'");	
	echo "Setting success!<hr />";
 ?>