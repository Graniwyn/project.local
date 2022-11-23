<?php
function doHardWorkBySteps($iStepNumber)
{
    sleep(15);

    file_put_contents(
        'messages.log',
        date("d.m.Y H:i:s") . " " . "Успешно закончен шаг номер " . $iStepNumber . "\n\n",
        FILE_APPEND
    );

    if ($iStepNumber > 15)
    {
        return true;
    }
    else
    {
        return false;
    }
}
session_start();
if (!isset($_SESSION['counter']))
    $_SESSION['counter'] = 1;

if (doHardWorkBySteps($_SESSION['counter']))
    echo "True";
else
{
    $_SESSION['counter']++;
    //header("Status: 200 OK");
    $dir = dirname($_SERVER['SCRIPT_NAME']);
    if ($dir == '\\') $dir = '';
    //var_dump($dir . "/task2(2).php");
    header("Location: {$dir}/task2(2).php");
    exit;
}
