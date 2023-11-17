<?php
// find the sum of all marks of a student
function abc($marksArray){
$sum = 0;
foreach($marksArray as $value) {
    $sum+=$value;
}
return $sum;
}
$marksSulabh = [50,656.3354,32,98];
$sumOfMarks1 = abc($marksSulabh);
$marksOfHarry = [65,0.3,63];
$sumOfMarks2 = abc($marksOfHarry);
echo "The sum of the student is $sumOfMarks1";
echo "<br>";
echo "Marks obtained by harry is $sumOfMarks2";
 ?>
