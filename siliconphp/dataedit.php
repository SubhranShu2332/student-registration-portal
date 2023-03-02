<?php
//session_start();
include 'header.php';
include 'conn.php';

//if (!isset($_SESSION['user'])) {
  //  header('Location: adminlogin.php');
//}
// Get the list of Data from the table
$sql_student = "select *,(select category_name from category where category_id=x.category_id) category_name from student x,(SELECT b.student_id, group_concat(facility_name) FROM `facility_id` a, student_facility b where a.facility_id=b.facility_id group by b.student_id) d where d.student_id=x.student_id;";

//Execute the query
$result = mysqli_query($conn,$sql_student);
?>
<br><br>
<div class=container-fluid>
<?php
if($_GET['message']==1) {
?>
<div class="alert alert-success" role="alert">
   Updation Done!!
</div>
<?php
}
if($_GET['message']==4)
{ ?>
<div class="alert alert-success" role="alert">
  Deletion Done!!!
</div>

<?php }
?>


<table id=myTable>
    <thead>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Father's Name</th>
        <th>Mother's Name</th>
        <th>Gender</th>
        <th>Date of birth</th>
        <th>Category</th>
        <th>Religion</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Address</th>
        <th>Facility</th>
        <th>Action</th>
        <!--th>Delete</th-->
    </thead>
    <tbody>
<?php

while($fetched_data=mysqli_fetch_row($result)) {
    echo '<tr>';
    echo '<td>'.$fetched_data[1].'</td>';
    echo '<td>'.$fetched_data[2].'</td>';
    echo '<td>'.$fetched_data[3].'</td>';
    echo '<td>'.$fetched_data[4].'</td>';
    echo '<td>'.$fetched_data[5].'</td>';
    echo '<td>'.$fetched_data[6].'</td>';
    echo '<td>'.$fetched_data[15].'</td>';
    echo '<td>'.$fetched_data[8].'</td>';
    echo '<td>'.$fetched_data[9].'</td>';
    echo '<td>'.$fetched_data[10].'</td>';
    echo '<td>'.$fetched_data[11].'</td>';
    echo '<td>'.$fetched_data[14].'</td>';
    echo '<td><a href=form1.php?action=edit&id='.$fetched_data[0].'&message>Edit</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href=deletestudent.php?action=delete&id='.$fetched_data[0].'>delete</a></td>';
    echo '</tr>';
} 
?>
</tbody>
<script>
$(document).ready( function () {
    $('#myTable').DataTable();
} );
</script>
</table>
</div>



