<?php

$servername="localhost";
$username="root";
$password="123";
$dbname="info";
$conn=new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error){
die("Connection failed:" .$conn->connect_error);
}
echo"Connected sucessfully";
$fname=$_POST["fname"];
$lname=$_POST["lname"];
$email=$_POST["email"];
$mobile=$_POST["mobile"];
$message=$_POST["message"];
$message=$_POST["opt"];

$sql = "INSERT INTO contact (fname,lname,email,mobile,message,opt) VALUES ('$fname','$lname','$email','$mobile','$message','$opt')";
if (!mysqli_query($conn,$sql)){
    echo'Inserted';
} 
else {
    echo 'not inserted';   
}
header('location:/contact.php',301);
        
?>


