<?php
function factorial($num)
{
    if ($num === 1) debug_print_backtrace();
    if ($num <= 0) return 1;
    else
        return factorial($num - 1) * $num;
}
echo factorial(4);
