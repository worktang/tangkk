<?php
header("content-type:text/html;charset=utf-8");
//	for($i=1;$i<101;$i++){
//		echo $i.'测试<br />';
//	}
$sum=0;
	for($i=1;$sum<2000;$i++){
		$sum+=$i;
		echo $i.'<br />';
	}echo $sum;
	
//$sum=0;
//	for($i=1;$i<2000;$i++){
//		$sum+=$i;
//		if($sum<2000){
//			echo $i.'<br />';
//			
//		}
//		
//		else{
//			break;
//		}
//	}echo $sum;
//for($i=1;$i<=9;$i++){
//	for($j=1;$j<=$i;$j++){
//		echo $i.'*'.$j.'='.$i*$j;
//	}
//	echo '<br />';
//}

//$a=1;
//for(;$a<=10;$a++){
//	if($a==4){
//		continue;
//	}
//	else{
//		echo $a;
//	}
//}
////exit('我要退出了');
//die;
//echo '<br />要不要提前放学';
	
?>