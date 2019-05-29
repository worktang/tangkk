<?php
header("content-type:text/html;charset=utf-8;");
	$arr=array('1001'=>'令狐冲','1002'=>'东方不败','1003'=>'岳不群','1004'=>'任盈盈');
	echo '<pre>';
	print_r($arr);
	echo '</pre>';
	
	foreach($arr as $value){
		echo $value.'<br />';
	}
	
	
?>