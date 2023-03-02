<?php
//include 'header.php';
include 'conn.php';
$id = $_GET['id'];
 $my_query=mysqli_query($conn,"delete from category where category_id='$id';"); 
header('Location: categorymgmt.php?message=1');
?>