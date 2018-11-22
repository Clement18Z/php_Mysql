<?php

$set = setcookie("Testcookie","this is inside cookie!");

?>
<!DOCTYPE html>
<html>
<head>
	<title>CPOOKIE TEST</title>
</head>
<body>
<?php
if(isset($_COOKIE["Testcookie"])){
	echo "Cookie inside : ".$_COOKIE["Testcookie"];
}else{
	echo "Cookie in storage.Please refresh!";
}
?>
</body>
</html>









