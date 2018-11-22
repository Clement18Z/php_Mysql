<?php 
	header("Content-Type: text/html; charset=utf-8");
	include("connMysql_PDO.php");

	$sex = "M"; $id = 5;
	$stmt = $db_link->prepare("SELECT * FROM students WHERE cSex = ? AND cID <= ?;");
	if($stmt->execute(array($sex,$id))){
		while ($row=$stmt->fetch()) {
			# code...
			echo "ID:{$row['cID']}<br>Name:{$row['cName']}<br>Email:{$row['cEmail']}<br>Phone:{$row['cPhone']}<hr>";
		}

	}
	
	
 ?>	