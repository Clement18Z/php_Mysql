<?php
session_start();
if(!isset($_SESSION["countOK"]))
{
	$dataStr = date("Y-m-d 23:59:59");
	if(isset($_COOKIE["counter"]))
	{
		$counter = $_COOKIE["counter"];
		$counter++;
		setcookie("counter",$counter,strtotime($dataStr));
	}
	else
	{
		setcookie("counter","0",strtotime($dataStr));
		header("Location: session_viewofday.php");
	}	

	$_SESSION["countOK"] = 1;

}
else
{
	$counter = $_COOKIE["counter"];
}
?>
<html>
	<head>
		<title>Views of Today ~(Session) </title>
	</head>
	<body>
		<?php
			echo "Views of Today is : ".$counter."time(s)";
		?>
	</body>
</html>

