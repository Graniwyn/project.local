<?php
function test(float $a, float $b, float &$c = 0): float
{
    echo $c = $a + $b, "<br>";
    return $a * $b;
}

echo test(1.3, 2.5);
