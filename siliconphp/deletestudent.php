<?php 
     include 'conn.php';
     $student_id =$_REQUEST['id'];
     $my_query="delete from student where student_id='$student_id';";
     $result=mysqli_query($conn,$my_query);
     header('Location: dataedit.php?message=4');
?>
    