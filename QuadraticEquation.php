<?php

class QuadraticEquation
{
    protected $a;
    protected $b;
    protected $c;

    protected function _construct($a, $b, $c)
    {
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;
    }

    protected function delta()
    {
        return pow($this->b, 2) - 4 * $this->a * $this->c;
    }

    protected function giai()
    {
        if ($this->delta() < 0)
            echo "Phuong trinh vo nghiem";
        elseif ($this->delta() == 0)
            echo "Nghiem kep: x<sub>1</sub>=x<sub>2</sub>=" . -$this->b / (2 * $this->a);
        else {
            $x1 = (-$this->b - sqrt($this->delta())) / (2 * $this->a);
            $x2 = (-$this->b + sqrt($this->delta())) / (2 * $this->a);
            echo "Phuong trinh co 2 nghiem phan biet: ";
            echo "x<sub>1</sub>=$x1" . "x<sub>2</sub>=$x2";
        }
    }

}

