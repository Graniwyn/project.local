<?php
$a = log(0);
echo $a, "<br>";
echo ((is_nan($a) or is_infinite($a)) ? "Является<br>" : "Не является<br>");
$b = log(0, 10) + log(-1, 10);
echo $b, "<br>";
echo ((is_nan($b) or is_infinite($b)) ? "Является" : "Не является");
