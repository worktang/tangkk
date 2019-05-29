<?php
header("content-type:text/html;charset=utf-8");
//	goto aojie;
//	echo '所长你在干嘛？';
//	aojie:
//	echo '再吵你就去吃东西';
//$a=1;
//while($a<100){
//	if($a>=7){
//		goto aojie;
//	}
//	$a++;
//}	
// aojie:
// echo '再吵你就去吃东西'.$a;
 
// for($i=0,$j=50;$i<=100;$i++){
// 	while($j--){
// 		if($j==20){
// 			goto end;
// 		}
// 	}
// }
// echo '我不是';
// end:
// echo '我是'.$j;
for($i=1,$j=0;$i<=10;$j+=$i,print $i,$i++);
echo '<br />';
$a=2;
$b=3;
$c=1;
echo $a>$b ? ($b>$c ? $c : $b) : ($a>$c ? $c : $a);
?>