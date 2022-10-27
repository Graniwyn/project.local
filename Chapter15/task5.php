<?php
function math($x)
{
    static $sum = 0;
    $result = pow(sin(M_PI * $x * exp(pow($x, 2))), 2) - (0.5 * pow($x, 0.5));
    $sum += $result;
    return $sum;
}
$a = math(0);
$a = math(0.5);
$a = math(0.7);
echo $a;
