<?php
//$splitString = str_split($someString = '404131131404789061061789');
$numbersArray = [['404', '131'], ['789', '061']];
//foreach ($splitString as $char)
ob_start();
function printNumber($iNumber)
{
    echo $iNumber;
}

function printSpace()
{
    echo " ";
}
$countOfBlocks = 3;
for ($counterBlocks = 0; $counterBlocks < $countOfBlocks; $counterBlocks++)
{

    if ($counterBlocks == $countOfBlocks - 1)
    {
        printNumber($numbersArray[0][0]);
        printSpace();
        printNumber($numbersArray[0][1]);
        printSpace();
        printNumber($numbersArray[0][1]);
        printSpace();
        printNumber($numbersArray[0][0]);
    }
    else
    {
        for ($blocks = 0; $blocks < count($numbersArray); $blocks++)

        {

            printNumber($numbersArray[$blocks][0]);
            printSpace();
            printNumber($numbersArray[$blocks][1]);
            printSpace();
            printNumber($numbersArray[$blocks][1]);
            printSpace();
            printNumber($numbersArray[$blocks][0]);
            printSpace();
        }
        printSpace();
    }
}
$finalString = ob_get_contents();
