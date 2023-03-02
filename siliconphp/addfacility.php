<?php
include 'conn.php';
$facilities=$_REQUEST['facilities'];
$my_query="INSERT INTO `facility_id`(`facility_id`, `facility_name`) VALUES ('NULL','$facilities')";
$result=mysqli_query($conn,$my_query);
if($my_query){
    $msg = 4;}
header('Location: facilitymgmt.php?message=4');

?>