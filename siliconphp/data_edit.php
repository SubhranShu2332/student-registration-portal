<?php
session_start();
include 'conn.php';
//include 'header.php';

// Get the list of Data from the table
$sql_student = "select * from student";

//Execute the query
$result = mysqli_query($conn,$sql_student);
?>
<table>
    <thead>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Father's Name</th>
        <th>Mother's Name</th>
        <th>DoB</th>
        <th>Action</th>
    </thead>
    <tbody>
<?php

while($fetched_data=mysqli_fetch_row($result)) {
    echo '<tr>';
    echo '<td>'.$fetched_data[1].'</td>';
    echo '<td>'.$fetched_data[2].'</td>';
    echo '<td>'.$fetched_data[3].'</td>';
    echo '<td>'.$fetched_data[4].'</td>';
    echo '<td>'.$fetched_data[6].'</td>';
    echo '<td><a href=edit.php?id='.$fetched_data[0].'>Edit</a></td>';
    echo '</tr>';
} 
?>
</tbody>
</table>



