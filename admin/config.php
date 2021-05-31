<?php 

$dbServername = "localhost";
$dbUsername = "shivangicalories_db";
$dbPassword = "Manan@143#";
$dbName = "shivangicalories_db";

// create connection
$conn = new mysqli($dbServername,$dbUsername,$dbPassword,$dbName);
// check connection
if($conn -> connect_error) {
    die("connection failed:".$conn->connect_error);
}
?>
