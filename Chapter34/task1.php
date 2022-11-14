<?php
if (!isset($_GET['MODE']))
    echo "Ошибка! Передано некорректное значение GET параметра MODE";
else
{

    if ($_GET['MODE'] === "1")
    {
        session_name('FIRST_COUNTER');
        session_start();
        if (!isset($_SESSION['COUNTER']))
            $_SESSION['COUNTER'] = 0;
        else
            $_SESSION['COUNTER']++;
        echo session_id(), " ", session_name(), " ", session_save_path();
    }
    elseif ($_GET['MODE'] === "2")
    {
        session_name('SECOND_COUNTER');
        session_start();
        if (!isset($_SESSION['COUNTER']))
            $_SESSION['COUNTER'] = 0;
        else
            $_SESSION['COUNTER']++;
        echo session_id(), " ", session_name(), " ", session_save_path();
    }
    else
        echo "Ошибка! Передано некорректное значение GET параметра MODE";
    if (isset($_GET['DELETE_SESSION_DATA']) and $_GET['DELETE_SESSION_DATA'] === "Y")
    {
        $_SESSION = [];
        unset($_COOKIE[session_name()]);
        session_destroy();
    }
}
