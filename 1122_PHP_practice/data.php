<?php 
	inclue("connMysqlObj.php")
	$sql_query = "SELECT * FROM students ORDER BY cID ASC;";
	$result = $db_link->query($sql_query);
	$total_records = $result->num_rows;

 ?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv = "Content-Type" context="text/html; charset=utf-8" />
	<title>Students data manage system</title>
</head>
<body>
	<h1 align="center">- Students data manage system -</h1>
	<p align="center">Num of data :  <?php echo $total_records; ?>
		，<a href="add.php">Add student data</a>。
	</p>
	<table border="1" align="center">
		<!-- Head row of table   -->
		<tr>
			<th>ID</th>
			<th>Name</th>
			<th>Gender</th>
			<th>Birthday</th>
			<th>Email</th>
			<th>Phone number</th>
			<th>Address</th>
			<th>Tool</th>
		</tr>
		<!-- data information -- >
		<?php 
			while($row_result=$result->fetch_assco()){
				echo "<tr>";
				echo "<td>".$row_result["cID"]."<td/>";
				echo "<td>".$row_result["cName"]."<td/>";
				echo "<td>".$row_result["cSex"]."<td/>";
				echo "<td>".$row_result["cBirthday"]."<td/>";
				echo "<td>".$row_result["cEmail"]."<td/>";
				echo "<td>".$row_result["cPhone"]."<td/>";
				echo "<td>".$row_result["cAddr"]."<td/>";
				echo "string";
				echo "string";
				echo "<tr/>";
			}


		 ?>
			
	</table>


</body>
</html>



