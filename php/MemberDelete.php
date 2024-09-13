<?php
$id=$_POST['nic'];
$servername = "localhost";
$username = "root";
$password = "12345";
$database = "job_post";

// Create connection
$dbconn = new mysqli($servername, $username, $password, $database);

// Check connection
if (!$dbconn) {
    die("Connection failed: " . $dbconn->connect_error);
}
$query = "Delete  from memberapproval where nic='$id'";

$result=$dbconn->query($query);
if ($result==1){
    echo "Successfully Deleted";
}
?>