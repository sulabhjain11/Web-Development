<?php
$arr = array('sulabh'=>'red', '5'=>'blue', 'pryianka'=>50, 5=>'this',8=>'yellow','555'=>56);
// echo $arr[0];====wrong
echo $arr['sulabh'];
echo '<br>';
echo $arr['pryianka'];
echo "<br>";
echo $arr["5"]; //
echo "<br>";
echo $arr['5']; //
echo "<br>";
echo $arr[8];//
echo "<br>";
echo $arr[5]; //
echo "<br>";
echo "<br>";
foreach($arr as $a =>$b){
     echo "$a:$b <br>";
}

 ?>
