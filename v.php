<?php

$name = $_POST["name"];
$usertele = $_POST["user"];
$messagee = $_POST["message"];

$API_KEY = "5332779790:AAF1VfauHnzQnkEs5qDolLTEzNwON4fsSHY"; //توكن
$admin = 5012751368 ; //ايديك

$text = urlencode("
name : $name
°°°°°°°°°°°°°°°°
user tele : $usertele
°°°°°°°°°°°°°°°°
text :

$messagee
");

$url = "https://api.telegram.org/bot".$API_KEY."/sendMessage?chat_id=$admin&text=$text&parse_mode=markdown";
file_get_contents($url);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo $name; ?></title>
</head>
<link rel="stylesheet" href="bv.css">
<body>
        <h1 class="hhii">Done <br> bro  : <?php echo $name; ?></h1>
</body>
</html>