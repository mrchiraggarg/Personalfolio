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

       <form action="updatestudent.php" method="post" enctype="multipart/form-data">
           <table border="2px solid" align="center">
           
           <tr>
               <td>
                   Enter Student Name
               </td>
               <td>
                   <input type="text" name="stuname" autocomplete="off" required>
               </td>
           </tr>
           <tr>
               <td>
                   Standard
               </td>
               <td>
                   <input type="number" name="standard" autocomplete="off" required>
               </td>
           </tr>
           <td colspan=2>
               <input type="submit" name="submit" value="SEARCH">
           </td>
           </table>

        </form> 
        </br>
    </div>
</br>

<div class="container bg-warning text-center">
<table align="center" width="80%" border="2px solid">
<tr>
<th>No</th>
<th>Image</th>
<th>Name</th>
<th>Roll No</th>
<th>Edit</th>
</tr>

<?php

if (isset($_POST['submit']))
{
    include('../dbcon.php');

    $name = $_POST['stuname'];
    $standard = $_POST['standard'];
    
    $sql = "SELECT * FROM student WHERE name LIKE '%$name%' AND standard ='$standard'";

    $run = mysqli_query($conn,$sql);

    if (mysqli_num_rows($run)<1)
    {
        echo "<tr><th colspan='5'>NO RECORD FOUND!!..</th></tr>";
    }
    else
    {
        $count = 0;
        while ($data = mysqli_fetch_assoc($run))
        {
            $count++;
            ?>
            
<tr>
<th><?php echo $count; ?></th>
<th><img src="../dataimg/<?php echo $data['image'];?>" style="max-width:100px;"/></th >
<th><?php echo $data['name'];?></th>
<th><?php echo $data['rollno'];?></th>
<th><a href="updateform.php?sid=<?php echo $data['id'];?>">Edit</th>
</tr>
            <?php
        }
    }
}

?>