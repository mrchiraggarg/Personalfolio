<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <!-- Additional CSS -->
    <style type="text/css">
    * {
    overflow-x: hidden;
    }
    input[type="text"] {
    text-align: center;
    color: black;
    }
    input[type="text"]::placeholder {
    text-align: center;
    color: black;
    }
    input[type="password"] {
    text-align: center;
    color: black;
    }
    input[type="password"]::placeholder {
    text-align: center;
    color: black;
    }
    .card {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%,-50%);
    }
    </style>
    <title>Registration Form In JS</title>
  </head>
  <body class="bg-light">
    <div class="card bg-dark text-light m-auto">
      <div class="card-body text-center">
        <!-- upper heading -->
        <div class="text-center p-3 h1">Registration Form In JS</div>
        <!-- form with js function -->
        <form method="get" action="#" onsubmit="return validation()">
          <!-- name field -->
          <div class="form-group">
            <input type="text" class="form-control" id="name" placeholder="Enter Your Name" autocomplete="off">
            <!-- error span -->
            <span id="namespan" class="text-warning"></span>
          </div>
          <!-- email field -->
          <div class="form-group">
            <input type="text" class="form-control" id="email" placeholder="Enter Your E-mail" autocomplete="off">
            <!-- error span -->
            <span id="emailspan" class="text-warning"></span>
          </div>
          <!-- password field -->
          <div class="form-group">
            <input type="password" class="form-control" id="password" placeholder="Enter The Password" autocomplete="off">
            <!-- error span -->
            <span id="passwordspan" class="text-warning"></span>
          </div>
          <!-- mobile no field -->
          <div class="form-group">
            <input type="text" class="form-control" id="mno" placeholder="Enter Your Mobile No." autocomplete="off">
            <!-- error span -->
            <span id="mnospan" class="text-warning"></span>
          </div>
          <!-- submit button -->
          <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>
<script type="text/javascript">
// function for form
function validation() {
var name = document.getElementById('name').value;
var email = document.getElementById('email').value;
var password = document.getElementById('password').value;
var mno = document.getElementById('mno').value;
// for empty field
if (name == "") {
document.getElementById('namespan').innerHTML = "**Please Filled The Name Field";
return false;
}
// for length
if ((name.length <= 2) || (name.length >= 30)) {
document.getElementById('namespan').innerHTML = "**Name Field Contains Characters Between 2 to 30";
return false;
}
// for is not a number function to check data type
if (!isNaN(name)) {
document.getElementById('namespan').innerHTML = "**Name Field Contains Only Characters.";
return false;
}
// for empty field
if (email == "") {
document.getElementById('emailspan').innerHTML = "**Please Filled The Email Field";
return false;
}
//checking for @ place
if (email.indexOf('@') <=0) {
document.getElementById('emailspan').innerHTML = "**Please Enter The Valid Email";
return false;
}
//checking for . place
if ((email.charAt(email.length-4) != '.') && (email.charAt(email.length-3) != '.')) {
document.getElementById('emailspan').innerHTML = "**Please Enter The Valid Domain";
return false;
}
// for empty field
if (password == "") {
document.getElementById('passwordspan').innerHTML = "**Please Filled The Password Field";
return false;
}
// for length
if ((password.length <= 6) || (password.length >= 20)) {
document.getElementById('passwordspan').innerHTML = "**Password Field Contains Characters And Digits Between 6 to 20";
return false;
}
// for empty field
if (mno == "") {
document.getElementById('mnospan').innerHTML = "**Please Filled The Mobile No. Field";
return false;
}
// for length
if ((mno.length != 10)) {
document.getElementById('mnospan').innerHTML = "**Please Filled The Valid Mobile No";
return false;
}
// for is not a number function to check data type
if (isNaN(mno)) {
document.getElementById('mnospan').innerHTML = "**Mobile No Field Contains Only Digits.";
return false;
}
}
</script>