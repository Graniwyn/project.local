<?php
$keys = array_keys($_SERVER);
foreach ($keys as $key) echo $key, "<br>";
$values = array_values($_SERVER);
foreach ($values as $value) echo $value, "<br>";
