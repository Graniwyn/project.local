<?php
function test()
{
    static $i = 0;
    $a = ["test1", "test2", "test3", "test4", "test5"];
    if ($i >= count($a)) $i = 0;
    else {
        echo $a[$i], "<br>";
        $i++;
    }
}
