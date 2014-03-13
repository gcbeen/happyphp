<?php

namespace spec;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;
use App\Config\app;

class UserSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('User');
    }
}
