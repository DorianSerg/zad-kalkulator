<?php

namespace spec\DorianSerg\Tools;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class PolekwadratuSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('DorianSerg\Tools\Polekwadratu');
    }
}
