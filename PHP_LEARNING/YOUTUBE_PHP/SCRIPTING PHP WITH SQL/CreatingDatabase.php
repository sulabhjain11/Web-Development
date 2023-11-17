<?php

// Connecting this php server to the database
$servername = "localhost";
$username = "root";
$password = "";
$connect = mysqli_connect($servername,$username,$password);
if($connect){
    echo "Connection between the server and the database has been established <br>";
}
else{
     die("Failed to establish connection between the server and the database =>".mysqli_connect_error());
}

// Creating a database in Xampp
$sql = "CREATE DATABASE sulabhs_database1"; // There was an error while creating sulabh's_database1 due to the semicolon.
$result = mysqli_query($connect,$sql);
if($result){
     echo  "Database has been created successfully";
}
else{
     die("Failed to create database =>".mysqli_error($connect));
}
?>
