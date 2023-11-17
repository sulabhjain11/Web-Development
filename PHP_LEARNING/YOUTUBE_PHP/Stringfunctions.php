<?php
$name = "Hello thelre!! 0054 kjhsdij";
echo $name;
echo "<br>";
echo strlen($name);
echo "<br>";
echo "The length of the string is ".strlen($name);
echo "<br>";
echo "The number of words in the string is:".str_word_count($name); // this does not include number as a word
echo "<br>";
echo strrev($name);
echo "<br>";
echo strpos($name,"the"); // doesn't return anything if nothing is found
echo "<br>";
echo str_replace("el","sulabh",$name); // ALL el will be replaced with sulabh
echo "<br>";
echo str_repeat($name,10);
echo "<br>";
echo "<pre>";
echo rtrim("   Hello there hii      ");
echo "<br>";
echo ltrim("   Hello there hii      ");
echo "</pre>";
 ?>
