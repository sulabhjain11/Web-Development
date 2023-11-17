<!-- Connecting to the already created database sulabhs_database1 -->
<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "sulabhs_database1";
// Connecting to the sulabhs_database1
$connect = mysqli_connect($servername,$username,$password,$database);
if($connect){
        echo "Connected to sulabhs_database1:<br>";
}
else{
        die("Failed to connect to sulabhs_database1".mysqli_connect_error());
}
// Selecting and displaying the required table,its row, or its element.
$sql = "SELECT * FROM `tripinformation`";
$result  = mysqli_query($connect,$sql);
if($result){
       echo "The server has selected the tripinformation table in the sulabhs_database1 database<br>";
}
else{
       die("Failed to select the requested table in the database".mysqli_error($result));
}
// Find the number of rows present in the tripinformation table
$no_of_rows = mysqli_num_rows($result);
echo "The number of rows present in the tripinformation database is:$no_of_rows<br>";
// Display the rows present in the table, if any.
if($no_of_rows>0){
       // Come here if something is present in the table
       // This below functino returns one row at a time
       $display_row = mysqli_fetch_assoc($result);
       echo "<pre>";
       print_r($display_row);
       echo "</pre>";
       $display_row = mysqli_fetch_assoc($result);
       echo "<pre>";
       print_r($display_row);
       echo "</pre>";
       $display_row = mysqli_fetch_assoc($result);
       echo "<pre>";
       print_r($display_row);
       echo "</pre>";
       $display_row = mysqli_fetch_assoc($result);
       echo "<pre>";
       print_r($display_row);
       echo "</pre>";
       $display_row = mysqli_fetch_assoc($result);
       echo "<pre>";
       print_r($display_row);
       echo "</pre>";
       $display_row = mysqli_fetch_assoc($result);
       echo "<pre>";
       print_r($display_row);
       echo "</pre>";
       $display_row = mysqli_fetch_assoc($result);
       echo "<pre>";
       print_r($display_row);
       echo "</pre>";
       $display_row = mysqli_fetch_assoc($result);
       echo "<pre>";
       print_r($display_row);
       echo "</pre>";
       $display_row = mysqli_fetch_assoc($result);
       echo "<pre>";
       echo var_dump($display_row);
       echo "</pre>";
}
else{
       echo "The table tripinformation is empty";
}
echo var_dump($display_row['id']);
 ?>
