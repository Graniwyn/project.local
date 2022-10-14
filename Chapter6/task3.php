<?php
$sTwentyFiveWithSpace = "25 ";
$dEightPointTwentyFiveHundredths = 8.25;
$sEmptyString = "";
$bFalse = false;
$iZero = 0;


$sTwentyFiveWithSpace =(bool)$sTwentyFiveWithSpace;
$dEightPointTwentyFiveHundredths=(bool)$dEightPointTwentyFiveHundredths;
$sEmptyString =(bool)$sEmptyString;
$bFalse=(bool)$bFalse;
$iZero=(bool)$iZero;
var_dump($sTwentyFiveWithSpace,$dEightPointTwentyFiveHundredths,$sEmptyString,$bFalse,$iZero);
$iZero=(int)$iZero;
var_dump ($iZero);

