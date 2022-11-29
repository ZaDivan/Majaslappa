<!DOCTYPE html>
<html lang="en">
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
<h1 id="logo">Contact </h1>
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
    <input type="text" placeholder="name" name="1lauks">
    <input type="text" placeholder="message" name="2lauks">
    <input type="text" placeholder="email" name="3lauks">
    <input type="submit">
</body>
</html>
<?php
$to = 'ivansadovnikov44@gmail.com';
$subject = $_POST["1lauks"];
$message = $_POST["2lauks"];
$from = $_POST["3lauks"];

if(mail($to, $subject, $message) !== null){
    echo 'Your mail has been sent successfully.';
    } else {
        echo "meginiet velreiz";
    }
?>