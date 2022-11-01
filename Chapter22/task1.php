<?php
class rectangle
{
    private $length, $width;

    function __construct($length = 2, $width = 1)
    {
        $this->length = $length;
        $this->width = $width;
    }

    function getArea()
    {
        return $this->length * $this->width;
    }

    function setLength($num)
    {
        $this->length = $num;
    }

    function setWidth($num)
    {
        $this->width = $num;
    }

    function __toString()
    {
        return "Прямоугольник с длинной {$this->length} и шириной {$this->width}";
    }
}
$obFirstRectangleVariable = new rectangle();
$obSecondRectangleVariable = $obFirstRectangleVariable;
$obThirdRectangleVariable = clone $obFirstRectangleVariable;
$obFirstRectangleVariable->setLength(7);
$obThirdRectangleVariable->setLength(8);
echo $obFirstRectangleVariable, "<br>";
echo $obSecondRectangleVariable, "<br>";
echo $obThirdRectangleVariable;
