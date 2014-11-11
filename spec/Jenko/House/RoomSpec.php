<?php

namespace spec\Jenko\House;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class RoomSpec extends ObjectBehavior
{
    function let()
    {
        $this->beConstructedThrough('named', ['hallway']);
    }

    function it_is_initializable()
    {
        $this->shouldHaveType('Jenko\House\Room');
        $this->shouldHaveType('Jenko\House\Location');
    }

    function it_should_be_created_with_a_name()
    {
        $garden = self::named('living room');
        $garden->shouldHaveType('Jenko\House\Room');
        $garden->getName()->shouldEqual('living room');
    }
}
