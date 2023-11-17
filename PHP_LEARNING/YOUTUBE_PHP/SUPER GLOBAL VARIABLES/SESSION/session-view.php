<!-- Accessing the session -->
<?php
      session_start();
      print_r($_SESSION);
 ?>

<!DOCTYPE html>
<html>
<head>

</head>
<body>
             <?php
                   if (isset($_SESSION["favcolor"])) {
                         echo "<br>".$_SESSION["favcolor"];
                   }
              ?>
</body>
</html>
