<?php

namespace spec\mrskowron\Tools;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class mnozenieSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('mrskowron\Tools\mnozenie');
    }
}
