<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IV&TP</title>
    <link href="style.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<body>
    <div class="navbar">
        <div id="logo">
            <img src="./images/logo.png" alt="IV&TP.com">
        </div>
        <a href="index.php">Home</a>
        <div class="dropdown">
            <button class="dropbtn">Destination
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
                <a href="nagpur.html">Nagpur</a>
                <a href="aurangabad.html">Aurangabad</a>
                <a href="pune.html">Pune</a>
            </div>
        </div>
        <a href="#aboutus">About Us</a>
        <a href="contact.php">Contact Us</a>
        <a href="logout.php">Logout</a>
    </div>
    </body>
    </html>
<?php
include("connect.php");

extract($_POST);
$query = "INSERT INTO `contact-data` (`firstname`,`lastname`,`phone`,`email`,`messages`) VALUES ('".$firstname."','".$lastname."','".$phone."','".$email."','".$message."')";
$result = $mysqli->query($query);
if(!$result){
    echo "Something Went Wrong".$mysqli->error;
}
echo "Thanks You For Submitting Your Query";
$mysqli->close();


?>