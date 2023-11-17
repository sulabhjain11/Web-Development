<?php
// Connecting this php server to the database
$servername = "localhost";
$username = "root";
$password = "";
$database = "sulabhs_database1";
$connect = mysqli_connect($servername,$username,$password,$database); // Include the database name.
if($connect){
    echo "Connection between the server and the database has been established <br>";
}
else{
     die("Failed to establish connection between the server and the database =>".mysqli_connect_error());
}

/*
// Creating a database in Xampp
$sql = "CREATE DATABASE sulabhs_database1"; // There was an error while creating sulabh's_database1 due to the semicolon.
$result = mysqli_query($connect,$sql);
if($result){
     echo  "Database has been created successfully";
}
else{
     die("Failed to create database".mysqli_error($connect));
}
*/

// CREATE TABLE `sulabhs_database1`.`tripinformation` ( `Id` INT(5) NOT NULL ,  `name` VARCHAR(3) NOT NULL ) ENGINE = InnoDB;
// Creating a table in the above created sulabhs_database1
$sql = "CREATE TABLE `TripInformation`(`id` INT(10),`name` VARCHAR(10),`from` VARCHAR(8),`to` VARCHAR(2),`date` VARCHAR(10))";
$result = mysqli_query($connect, $sql);
if($result){
     echo "The table was created successfully<br>";
}
else{
     die("The table failed to be created =>".mysqli_error($connect));
}
?>
