<?php
$someString = "81234565678;8912345678;84951224578;79101234567;85739320987;74951234567;81112223344;";
$stringArray = explode(";", $someString, -1);
foreach ($stringArray as $v) {
    if ($v[0] === "7") $v[0] = "8";
    $someArray[] = $v[0] . " " . "(" . substr($v, 1, 3) . ")" . " " . substr($v, 4, 3) . "-" . substr($v, 7, 2) . "-" . substr($v, 9, 2);
}
var_dump($someArray);
