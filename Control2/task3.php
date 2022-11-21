<?php
class Vector
{
    public $vector, $vectorAdd;
    public function __construct($vectorArray)
    {
        $this->vector = $vectorArray;
    }
    public function add(Vector $x)
    {
        $this->vectorAdd = $x->vector;
        for ($i = 0; $i < count($this->vector); $i++)
        {
            $newVector[] = $this->vector[$i] + $this->vectorAdd[$i];
        }
        return new Vector($newVector);
    }
    public function scalarMyltiply(Vector $x)
    {
        $this->vectorAdd = $x->vector;
        $sum = 0;
        for ($i = 0; $i < count($this->vector); $i++)
        {
            $sum += $this->vector[$i] * $this->vectorAdd[$i];
            var_dump($sum);
        }
        return $sum;
    }
    static function getOne($n)
    {
        for ($i = 0; $i < $n; $i++)
        {
            $someArray[] = 1;
        }
        return new Vector($someArray);
    }
    static function getZero($n)
    {
        for ($i = 0; $i < $n; $i++)
        {
            $someArray[] = 0;
        }
        return new Vector($someArray);
    }
    function __toString()
    {
        $finalString = "(";
        foreach ($this->vector as $k => $v)
            if ($k === count($this->vector) - 1)
                $finalString .= $v . ")";
            else
                $finalString .= $v . ",";
        return $finalString;
    }
}
$a = new Vector([1, 3, -5]);
$b = new Vector([4, -2, -1]);
echo $a->add($b), "<br>";
echo $a->scalarMyltiply($b);
