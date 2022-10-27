<?php
for ($i = 0; $i < 10; $i++) {
    $a[] = rand(0, 15);
    echo $a[$i], " ";
}
echo "<br>";
for ($i = 0; $i < 10; $i++) {
    $b[] = rand(2, 15);
    echo $b[$i], " ";
}
echo "<br>";
$c = array_merge($a, $b);
foreach ($c as $v) echo $v, " ";
echo "<br>";
if (in_array(0, $c))
    echo "В массиве содержится число 0";
else
    echo "В массиве не содержится число 0";

array_splice($c, 4, 11);
echo "<br>";
foreach ($c as $v) echo $v, " ";
