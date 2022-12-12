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
    <li id="navigating"><a href="database.php">DATABASE</a></li>
</nav>      
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
    <br><input type="text" placeholder="name" name="name"><br>
    <br><input type="text" placeholder="email" name="email"><br>
    <br><input type="text" placeholder="message" name="message"><br>
    <br><input type="submit">
<?php
    $name => $_POST["name"]
    $email => $_POST["email"]
    $message => $_POST["message"]
    $sql = "INSERT INTO MyGuests (name,email,message)
VALUES ($name, $email, $message)";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
?>
</body>
</html>