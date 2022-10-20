<?php
$a = serialize($_SERVER);
echo $a, "<br>";
$a = unserialize($a);
foreach ($a as $k => $v) echo "$k:$v <br>";