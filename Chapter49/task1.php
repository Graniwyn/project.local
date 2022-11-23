<?php
$numbersArray = [['404', '131'], ['789', '061']];
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
