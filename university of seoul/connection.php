<?php

$servername="localhost";
$username="root";
$password="SpS=56l";
$dbname="user";

$conn = mysqli_connect($servername,$username,$password,$dbname);

if($conn){
    // echo "Connected successfully";
}
else{
    echo "Connection failed!".mysqli_connect_error();
}


?>