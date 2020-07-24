<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "demo1");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$emp_no = mysqli_real_escape_string($link, $_REQUEST['emp_no']);
$name = mysqli_real_escape_string($link, $_REQUEST['name']);
$dept_id = mysqli_real_escape_string($link, $_REQUEST['dept_id']);
$emp_grade = mysqli_real_escape_string($link, $_REQUEST['emp_grade']);
$contact_no = mysqli_real_escape_string($link, $_REQUEST['contact_no']);
$manager_id = mysqli_real_escape_string($link, $_REQUEST['manager_id']);
 
// Attempt insert query execution
$sql = "INSERT INTO employee1 (emp_no, name, dept_id, emp_grade, contact_no, manager_id) VALUES ('$emp_no', '$name', '$dept_id', '$emp_grade', '$contact_no', '$manager_id')";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>