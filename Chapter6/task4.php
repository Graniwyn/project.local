<?php
$iTwentyFive = 25;
$iHardLinkToAnotherVariable=&$iTwentyFive;
$iHardLinkToAnotherVariable=3;
echo("$iTwentyFive $iHardLinkToAnotherVariable");