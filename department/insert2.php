<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "demo1");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$dept_id = mysqli_real_escape_string($link, $_REQUEST['dept_id']);
$dept_desc = mysqli_real_escape_string($link, $_REQUEST['dept_desc']);
// Attempt insert query execution
$sql = "INSERT INTO department (dept_id, dept_desc) VALUES ('$dept_id', '$dept_desc')";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>