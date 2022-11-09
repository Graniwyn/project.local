<?php
class RecursionException extends Exception
{
    function __construct()
    {
        Exception::__construct("Рекурсия сломалась!");
    }
    function factorial($num)
    {
        if ($num === 1)
            throw new RecursionException();
        if ($num <= 0) return 1;
        else
            return $this->factorial($num - 1) * $num;
    }
}
$a = new RecursionException;
try {

    $a->factorial(3);
} catch (RecursionException $e) {
    echo get_class($e), "<br>";
    echo $e, "<br>";
    echo $e->getFile() . " " . $e->getLine();
}
