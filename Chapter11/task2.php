<?php
$iGlobalPositiveNumber = 2;
function test()
{
    global $iGlobalPositiveNumber;
    for ($i = 1, $sum = 0; $i <= $iGlobalPositiveNumber; $i++) {
        $sum += $i;
    }
    return $sum;
}
