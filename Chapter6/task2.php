<?php
$variable=3;
if (isset($variable))
    echo "Переменная есть"."<br>";

unset($variable);

if (isset($variable))
    echo "Переменная есть";
else 
    echo "Переменной нет"."<br>";


define("CONSTANT",777);
echo CONSTANT;
var_dump(defined('CONSTANT'));
var_dump(defined('NOT_DEFINED_CONSTANT'));