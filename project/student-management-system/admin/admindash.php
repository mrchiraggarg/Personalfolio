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
     <a href="logout.php" class="btn btn-info float-right" role="button">Log Out</a>
    </br>
    </div>
    
    </br>
    <div class="container bg-warning text-dark text-center">
       </br>

           <table border="2px solid" align="center">
           <tr><td>1.</td>
               <td><u><a href="addstudent.php">ADD STUDENT</a></u></td>
           </tr>
           <tr><td>2.</td>
               <td><u><a href="updatestudent.php">UPDATE STUDENT</a></u></td>
           </tr>
           <tr><td>3.</td>
               <td><u><a href="deletestudent.php">DELETE STUDENT</a></u></td>
           </tr>

           </table>

        </br>
    </div>

    
</body>
</html>