<!-- THIS PHP FILE WILL BE USED TO ACCESS THE COOKIE CREATED IN THE File1.php -->
<!-- COOKIE can be called from another php file aswell -->

<?php
          // The resultant will be the cookie value given to the cookie name
          echo $_COOKIE['user']; // $cookie_name is wrong. call the name that you set

          // deleting the cookie
          // refresh the page twice and the cookie will be deleted
          setcookie("user","",time()-(20),"/");
 ?>
