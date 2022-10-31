<?php
$matrix = [
    [1, 2, 3, 4],
    [5, 6, 7, 8],
    [9, 10, 11, 12],
    [13, 14, 15, 16]
];
for ($i = 0; $i < count($matrix); $i++) {

    for ($j = 0; $j < count($matrix); $j++) {
        $newMatrix[$j][$i] = $matrix[$i][$j];
    }
}


for ($i = 0; $i < count($newMatrix); $i++) {
    echo "<br>";
    for ($j = 0; $j < count($newMatrix); $j++) {
        echo $newMatrix[$i][$j], " ";
    }
}
