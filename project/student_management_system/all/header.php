<?php
include '../db.php';
session_start();
if (isset($_SESSION['admin_id'])) {
} else {
header('location:../login.php');
}
$select_qry = "SELECT * FROM student";
$select_qry_run = mysqli_query($con,$select_qry);
$data = mysqli_fetch_array($select_qry_run);
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <title>Dashboard</title>
    <style type="text/css">
    input, select {
    background: #fff;
    color: rgb(59,59,59);
    border-radius: 1rem;
    border-style: solid;
    padding: 1rem;
    height: 2rem;
    outline:  none;
    }
    </style>
    <!--     <style type="text/css">
    @media only screen and (max-width: 768px;) {
    .table thead {
    display: none;
    }
    .table, .table tbody, .table tr, .table td {
    display: block;
    width: 100%;
    }
    .table tr {
    margin-bottom: 15px;
    }
    .table td {
    text-align: right;
    padding-left: 50%;
    position: relative;
    }
    .table td::before {
    content: attr(data-label);
    position: absolute;
    left: 0;
    width: 50%;
    padding-left: 15px;
    font-weight: bold;
    text-align: left;
    }
    }
    </style> -->
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark py-3">
      <a class="navbar-brand ml-5" href="dashboard.php">Dashboard</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active mr-5">
            <a class="nav-link" href="add_student.php">Add Student</a>
          </li>
          <li class="nav-item active mr-5">
            <a class="nav-link" href="exit.php">Exit</a>
          </li>
          <li class="mr-5">
            <form method="post" action="go_for_search.php">
              <input type="text" name="valueToSearch" placeholder="Search Keyword" class="mb-3">
              <button name="search_button" type="submit" class="btn btn-light">Search</button>
            </form>
          </li>
        </ul>
      </div>
    </nav>