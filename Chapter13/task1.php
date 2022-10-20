<?php
$sAnyText = "    https://example.com/?var=5     ";
$sAnyText = trim($sAnyText);
echo $sAnyText[2], "<br>";
if (strpos($sAnyText, "?") === false) echo strlen($sAnyText);
else {
    $sAnyText = str_replace("=", "!!!!!!", $sAnyText);
    $sAnyText = str_replace("?", "!!!!!!", $sAnyText);
}
echo ($sAnyText);