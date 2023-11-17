<?php
session_start();
// session cannot be deleted directly. You have to first delete all the session values that you have set.
session_unset();
// Now, delete the session.
session_destroy();
echo "Session is destroyed."
 ?>
<!-- Now, go and check the session-view.php file.....the session value will be destroyed -->
