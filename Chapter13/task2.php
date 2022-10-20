<?php
$phoneNumber = "84950102030";
function formatNumber($n)
{
    $n = $n[0] . " " . "(" . substr($n, 1, 3) . ")" . " " . substr($n, 4, 3) . "-" . substr($n, 7, 2) . "-" . substr($n, 9, 2);
    return $n;
}
$phoneNumber = formatNumber($phoneNumber);