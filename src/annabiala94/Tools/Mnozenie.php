<?php

namespace annabiala94\Tools;

class Mnozenie
{
    private $a;
    private $b;
    private $c;
    private $d;

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
    
     public function setD($d)
    {
        $this->d = $d;

        return $this;
    }

    public function setC($c)
    {
        $this->c = $c;

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
    
    public function getC()
    {
        return $this->c;
    }

    public function getD()
    {
        return $this->d;
    } 
    

    public function mnozenie()
    {
        return $this->a * $this->b * $this->c * $this->d;
    }
}
