<!-- Let's find out what does $_FILES variable do -->



<?php
      if (isset($_FILES['image'])){
            // First check if the form has been submitted.
            // Whenever, the file is submitted, print the property of the $_FILES variable that will carry the uploaded file to the server.
            echo "<pre>";
            print_r($_FILES);
            echo "</pre>";

         /*
            Array
                    (
                      [image] => Array
                                  (
                                    [name] => .babel.7.15.5.production.json
                                    [type] => application/json
                                    [tmp_name] => C:\xampp\tmp\php582B.tmp
                                    [error] => 0
                                    [size] => 543553
                                   )
                     )
          */

          // uploading the file on the server.
          // move_uploaded_files(temporary name given to the file by php when the file was submitted,path in the server where the file is to be uploaded)
          //move_uploaded_file($_FILES['image']['tmp_name'],"UPLOADING FOLDER/".$_FILES['image']['name']);
          if (move_uploaded_file($_FILES['image']['tmp_name'],"UPLOADING FOLDER/".$_FILES['image']['name'])) {
                 echo "File has been uploaded in the server successfully";
          }
          else{
                 echo "Failed to upload file";
          }
      }
 ?>

<!DOCTYPE html>
<html>
<head>

</head>
<body>
              <!-- post or get cannot send a form with input type="file".This is where you use enctype. -->
              <!-- We can use the global variable $_FILES only if enctype is given. -->
             <form action="" method="post" enctype="multipart/form-data">
                          <input type="file" name="image">
                          <input type="submit" name="submit">
             </form>
</body>
</html>
