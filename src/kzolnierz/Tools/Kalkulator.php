<?php

namespace kzolnierz\Tools;

class Kalkulator
{

    private $a;
    private $b;

    public function setA($a)
    {
        $this->a = $a;

        return $this;
    }

    public function setB($b)
    {
        $this->b = $b;

        return $this;
    }

    public function getA()
    {
        return $this->a;
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
