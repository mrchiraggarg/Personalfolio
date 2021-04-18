<?php
session_start();

if (isset($_SESSION['uid']))
{
    echo "";
}
else
{
    header('location:../login.php');
}
?>

<?php

include('header.php');

?>

</br>
<div class="container bg-warning text-center text-dark">
     <h1><u>ADMIN DASHBOARD</u></h1>
     </div>
     <div class="container">
     <a href="admindash.php" class="btn btn-info float-left" role="button">Back</a>
     <a href="logout.php" class="btn btn-info float-right" role="button">Log Out</a>
    </br>
    </div>
    
    </br>
    <div class="container bg-warning text-dark text-center">
       </br>

       <form action="addstudent.php" method="post" enctype="multipart/form-data">
           <table border="2px solid" align="center">
           
           <tr>
               <td>
                   Roll No.
               </td>
               <td>
                   <input type="text" name="rollno" autocomplete="off" required>
               </td>
           </tr>
           <tr>
               <td>
                   Full Name
               </td>
               <td>
                   <input type="text" name="name" autocomplete="off" required>
               </td>
           </tr>

           <tr>
               <td>
                   City
               </td>
               <td>
                   <input type="text" name="city" autocomplete="off" required>
               </td>
           </tr>
           <tr>
               <td>
                   Parents Contact No.
               </td>
               <td>
                   <input type="text" name="pcont" autocomplete="off" required>
               </td>
           <tr>
               <td>
                   Standard
               </td>
               <td>
                   <input type="number" name="standard" autocomplete="off" required>
               </td>
           </tr>
           <tr>
               <td>
                   Image
               </td>
               <td>
                   <input type="file" name="simg" autocomplete="off" required>
               </td>
           </tr>
           <td colspan=2>
               <input type="submit" name="submit" value="SUBMIT">
           </td>
           </table>

        </form> 
        </br>
    </div>
</br>
</body>
</html>

<?php

   if (isset($_POST['submit']))
   {   
    include('../dbcon.php');

       $rollno = $_POST['rollno'];
       $name = $_POST['name'];
       $city = $_POST['city'];
       $pcont = $_POST['pcont'];
       $standard = $_POST['standard'];
       $imagename = $_FILES['simg']['name'];
       $tempname = $_FILES['simg']['tmp_name'];

       move_uploaded_file($tempname,"../dataimg/$imagename");

       $qry = "INSERT INTO student (rollno, name, city, pcont, standard, image) VALUES ('$rollno','$name','$city','$pcont','$standard','$imagename')";

       $run = mysqli_query ($conn,$qry);  
       if ($run == true)
       {
        ?>
        <script>
        alert('Data Inserted.');
        </script>
        <?php
       }
       else
       {
        ?>
        <script>
        alert('Error Occured:');
        </script>
        <?php        
       }
   }
?>