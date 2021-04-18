<?php
session_start();

if (isset($_SESSION['uid']))
{
    header('location:admin/admindash.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    
   <!--Additional stylesheet-->
   <link rel="stylesheet" text="text/css" href="../css/style.css">
    
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
    </br>
     <h1><u>ADMIN LOGIN</u></h1>
     </br>
     </div>
     </br>
     <div class="container">
     <a href="index.php" class="btn btn-info float-left" role="button">Back</a>
    </br>
    </div>
    
    </br>
    <div class="container bg-warning text-dark text-center">
       </br>

       <form action="login.php" method="post">
           <table border="2px solid" align="center">
           <tr>
               <td>
                   Username
               </td>
               <td>
                   <input type="text" name="uname" autocomplete="off" required>
               </td>
           </tr>
           <tr>
               <td>
                   Password
               </td>
               <td>
                   <input type="password" name="pass" autocomplete="off" required>
               </td>
           </tr>
           <td colspan=2>
               <input type="submit" name="login" value="LOGIN">
           </td>

           </table>

        </form> 
        </br>
    </div>

    
</body>
</html>

<?php

include('dbcon.php');

if (isset($_POST['login']))
{
    $username = $_POST['uname'];
    $password = $_POST['pass'];

    $qry = "SELECT * FROM `admin` WHERE `username`='$username' AND `password`='$password'";
    $run = mysqli_query($conn, $qry);

    $row = mysqli_num_rows($run);

    if ($row <1)
    {
        ?>
        <script>
            alert('Username or Password not matched!!');
            window.open('login.php','_self');
        </script>
        <?php
    }
    else
    {
        $data = mysqli_fetch_assoc($run);
        $id = $data['id'];

        $_SESSION['uid'] = $id;
        header('location:admin/admindash.php');
    }

}
?>