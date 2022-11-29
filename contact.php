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
    <br><input type="text" placeholder="name" name="name"><br>
    <br><input type="text" placeholder="email" name="email"><br>
    <br><input type="text" placeholder="message" name="message"><br>
    <br><input type="submit">
</body>
</html>
<?php
require 'vendor/autoload.php';

use Mailjet\Client;
use \Mailjet\Resources;
$mj = new Client('****************************1234','****************************abcd',true,['version' => 'v3.1']);
$body = [
    'Messages' => [
        [
            'From' => [
                'Email' => $_POST["email"],
                'Name' => $_POST["name"]
            ],
            'To' => [
                [
                    'Email' => "ivansadovnikov44@gmail.com",
                    'Name' => "ZaDivan"
                ]
            ],
            'Subject' => "MajasLappa",
            'TextPart' => $_POST["message"],
            'CustomID' => "AppGettingStartedTest"
        ]
    ]
];
if(isset($_POST)) {
    $response = $mj->post(Resources::$Email, ['body' => $body]);

    $response->success() && var_dump($response->getData());
}
else{
    echo "meginiet velreiz";
}
?>