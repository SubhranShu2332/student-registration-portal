<?php
session_start();
?>
<!doctype html>
<html lang="en">
<html>
<head>
  <title> </title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Poppins">
          
          <style>
            body {
              font-family: 'Poppins', "sans-serif";
            }
          </style>
           <style>
            .material-symbols-outlined {
              font-variation-settings:
              'FILL' 100,
              'wght' 400,
              'GRAD' 0,
              'opsz' 48
            }
            </style>
        <style>
          .wrapper {
            
            display: flex;
            align-items: center;
            justify-content: center;
          }
          </style>
          <style>
body{
  background-image: url('https://img.freepik.com/premium-photo/simple-white-background-with-smooth-lines-light-colors_476363-5558.jpg?w=2000');
}
</style>
        
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css" >
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
  
</head>
<body>
<header>
<br> <nav class="navbar navbar-expand-lg navbar-light bg-light">
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
        <a class="nav-link" href="form1.php?message"><b style="color:blue">&ensp;ADMISSION</b></a>
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
          <a class="dropdown-item" href="mailto:whiteunicorn1947@gmail.com">Help</a>
        </div>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit"><b style="color:blue">Search</b></button>
    </form>
  </div>
  
</nav>
<!--div class="text-right">
<?php
                  if (isset($_SESSION['user'])) {
                    echo ' You have successfully Logged in as '. $_SESSION['user'];
                  }
                ?>
</div-->
</header>