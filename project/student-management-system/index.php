<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Management System</title>
    
   <!--Additional stylesheet-->
   <link rel="stylesheet" text="text/css" href="css/style.css">
    
   <!-- Latest compiled and minified CSS -->
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

   <!-- jQuery library -->
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

   <!-- Popper JS -->
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

   <!-- Latest compiled JavaScript -->
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script> 


</head>
<body>
</br>
    <div class="container bg-warning text-center text-dark">
     <h1><u>STUDENT MANAGEMENT SYSTEM</u></h1>
     </div>
     <div class="container">
     <a href="login.php" class="btn btn-info float-right" role="button">Admin Login</a>
    </br>
    </div>
    
    </br>
    <div class="container bg-warning text-dark text-center">
       </br>

       <form action="index.php" method="post">
           <table border="2px solid" align="center">
           <th colspan=2>Student Information</th>
           <tr><td>Choose Standard</td>
               <td><select name="standard">
               <option>Click To Choose</option>
               <option>1st</option>
               <option>2nd</option>
               <option>3rd</option>
               <option>4th</option>
               <option>5th</option>
               <option>6th</option>
               <option>7th</option>
               <option>8th</option>
               </select>
               </td>
           </tr>

           
           <tr><td>Enter Roll No.</td>
               <td>
                   <input type="text" name="rollno" autocomplete="off" required>
               </td>
           </tr>
           <td colspan=2>
               <input type="submit" name="submit" value="Show Info.">
           </td>

           </table>

        </form> 
        </br>
    </div>



</body>
</html>

<?php

if (isset($_POST['submit']))
{
    $standard = $_POST['standard'];
    $rollno = $_POST['rollno'];

    include('dbcon.php');
    include('function.php');

    showdetails($standard,$rollno);
}
?>