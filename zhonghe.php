<?php
	header("content-type:text/html;charset=utf-8");
	for($a=1;$a<=9;$a++){
		for($c=4;$c<=1;$c--){
			echo 1;
		}
		for($b=1;$b<=$a;$b++)
		{
			echo '*';
		}
		echo '<br />';
	}
?>