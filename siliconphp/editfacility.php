

<?php
//include 'header.php';
include 'conn.php';
$id = $_GET['id'];
 $my_query=mysqli_query($conn,"delete from facility_id where facility_id='$id';"); 

if($my_query){
    $msg =1;
}else{
    $msg =0;
}

header('Location: facilitymgmt.php?message=1');
?>


