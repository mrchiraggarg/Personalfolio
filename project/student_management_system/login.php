<?php
session_start();
if(isset($_SESSION['admin_id'])) {
    header('location:all/dashboard.php');
}
?>
<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
        <title>Student Management System</title>
        <style type="text/css">
        body {
        box-sizing: border-box;
        margin: 0;
        padding: 0;
        background-color: #dee2ff;
        }
        .container {
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: row;
        height: 100vh;
        text-align: center;
        }
        .row {
        background-color: #fff;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: row;
        border-radius: 2rem;
        border-color: #000;
        border-style: solid;
        border-width: 0.1rem;
        }
        .col-md-6 {
        padding: 1rem;
        text-decoration: none;
        font-weight: 500;
        }
        input[type=text] {
        text-align: center;
        margin: auto;
        }
        input[type=password] {
        text-align: center;
        margin: auto;
        }
        img {
            border-radius: 2rem;
        }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <img src="assets/img/login.jpg" class="img-fluid">
                </div>
                <div class="col-md-6">
                    <h3>ENTER CREDENTIALS</h3>
                    <form method="post" action="login.php">
                        <div class="form-group">
                            <label>Username</label>
                            <input type="text" name="username" class="form-control w-50">
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" name="password" class="form-control w-50">
                        </div>
                        <button type="submit" name="login" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    </body>
</html>
<?php
include "db.php";
if(isset($_POST['login'])) {
$username = $_POST['username'];
$password = $_POST['password'];
$select_qry = "SELECT * FROM admin WHERE admin_username = '$username'";
$select_qry_run = mysqli_query($con,$select_qry);
$data = mysqli_fetch_array($select_qry_run);
if($password == $data['admin_password']) {
    echo mysqli_error($con);
$id = rand(1,99999);
$_SESSION['admin_id'] = $id;
header('location:all/dashboard.php');
} else {
?>
<script type="text/javascript">
alert ("Sorry! Credentials entered wrong");
window.open("login.php","_SELF");
</script>
<?php
}
}
?>