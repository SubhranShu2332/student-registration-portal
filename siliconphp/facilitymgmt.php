<!DOCTYPE html> 
<html> 
<?php 
    session_start();
    ?>
<head><title></title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://silicon.ac.in/wp-content/themes/sit/assets/css/custom.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://silicon.ac.in/wp-content/themes/sit/assets/css/owl.carousel.min.css">
    <!--    <link rel="stylesheet" href="js/owl.theme.default.min.css">-->
    <link rel="icon" href="https://silicon.ac.in/wp-content/themes/sit/favicon.ico" type="image/x-icon">

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
    <script src="https://silicon.ac.in/wp-content/themes/sit/assets/js/owl.carousel.min.js"></script>
    <script src="https://silicon.ac.in/wp-content/themes/sit/assets/js/custom.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css" >
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
  
    <script>
    //<script>
        //alert("Login Successful!")
        </script>
    <style>
    </style>
    <style>
        .content {
            max-width: 500px;
            padding: 25px;
            margin: 50px auto 0;
            border: black;
        }

        body{
  background-image: url('https://img.freepik.com/premium-photo/simple-white-background-with-smooth-lines-light-colors_476363-5558.jpg?w=2000');
}

        .div {
            width: 550px;
            margin: auto;
            margin: 10 0 0 450px;
            overflow: hidden;
            padding: 70px;
            background: rgb(130, 137, 130);
        }

        h2 {
            text-align: center;
            padding: 10px;
            color: rgb(248, 4, 4);
            text-decoration: underline;
        }

        label {
            color: blue;
            padding-left: 10px;

        }

        .inputText {
            width: 300px;
            height: 30px;
            border: none;
            border-radius: 2px;
            padding-left: 8px;

        }

        #add {
            width: 300px;
            height: 35px;
            border: none;
            border-radius: 10px;
            padding-left: 7px;
            color: rgb(248, 248, 251);
            font-size: 16px;
        }
    </style>
    <style>
          .wrapper {
            
            display: flex;
            align-items: center;
            justify-content: center;
          }
          </style>
    
</head>
<body class="body">
<header>
<hr></hr>   
<nav class="navbar navbar-expand-lg navbar-light bg-light">
&ensp;<img style="width:250px" src="https://silicon.ac.in/wp-content/themes/sit/assets/img/sit-logo.svg">

  <a class="navbar-brand" href="/siliconphp/day2.php"><b style="color:blue">&emsp;&emsp;HOME</b></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">

      <?php if (isset($_SESSION['user'])) { ?>
        <li class="nav-item">
            <a class="nav-link" href="facilitymgmt.php?message"><b style="color:blue">&ensp;FACILITY</b></a>
        </li>
      <?php }  ?>
<li class="nav-item">
        <a class="nav-link" href="form1.php?message"><b style="color:blue">&ensp;ADDMISSION</b></a>
      </li>
      <?php if (isset($_SESSION['user'])) { ?>
        <li class="nav-item">
            <a class="nav-link" href="categorymgmt.php?message"><b style="color:blue">&ensp;CATEGORY</b></a>
        </li>
      <?php }  ?>
      <?php 
      if (isset($_SESSION['user'])) { ?>
        <li class="nav-item">
            <a class="nav-link" href="adminlogout.php"><b style="color:blue">&ensp;LOGOUT</b></a>
        </li>
      <?php } else { ?>
        <li class="nav-item">
                <a class="nav-link" href="adminlogin.php?message"><b style="color:blue">&ensp;ADMIN-LOGIN</b></a>
            </li>       
            <?php } ?>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
          <b style="color:blue">&ensp;More</b>
        </a>
        <div class="dropdown-menu">
        <?php if (isset($_SESSION['user'])) { ?>
          <a class="dropdown-item" href="dataedit.php?message">Show Registered List</a>
          <?php }  ?>
          <!--a class="dropdown-item" href="#">Campus Life</a-->
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Help</a>
        </div>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit"><b style="color:blue">Search</b></button>
    </form>
  </div>
  
</nav>
<div class="text-right">
<?php
                  if (isset($_SESSION['user'])) {
                    echo ' You have successfully Logged in as '. $_SESSION['user'];
                  }
                ?>
</div>
</header>
    <form enctype="multipart/form-data" class="well-form-horizontal studentRegistration by-form" action="addfacility.php" method="post" id="contactform">
        <br><br>
        <div class="container col-md-6 wrapper">
        <label>Enter facilities you want to add:-</label>
                <input type="text" name="facilities" class="form-control" placeholder="add facilities">
                <br>
                <button class="btn btn-primary" type="submit" name="log" id="logButton" value="Login"
                    onclick="">ADD</button>
                <br>
                
        </div><br><br><u><center><h3 style="color:blue">Facility Table</h3><center></u>
    </form>
<?php
//session_start();
//include 'header.php';
include 'conn.php';

/*if (isset($_SESSION['user'])) {
    header('Location: adminlogin.php');
}*/
// Get the list of Data from the table
$sql_student = "select * from facility_id";


if($_GET['message']==1)
{ ?>
<div class="alert alert-success" role="alert">
  Deletion Done!!!
</div>
<?php
}
if($_GET['message']==4)
{ ?>
<div class="alert alert-success" role="alert">
  Insertion Done!
</div>
<?php
}


//Execute the query
$result = mysqli_query($conn,$sql_student);
?>
<br>
<div class="container col-md-6" >
 <table id=facilitytable>
    <thead>
        <th>category_id</th>
        <th>category name</th>
        <th>Action</th>
        <!--th>Delete</th-->
    </thead>
    <tbody>
<?php

while($fetched_data=mysqli_fetch_row($result)) {
    echo '<tr>';
    echo '<td>'.$fetched_data[0].'</td>';
    echo '<td>'.$fetched_data[1].'</td>';
    echo '<td><a href=editfacility.php?action=delete&id='.$fetched_data[0].'>delete</a></td>';
    echo '</tr>';
} 
?>
</tbody>
<script>
$(document).ready(function () {
    $('#facilitytable').DataTable();
} );
</script>
 </table>
</div>
</body>