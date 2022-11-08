<?php
require_once(__DIR__ . "/vedita/printStr.php");
require_once(__DIR__ . "/vedita/functions/math/Arithmetic.php");
vedita\printStr('Test');
$a = new vedita\functions\math\Arithmetic;
$b = $a->add(2, 3);
