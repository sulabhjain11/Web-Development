<?php
session_start(); // mandatory step to do anything related to session.
$_SESSION["favcolor"] = "red"; // you can change the session value anytime you wish to.  
echo "Session variable is set";
 ?>
