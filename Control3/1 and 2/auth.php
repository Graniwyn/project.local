<?php
require_once('users.php');
session_start();
$cUsers = new Users;
var_dump($_SESSION);
if (isset($_SESSION['userid']))
    echo "Вы успешно авторизованы";
else
    if (!empty($_POST))
{
    if (empty($_POST['name']) or empty($_POST['password']) or empty($_POST['captcha']))
    {
        echo "Не все поля заполнены";
        unset($_POST);
    }
    elseif (!empty($_POST['name']) and !empty($_POST['password']) and !empty($_POST['captcha']))
    {
        if ($_POST['captcha'] != $_SESSION['capch'])
        {
            echo "Неправильно введён код с картинки";
            unset($_POST);
        }
        elseif ($_POST['captcha'] == $_SESSION['capch'])
            if (!($cUsers->findUser($_POST['name'])))
                echo "Нет такого пользователя";
            elseif ($cUsers->checkUserPassword($_POST['name'], $_POST['password']))
            {
                $_SESSION['userid'] = $cUsers->getUser($_POST['name'], $_POST['password'])['id'];
                echo "Вы успешно авторизованы";
            }
            else
                echo "Пароль неверный";
    }
}
elseif (!empty($_POST['name']) and !empty($_POST['password']) and $_POST['captcha'] == $_SESSION['capch'])
{
    $cUsers->registration($_POST['name'], $_POST['password']);
    echo "Данные записаны";
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
    <form action="auth.php" method="POST">
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