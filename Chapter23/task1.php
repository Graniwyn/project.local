<?php
abstract class MathElement
{
    abstract public function add($x);
}
class Polynom extends MathElement
{
    public $pows, $coeffs, $s1;
    function __construct($pows, $coeffs)
    {
        $this->pows = $pows;
        $this->coeffs = $coeffs;
    }
    function add($x)
    {
        $this->xpows = $x->pows;
        $this->xcoeffs = $x->coeffs;
        if (!($x instanceof MathElement))
            die("Невозможно выполнить сложение.<br>");
        else {
            for ($i = 0; $i < count($this->xcoeffs); $i++) {
                if (is_object($this->coeffs[$i]) and is_object($this->xcoeffs[$i])) {
                    $this->coeffs[$i]->RE += $this->xcoeffs[$i]->RE;
                    $this->coeffs[$i]->IM += $this->xcoeffs[$i]->IM;
                } elseif (is_object($this->coeffs[$i]) and is_numeric($this->xcoeffs[$i])) {
                    $this->coeffs[$i]->RE += $this->xcoeffs[$i];
                } elseif (is_numeric($this->coeffs[$i]) and is_object($this->xcoeffs[$i])) {
                    $this->coeffs[$i] = new Complex($this->coeffs[$i] + $this->xcoeffs[$i]->RE, $this->xcoeffs[$i]->IM);
                } else
                    $this->coeffs[$i] += $this->xcoeffs[$i];
            }
        }
        return new Polynom($this->pows, $this->coeffs);
    }

    function __toString()
    {
        for ($i = 0; $i < count($this->coeffs); $i++) {
            if ($this->coeffs[$i] === 0)
                continue;
            else {
                $this->s1 .= "+";
                if ($i === count($this->coeffs) - 1) {
                    $this->s1 .= "{$this->coeffs[$i]}";
                    break;
                } else {
                    if (is_object($this->coeffs[$i])) {
                        $this->s1 .= $this->coeffs[$i];
                        $this->s1 .= "x^{$this->pows[$i]}";
                    } elseif (is_numeric($this->coeffs[$i])) {
                        $this->s1 .= $this->coeffs[$i];
                        $this->s1 .= "x^{$this->pows[$i]}";
                    }
                }
            }
        }
        $this->s1 = substr($this->s1, 1);
        return $this->s1;
    }
}
class Complex extends MathElement
{
    public $IM, $RE;
    function __construct($RE, $IM)
    {
        $this->IM = $IM;
        $this->RE = $RE;
    }
    function add($x)
    {
        //parent::add($x);
        $this->x = $x;
        if (!($x instanceof MathElement)) {
            die("Невозможно выполнить сложение.<br>");
        } else {
            return $this->RE + $this->x . "+" . $this->IM . "i";
        }
    }
    function __toString()
    {
        return "(" . $this->RE . "+" . $this->IM . "i" . ")";
    }
}
class RealNumber extends MathElement
{
    public $value;
    function __construct($value)
    {
        $this->value = $value;
    }
    function add($x)
    {
    }
    function __toString()
    {
        return $this->value;
    }
}
$pol1 = new Polynom([2, 1, 0], [23, new Complex(-1, 9), 8]);
$pol2 = new Polynom([2, 1, 0], [new Complex(2, 4), 9, 0]);
$complex = new Polynom([0, 0, 0], [0, 0, new Complex(98, 13)]);
$sum = $pol1->add($pol2);
$sum = $sum->add($complex);
echo $sum;
