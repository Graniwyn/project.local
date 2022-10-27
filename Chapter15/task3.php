<?php
for ($i = 0; $i < 10; $i++) {
    $a[] = rand(0, 15);
    echo $a[$i], " ";
}
echo "<br>";
echo min($a), " ", max($a);
