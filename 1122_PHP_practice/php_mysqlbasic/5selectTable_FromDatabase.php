<?php 
	header("Content-Type: text/html; charset=utf-8");
	include("3setChar_And_ConnectTo_Mysql.php");
	$database_name = "test";
	$seldb = @mysqli_select_db($db_link,$database_name);

	if(!$seldb) die("select database '".$database_name."' fail!");

	$sql_query = "SELECT * FROM students";
	$result = mysqli_query($db_link,$sql_query);
	echo "SELECT * FROM students in DB : ".$database_name;



 ?>