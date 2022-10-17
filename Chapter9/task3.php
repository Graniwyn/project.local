<?php
for($i=0;$i<5;$i++) $a[]=rand(5,15);
var_dump($a);
$iSumOfNumbers=0;
foreach($a as $key=>$value){
    if ($value===15){
        echo $key,"<br>";
        echo "В массиве найдено число 15 <br>";
        break;
    } elseif ($value<8){
        echo $value," ",$key,"<br>";
        echo "Найдено число меньше 8 <br>";
    } else {
        $iSumOfNumbers+=$value;

    }
}
echo $iSumOfNumbers;