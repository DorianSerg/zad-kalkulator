<?php

namespace bartuuus\Tools;

class Kalkulator
{

    public function setA($a)
    {
        $this->a = $a;

        return $this;
    }

    public function getA()
    {
        return $this->a;
    }

    public function setB($b)
    {
        $this->b = $b;

        return $this;
    }

    public function getB()
    {
        return $this->b;
    }

    public function sum()
    {
        return $this->a + $this->b;
    }
}
