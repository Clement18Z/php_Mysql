<?php 
	header("Content-Type: text/html; charset=utf-8");
	//$db_link = @mysqli_connect("localhost", "root","1234a"); //fail
	$db_link = @mysqli_connect("localhost", "root1","1234");    //success，passwd = "1234"
	if(!$db_link){
		echo "connecting fail!";
	}else{
		echo "connecting successed~";
	}
 ?>