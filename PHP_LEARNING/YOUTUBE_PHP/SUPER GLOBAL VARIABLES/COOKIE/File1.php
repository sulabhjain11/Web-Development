<!-- WE WILL CREATE A COOKIE IN THIS PHP FILE -->
<!-- YOU CAN ACCES THE COOKIE IN THIS PHP PAGE OR IN ANY OTHER PHP PAGE -->

<!-- COOKIE IS ALWAYS SET BEFORE CREATING THE HTML PAGE -->

<?php
     $cookie_name = "user";
     $cookie_value = "sulabh jain";
     setcookie($cookie_name,$cookie_value,time()+(20),"/");
     // time() = current time
     // expiry = 20seconds from the current time when the cookie was set.
     // "/"= The cookie will be accessed in any page of the website.
     // "/home"= The cookie will be accessed in home page of the website.
 ?>

<!DOCTYPE html>
<html>
<head>

</head>
<body>
             <?php
                   if (!isset($_COOKIE[$cookie_name])) {
                        // If cookie is not set, come here.
                        echo "Cookie is not set";
                   }
                   else{
                        // If cookie is set, come here.
                        echo $_COOKIE[$cookie_name];
                   }

              ?>
</body>
</html>
