<?php 
	header("Content-Type: text/html; charset=utf-8");
	include("connMysqlObj.php");

	$sex = "M"; $id = 5;
	if($stmt = $db_link->prepare("SELECT cID,cName , cEmail,cPhone FROM students WHERE cSex = ? AND cID <= ?;")){
		$stmt->bind_param("si",$sex,$id);
		$stmt->execute();
		$stmt->bind_result($col1,$col2,$col3,$col4);
		while($stmt->fetch()){
			echo "ID:{$col1}<br>Name:{$col2}<br>Email:{$col3}<br>Phone:{$col4}<br>";
		}
		$stmt->close();
	}


	$db_link->close();
 ?>	