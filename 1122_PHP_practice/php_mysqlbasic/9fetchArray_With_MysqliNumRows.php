<?php 
	header("Content-Type: text/html; charset=utf-8");
	include("setChar_And_ConnectTo_Mysql.php");

	$database_name = "test";

	$seldb = @mysqli_select_db($db_link,$database_name);

	if(!$seldb) die("select database '".$database_name."' fail!");

	$sql_query = "SELECT * FROM students";
	$result = mysqli_query($db_link,$sql_query);
	echo "<br>SELECT * FROM students in DB : ".$database_name."<br>mysqli_fetch_array<hr />";
	echo "There's <br>".mysqli_num_rows($result)."<br>students in DB_test.";
	


 ?>