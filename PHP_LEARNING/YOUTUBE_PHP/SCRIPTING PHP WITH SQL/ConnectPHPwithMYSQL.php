<?php

echo "Writing a php code to connect with the MySql database hosted by Xampp <br>";
/* Ways to connect with the MySql database
              MySqli extension(Works only with MySql Database)
                         Procedural
                         Object Oriented
              PDO(PHP DATAOBJECTS)===Works with all databases
*/

// Connecting to the database
// The below three parameters are fixed for Xampp.If you wish to connect with a real time server,you will be given with these credentials.Xampp is remote in your system.
$servername = "localhost";
$username = "root"; // can
$password = ""; // empty
$connect = mysqli_connect($servername,$username,$password); //true or false
if($connect){
      echo "The connection between the server and the database has been established successfully. <br>";
}
else{
      die("Failed to establish connection between the server and the database => ".mysqli_connect_error());
}
?>
