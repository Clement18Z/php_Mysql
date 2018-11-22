<?php
$dateStr = date("Y-m-d 23:59:59");
if(isset($_COOKIE["counter"])){
	$counter = $_COOKIE["counter"];
	$counter++;
	setcookie("counter",$counter,strtotime($dateStr));
}else{
	setcookie("counter","0",strtotime($dateStr));
	header("Location: 5_count_ViewofDay.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Views of Today (Cookie)</title>
</head>
<body>
<?php
	echo "Your Views of Today is : ".$counter;
?>
</body>
</html>









