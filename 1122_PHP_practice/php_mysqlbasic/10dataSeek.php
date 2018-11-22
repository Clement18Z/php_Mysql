<?php 
	header("Content-Type: text/html; charset=utf-8");
	include("setChar_And_ConnectTo_Mysql.php");

	$database_name = "test";

	$seldb = @mysqli_select_db($db_link,$database_name);

	if(!$seldb) die("select database '".$database_name."' fail!");

	$sql_query = "SELECT * FROM students";
	$result = mysqli_query($db_link,$sql_query);

	mysqli_data_seek($result,2);
	
	$row_result=mysqli_fetch_assoc($result);
	foreach ($row_result as $item => $value) {
		# code...
		echo $item."=".$value."<br>";
	}
	

	


 ?>