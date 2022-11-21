<?php
require_once('users.php');
session_start();
$cUsers = new Users;
var_dump($_POST);
var_dump($_SESSION);
if (!empty($_POST))
{
    if ((empty($_POST['name']) or empty($_POST['password'] or empty($_POST['captcha'])) or ($_POST['captcha'] != $_SESSION['capch'])))
    {
        //unset($_POST);
        $_POST = [];
        echo "Не все поля заполнены или неверно введён код с картинки";
    }
    elseif (!empty($_POST['name']) and !empty($_POST['password'] and !empty($_POST['captcha'])) and $_POST['captcha'] == $_SESSION['capch'])
    {
        $cUsers->registration($_POST['name'], $_POST['password']);
        echo "Данные записаны";
        $_POST = [];
        //unset($_POST);
    }
}
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="reg.php" method="POST">
        Имя <input type="text" required name="name">
        <br>
        Пароль <input type="password" required name="password">
        <br>

        <img src="capcha.php" border="0">
        <br>
        Код с картинки <input type="text" required name="captcha">
        <br>
        <input type="submit" value="Отправить">
</body>

</html>