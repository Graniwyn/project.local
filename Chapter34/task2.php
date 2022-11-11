<?php
if ($_GET['MODE'] === "1") {
    session_save_path('FIRST_COUNTER');
    session_start();
    if (!isset($_SESSION['COUNTER']))
        $_SESSION['COUNTER'] = 0;
    else
        $_SESSION['COUNTER'] += 1;
} elseif ($_GET['MODE'] === "2") {
    session_save_path('SECOND_COUNTER');
    session_start();
    if (!isset($_SESSION['COUNTER']))
        $_SESSION['COUNTER'] = 0;
    else
        $_SESSION['COUNTER'] += 1;
}
echo session_id(), " ", session_name(), " ", session_save_path();
if (isset($_GET['DELETE_SESSION_DATA']) and $_GET['DELETE_SESSION_DATA'] === "Y") {
    $_SESSION = [];
    unset($_COOKIE[session_name()]);
    session_destroy();
}
