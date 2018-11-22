<?php 
	header("Content-Type: text/html; charset=utf-8");
	include("connMysqlObj.php");

	if($result = $db_link -> query("SELECT DATABASE()") ){
		$row = $result->fetch_row();
		printf("Now,connect to (DB) : [%s] <hr /> ",$row[0]);
		$result -> close();
	}

	/* change DB to another  DB  */	
	$db_link ->select_db("test");
	
	if($result = $db_link ->query("SELECT DATABASE()")){
		$row = $result->fetch_row();
		printf("After DOING : \$db_link ->select_db(\"test\");          <br> ");
		printf("Now,connect to (DB) : [%s] <br>",$row[0]);
		$result -> close();
	}

	$db_link -> close();


	
 ?>	