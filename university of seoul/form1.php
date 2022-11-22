<?php
include("connection.php");
error_reporting(0);
?>




<!-- //Form will come -->







<?php

$name = $_GET['username'];
$email = $_GET['email'];
$password = $_GET['password'];
$conpassword = $_GET['password2'];

$query = "INSERT INTO userdata values('$name',' $email','$password','$conpassword')";

$data = mysqli_query($conn,$query);

if($data){
    // echo "Data Inserted into database";
}
else{
    echo "Data Insertion failed!";
}

?>