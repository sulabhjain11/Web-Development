<!-- the action will be performed on this page itself when the user presses the submit button -->
<!DOCTYPE html>
<html>
<head>
            <style>
                        label{
                          display:block;
                          margin:4px;
                        }
                        #id{
                          position:relative;
                          left:11px;
                        }
            </style>
</head>
<body>
              <!-- name=all the information will br passed with the name as their variables -->
              <!-- action=the name of the file to which the data will be transfered as array -->
              <!-- VERY IMPORTANT====if u do not put "name", u will not be able to access the data outside the file -->
              <!-- PHP_SELF====the path of this page itself will be taken -->
             <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
                           <label>
                                       Name:
                                       <input type="text" name="name">
                           </label>
                           <label>
                                        Age:
                                        <input type="text" id="id" name="age">
                           </label>
                           <!-- <button type="button">Submit</button> -->
                           <input type="Submit"name="submit" >
             </form>

             <?php
                  // Applying this condition so that this php runs not as the page loads, but after the user has clicked the submit button.
                  // as soon as the submit button is clicked come inside the if statement.
                  if (isset($_POST['submit'])) {
                     echo $_POST['name'];
                     echo "<br>";
                     echo $_POST['age'];
                  }
              ?>
</body>
</html>
