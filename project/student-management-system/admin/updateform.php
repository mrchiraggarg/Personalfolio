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
include('../dbcon.php');

$sid = $_GET['sid'];

$sql = "SELECT * FROM student WHERE id ='$sid'";

$run = mysqli_query($conn,$sql);

$data = mysqli_fetch_assoc($run);

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
    
    </br>   <div class="container bg-warning text-dark text-center">
       </br>

       <form action="updatedata.php" method="post" enctype="multipart/form-data">
           <table border="2px solid" align="center">
           
           <tr>
               <td>
                   Roll No.
               </td>
               <td>
                   <input type="text" name="rollno" autocomplete="off" value=<?php echo $data['rollno']?> required>
               </td>
           </tr>
           <tr>
               <td>
                   Full Name
               </td>
               <td>
                   <input type="text" name="name" autocomplete="off" value=<?php echo $data['name']?> required>
               </td>
           </tr>

           <tr>
               <td>
                   City
               </td>
               <td>
                   <input type="text" name="city" autocomplete="off" value=<?php echo $data['city']?> required>
               </td>
           </tr>
           <tr>
               <td>
                   Parents Contact No.
               </td>
               <td>
                   <input type="text" name="pcont" autocomplete="off" value=<?php echo $data['pcont']?> required>
               </td>
           <tr>
               <td>
                   Standard
               </td>
               <td>
                   <input type="number" name="standard" autocomplete="off" value=<?php echo $data['standard']?> required>
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
               <input type="hidden" name="sid" value="<?php echo $data['id'];?> "/>
               <input type="submit" name="submit" value="SUBMIT">
           </td>
           </table>

        </form> 
        </br>
    </div>
</br>
