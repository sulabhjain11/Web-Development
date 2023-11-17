<?php
$servername = "localhost";
$hostname = "root";
$password = "";
$database = "sulabhs_database1";
// Connecting with sulabhs_database1 database
$connect = mysqli_connect($servername,$hostname,$password,$database);
if($connect){
     echo "You have been successfully connected with sulabhs_database1<br>";
}
else{
     die ("Failed to connect with sulabhs_database1 =>".mysqli_connect_error());
}
// The table was already created in the previous program.
$sql = "INSERT INTO `tripinformation`(`from`,`name`,`to`,`date`) VALUES('Thak','Siliguri','bjkhjk','jkhjk')"; // you can put randomly or not assign anything, it will become null.
$from ="Myanmar";
$name = "Chinu";
$sql = "INSERT INTO `tripinformation`(`from`,`name`) VALUES('$from','$name')";

$result = mysqli_query($connect,$sql);
if($result){
       echo "The data has been inserted into the:tripinformation:table in:sulabhs_database1:<br>";
}
else{
        die("Failed to insert data in the specified table in the database =>".mysqli_error($connect));
}
?>
