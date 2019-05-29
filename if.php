<?php
header("content-type:text/html;charset=utf-8");

//$num=2;
//switch($num){
//	case 1:
//		echo '高级会员';
//		break;
//	case 2:
//		echo '普通会员';
//		break;
//	case 3:
//		echo '小老百姓';
//		break;
//	default:
//		echo '不死人';
//		
//}
//echo '<br />';
$a=1;
$b=2;
$c=3;
//if($a>$b){
//	if($a>$c){
//		echo $a;
//	}
//	else{
//		echo $c;
//	}
//}
//else{
//	if($b>$c){
//		echo $b;
//	}
//	else{
//		
//		echo $c;
//	}
//}
$i=1;
//while($i<20){
//	$i++;
//	echo $i;
//}

//do{
//	echo $i;
//	$i++;
//}
//while($i<=20);
//	$num=0;
//	while($num<=54){
//		$num++;
//		echo "报数:$num <br />";
//	}



$a = 1;
while($a <= 9){
	$c = 1;
	while($c <= $a){
		echo $a.'*'.$c.'='.$a*$c."\t";                                                                                                                                                                                                                                                                                                                                       
		$c++;
	}
	echo "<br />";
	$a++;
}
?>