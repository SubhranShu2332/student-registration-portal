<?php
   session_start();
   include 'conn.php';
   
   // Retrieve the variables from the page. In this case the variables are user id and password
   foreach($_REQUEST as $key=>$value) {
      $$key = $value;
   }

   // Create a SQL string to retrieve the data from the table
   $sql = "SELECT user_name FROM admin_login where admin_id='$Uname' and password='$Pass' and status='ON'";

   // EXECUTE THE QUERY
   $result = mysqli_query($conn,$sql);

   // Check the number of rows
   $no_of_rows = mysqli_num_rows($result);

   //Check the number of rows. If we have received 1 row, then it means, the row exists in the table and we can set the session variable to term it as 'Logged-in'

   if ($no_of_rows == 1) {
      $fetch_row = mysqli_fetch_array($result);
      $user_name = $fetch_row['user_name']; 
      //session_start();
      
      //set the session variables
      $_SESSION['user'] = $user_name;

      //Redirect the page
      header('Location: welcome.php?message=1');
   } else {
      session_unset();
      header('Location: adminlogin.php?message=0');
   }
?>
