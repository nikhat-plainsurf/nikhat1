<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "123";
$dbname = "info";

//create connection
$conn = new mysqli($servername, $username, $password, $dbname);

//check connection
if ($conn->connect_error) {
    die("Connection Failed" . $conn->connect_error);
}
echo 'connection Successfull ';
$sql="delete FROM contact WHERE id='$_GET[id]'";
if(mysqli_query($conn,$sql)){
    
    header("refresh:1;url=con_list.php");
}
 else {
    echo "not deleted";
    
}
?>