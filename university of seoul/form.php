<?php
include("connection.php");
error_reporting(0);
?>

<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Create Account</title>

    <link rel="stylesheet" href="Style/style2.css">

</head>



<body>


    <div id="left">
        <img src="Required Images/uni_logo.png" alt="">
        <div >University of Korea</div>
    </div>


    <div id="right">
        <div id="loginblock">
            <form id="form">
                <h1 style="color: aliceblue;margin: auto;">Create&nbsp;Account</h1>

                <div class="inputcontrol">
                    <label for="username">Username</label>
                    <input id="username" name="username" type="text">
                    <div class="error"></div>
                </div>

                <div class="inputcontrol">
                    <label for="email">Email</label>
                    <input id="email" name="email" type="text">
                    <div class="error"></div>
                </div>

                <div class="inputcontrol">
                    <label for="password">Password</label>
                    <input id="password" name="password" type="password">
                    <div class="error"></div>
                </div>
                
                <div class="inputcontrol">
                    <label for="password">Confirm password</label>
                    <input id="password2" name="password2" type="password">
                    <div class="error"></div>
                </div>
                <button type="submit" name="submit">Create account</button>
                <span style="color: wheat;">Already have an account? <a href="MainLogin.html" style="color: lightblue;">Login&nbsp;here</a> </span>
            </form>     
        </div>  

    </div>

</body>

</html>

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