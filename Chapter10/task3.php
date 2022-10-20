<?php
$someString = "5;9;1;aa;3;ab;1;3;;;ccccc;0";
$newString = "";
for ($i = 0; $i < strlen($someString); $i++) {
    if (is_numeric($someString[$i])) $newString .= $someString[$i];
}
