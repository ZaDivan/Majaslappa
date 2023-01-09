<!DOCTYPE html>
<html lang="en">
<?php
//connection
include 'db.php';
$conn = OpenCon();
echo "Connected Successfully";
CloseCon($conn);
?>
<head>
    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<nav>
    <li id="navigating"><a href="index.php">HOME</a></li>
    <li id="navigating"><a href="about.php">ABOUT</a></li>
    <li id="navigating"><a href="contact.php">CONTACT</a></li>
    <li id="navigating"><a href="https://github.com/ZaDivan/Majaslappa" target="_blank".>GITHUB</a></li>
</nav>    
    <h1 id="logo">Ivans Sadovnikovs</h1>
</body>
</html>