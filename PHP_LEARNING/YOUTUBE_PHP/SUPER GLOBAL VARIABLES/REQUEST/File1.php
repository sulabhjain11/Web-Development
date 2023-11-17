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
             <form action="File2.php" method="get">
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
</body>
</html>
