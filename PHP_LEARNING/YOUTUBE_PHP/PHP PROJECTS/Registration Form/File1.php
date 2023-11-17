<!-- We will be sending TEXT to database and not FILES -->
<!-- Radio button and Option will be not be sent in the get/post array until they have been submitted.
        They will not be assigned NULL -->
<!DOCTYPE html>
<html>
<head>
             <style>
                           body{
                             background-color:hsl(210deg 36% 96%);
                           }
                           #container{
                             border-style:solid;
                             border-color:blue;
                             width:615px;
                             border-radius:10px;
                             margin:auto;
                             box-shadow: 2px 2px #0303a0;
                           }
                           #title{
                             background-color:blue;

                           }
                           h1{
                             color:white;
                             background-color: blue;
                             margin:0px;
                             text-align:center;
                             padding:15px;
                           }
                           #formcontainer{
                             padding:15px;
                             background-color:white;
                           }
                           input{
                             margin-bottom:10px;
                           }
                           #firstname input,#lastname input,#email input,#password input,#number input{
                              width:365px;
                              height:18px;
                              border-radius:5px;
                              border-width:2px;
                           }
                           #submit{
                             background-color:blue;
                             color:white;
                             border-color:blue;
                             padding:2px;
                             margin-top:5px;
                             width:60px;
                             border-radius:30px;
                           }

             </style>
</head>
<body>
              <div id="container">
                          <div id="title">
                                    <h1>Registration Form</h1>
                          </div>
                          <div id="formcontainer">
                                    <form action="File1.php" method="get">
                                                  <label>
                                                               First Name
                                                               <div id="firstname">
                                                                          <input type="text" name="firstname" required>
                                                               </div>
                                                  </label>
                                                  <label>
                                                                Last Name
                                                                <div id="lastname">
                                                                           <input type="text" name="lastname">
                                                                </div>
                                                  </label>
                                                  <label>
                                                                <!-- Put the same name in the radio so that only one is clicked -->
                                                                Gender
                                                                <div id="gender">
                                                                             <label>
                                                                                          <input type="radio" name="gender" value="male">
                                                                                            Male
                                                                             </label>
                                                                             <label>
                                                                                          <input type="radio" name="gender" value="female">
                                                                                            Female
                                                                             </label>
                                                                             <label>
                                                                                          <input type="radio" name="gender" value="others">
                                                                                            Others
                                                                             </label>

                                                                </div>
                                                  </label>
                                                  <label>
                                                              Email
                                                              <div id="email">
                                                                        <input type="email" name="email" required>
                                                              </div>
                                                  </label>
                                                  <label>
                                                              Password
                                                              <div id="password">
                                                                       <input type="password" name="password" required>
                                                              </div>
                                                  </label>
                                                  <label>
                                                              Phone Number
                                                              <div id="number">
                                                                       <input type="tel" name="phonenumber">
                                                              </div>
                                                  </label>
                                                  <input type="submit" id="submit" name="submit" value="submit">
                                    </form>
                          </div>
              </div>

              <?php
                     if(isset($_GET['submit'])){
                            // Come here when the input function with the name=submit is clicked

                      echo "<pre>";
                          print_r($_GET);
                      echo "</pre>";
                   $firstname = $_GET['firstname'];
                   $lastname = $_GET['lastname'];
                   $gender = $_GET['gender'];   // radio button will give an error unless it is submitted.
                                                                        //so will be the case with with option
                   $email = $_GET['email'];
                   $password = $_GET['password'];
                   $phonenumber = $_GET['phonenumber'];

                   // Connect to the xampp and the sulabhs_database1
                   $servername = "localhost";
                   $username = "root";
                   $password = "";
                   $database = "sulabhs_database1";
                   $connect = mysqli_connect($servername,$username,$password);
                   if($connect){
                        echo "Successfully connected with Xampp<br>";
                   }
                   else{
                        die("Failed to connect with Xampp".mysqli_connect_error());
                   }
                   // Connecting with the already created sulabh_database1 in Xampp
                   $connect = mysqli_connect($servername,$username,$password,$database);
                   if($connect){
                         echo "Successfully connected with the sulabhs_database1 in Xampp<br>";
                   }
                   else{
                         die("Failed to connect with the sulabhs_database1 in Xampp".mysqli_connect_error());
                   }
                   // DEALING WITH TABLE
                   // Check for the existance of the table
                   $sql = "SELECT 1 FROM `registrationform`";
                   $result = mysqli_query($connect,$sql);
                   if($result){
                         // If table exists.
                         // Assign user's information on the table
                         // echo "table exists<br>";
                         $sql = "INSERT INTO `registrationform`(`First Name`,`Last Name`,`Gender`,`Email`,`Password`,  `Phone Number`) VALUES ('$firstname','$lastname','$gender','$email','$password','$phonenumber')";
                         $result = mysqli_query($connect,$sql);
                         if($result){
                                 echo "The data has been saved successfully in the database<br>";
                         }
                         else{
                                 echo "Failed to save the data entered by the user in the database<br>";
                         }
                   }
                   else{
                         // table does not exist.
                         // echo "table does not exist<br>";
                         // create table.
                         $sql = "CREATE TABLE `registrationform`(`First Name` VARCHAR(10),`Last Name` ENUM('male','female','others'),`Gender` VARCHAR(10),`Email` VARCHAR(10),`Password` VARCHAR(10),`Phone Number` BIGINT(10))";
                         // for number, BIGINT and not INT
                         $result = mysqli_query($connect,$sql);
                         if($result){
                                echo "The table registrationform has been successfully created in sulabhs_database1<br>";
                                $sql = "INSERT INTO `registrationform`(`First Name`,`Last Name`,`Gender`,`Email`,`Password`,  `Phone Number`) VALUES ('$firstname','$lastname','$gender','$email','$password','$phonenumber')";
                                $result = mysqli_query($connect,$sql);
                                if($result){
                                        echo "The data has been saved successfully in the database<br>";
                                }
                                else{
                                        echo "Failed to save the data entered by the user in the database<br>";
                                }
                         }
                         else{
                               die("Failed to create table =>".mysqli_error($connect));
                         }
                   }
                   mysqli_close($connect);
                 }
               ?>
</body>
</html>
