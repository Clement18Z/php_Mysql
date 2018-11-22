<?php
$student = array(array('id'=>15,'name'=>'Vivi','gender'=>'M','birthday'=>'0','phone'=>'000'),
				 array('id'=>45,'name'=>'Vava','gender'=>'M','birthday'=>'1','phone'=>'111'),
				 array('id'=>65,'name'=>'lulu','gender'=>'F','birthday'=>'2','phone'=>'222'),
				 array('id'=>80,'name'=>'nana','gender'=>'M','birthday'=>'3','phone'=>'333'),
				 array('id'=>999,'name'=>'lili','gender'=>'F','birthday'=>'4','phone'=>'444'));


foreach ($student as $sdata) {
	# code...
	echo "ID:".$sdata['id'].",";
	echo "Name:".$sdata['name'].",";
	echo "Gender:".$sdata['gender'].",";
	echo "Birthday:".$sdata['birthday'].",";
	echo "Phone:".$sdata['phone']."。<br>";
}
		
?>