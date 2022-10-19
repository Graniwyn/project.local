<?php
$arArrayOfArrays = [
    [1, -2, 0, 3],
    [-2, 5, -7],
    [3],
    [0, 0, -1],
];

for ($i = 0; $i < count($arArrayOfArrays) - 1; $i++) {
    for ($j = 0; $j < count($arArrayOfArrays) - 1; $j++) {
        $sum = array_sum($arArrayOfArrays[$j]);
        $sum1 = array_sum($arArrayOfArrays[$j + 1]);
        if ($sum > $sum1) {
            $temp = $arArrayOfArrays[$j];
            $arArrayOfArrays[$j] = $arArrayOfArrays[$j + 1];
            $arArrayOfArrays[$j + 1] = $temp;
        }
    }
}
var_dump($arArrayOfArrays);
