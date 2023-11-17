<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "sulabhs_database1";
$connect = mysqli_connect($servername,$username,$password,$database);
if($connect){
      echo "Connected with the sulabhs_database1:<br>";
}
else{
      die("Failed to connect with sulabhs_database1 => ".mysqli_connect_error());
}
$sql = "SELECT * FROM `tripinformation` WHERE `id`=7";
$result = mysqli_query($connect,$sql);
if($result){
     echo "Selected some information from the table<br>";
}
else{
     die("Failed to select information from the table => ".mysqli_error($result));
}
$no_of_rows = mysqli_num_rows($result);
echo "The number of rows selectef are:$no_of_rows<br>";
// DISPLAYING THE SELECTED ROWS OF THE TABLE
if ($no_of_rows>0){
      while($display_row = mysqli_fetch_assoc($result)){
             echo "id:".$display_row['id']." name:".$display_row['name']." from:".$display_row['from']." to:".$display_row['to']."<br>";
      }
}
// UPDATING THE TABLE USING THE WHERE CLAUSE
$sql = "UPDATE `tripinformation` SET `name` = 'Chennai' WHERE `date` = 'jkhjk' ";
$result  = mysqli_query($connect,$sql);
/*
$aff = mysqli_affected_rows($connect);
echo "No of affected rows: $aff";
*/
// checking the result of the intended query
if($result){
       echo "The table has been successfully updated<br>";
}
else{
       echo "Failed to update the table<br>";
}
 ?>
