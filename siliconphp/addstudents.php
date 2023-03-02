<?php
include 'conn.php';
echo'<pre>'; //print_r($_REQUEST);
//print_r($_FILES);
//$student_id=$_REQUEST['student_id'];
$firstname= mysqli_real_escape_string($conn,$_REQUEST['firstname']);
$lastname= mysqli_real_escape_string($conn,$_REQUEST['lastname']);
$fathername= mysqli_real_escape_string($conn,$_REQUEST['fathername']);
$mothername= mysqli_real_escape_string($conn,$_REQUEST['mothername']);
$gender= $_REQUEST['Gender'];
$dateofbirth= $_REQUEST['dateofbirth'];
$category= $_REQUEST['category'];
$religion= mysqli_real_escape_string($conn,$_REQUEST['religion']);
$email= mysqli_real_escape_string($conn,$_REQUEST['email']);
$phonenumber=$_REQUEST['phonenumber'];
$address= mysqli_real_escape_string($conn,$_REQUEST['Address']);
$facilities=$_REQUEST['facility'];
//photo
$file_arr=$_FILES['photo'];
$photoname=$file_arr['name'];
$time=time();
$filename=$time.$photoname;
move_uploaded_file($file_arr['tmp_name'],"upload_photo/$filename");

 $my_query="INSERT INTO `student` (`student_id`, `firstname`, `lastname`, `fathersname`, `mothersname`, `gender`, `dob`, `category_id`, `religion`, `email`, `phone`, `address`, `photo_name`) VALUES (NULL, '$firstname', '$lastname', '$fathername', '$mothername', '$gender', '$dateofbirth', '$category', '$religion', '$email', '$phonenumber', '$address','$filename');";

$result=mysqli_query($conn,$my_query);
$studentid=mysqli_insert_id($conn);

foreach($facilities as $fac_id)
{
    $sql_insert="INSERT INTO `student_facility` (`student_facility_id`, `student_id`, `facility_id`) VALUES (NULL, '$studentid', '$fac_id');";
    $Result_fac=mysqli_query($conn,$sql_insert);

    if (!$Result_fac) {
        echo '<br> Insert to Student Facility Failed';
    }
}
echo $Result_fac;
header('Location: form1.php?message=1');
?>



?>