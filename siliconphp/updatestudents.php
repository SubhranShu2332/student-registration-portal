<?php
include 'conn.php';
//echo'<pre>'; print_r($_REQUEST);
//print_r($_FILES);
$student_id = $_REQUEST['student_id'];

$firstname= $_REQUEST['firstname'];
$lastname= $_REQUEST['lastname'];
$fathername= $_REQUEST['fathername'];
$mothername= $_REQUEST['mothername'];
$gender= $_REQUEST['Gender'];
$dateofbirth= $_REQUEST['dateofbirth'];
$category= $_REQUEST['category'];
$religion= $_REQUEST['religion'];
$email= $_REQUEST['email'];
$phonenumber= $_REQUEST['phonenumber'];
$address= $_REQUEST['Address'];
$facilities=$_REQUEST['facility'];
//photo
$file_arr=$_FILES['photo'];
$photoname=$file_arr['name'];
$time=time();
$filename=$time.$photoname;
move_uploaded_file($file_arr['tmp_name'],"upload_photo/$filename");


echo $my_query="UPDATE `student` SET `firstname`='$firstname',`lastname`='$lastname',`fathersname`='$fathername',`mothersname`='$mothername',`gender`='$gender',`dob`='$dateofbirth',`category_id`='$category',`religion`='$religion',`email`='$email',`phone`='$phonenumber',`address`='$address',`photo_name`='$filename' WHERE student_id='$student_id'";
$result=mysqli_query($conn,$my_query);

$del_query="DELETE FROM `student_facility` WHERE student_id='$student_id';";
$Result_fac=mysqli_query($conn,$del_query);

foreach($facilities as $fac_id)
{
    $sql_insert="INSERT INTO `student_facility` (`student_facility_id`, `student_id`, `facility_id`) VALUES (NULL, '$student_id', '$fac_id');";
    $Result_fac=mysqli_query($conn,$sql_insert);
    if(!$Result_fac) $msg='Failed';
    else $msg='Success';
}

header('Location: dataedit.php?message=1');
?>