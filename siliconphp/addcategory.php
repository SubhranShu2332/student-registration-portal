<?php
include 'conn.php';
$categories=$_REQUEST['categories'];
$my_query="INSERT INTO `category` (`category_id`, `category_name`) VALUES (NULL, '$categories')";
$result=mysqli_query($conn,$my_query);
if($my_query){
    $msg = 4;}
header('Location: categorymgmt.php?message=4');
?>