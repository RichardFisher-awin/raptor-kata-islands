<?php

namespace spec\Kata\Service;

use Kata\Service\IslandCounter;
use PhpSpec\ObjectBehavior;

class IslandCounterSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(IslandCounter::class);
    }

    function it_can_count_example_one()
    {
        $map = [
            [1, 1],
            [0, 1]
        ];
        $this->countIslands($map)->shouldBe(1);
    }

    function it_can_count_example_two()
    {
        $map = [
            [1, 0],
            [0, 1]
        ];
        $this->countIslands($map)->shouldBe(2);
    }

    function it_can_count_example_three()
    {
        $map = [
            [1, 1, 1, 1, 0],
            [1, 1, 0, 1, 0],
            [1, 1, 0, 0, 0],
            [0, 0, 0, 0, 0]
        ];
        $this->countIslands($map)->shouldBe(1);
    }

    function it_can_count_example_four()
    {
        $map = [
            [1, 1, 0, 0, 0],
            [1, 1, 0, 0, 0],
            [0, 0, 1, 0, 0],
            [0, 0, 0, 1, 1]
        ];
        $this->countIslands($map)->shouldBe(3);
    }

  function it_can_count_example_five()
    {
        $map = [
            [1, 1, 1, 1, 1],
            [1, 0, 0, 0, 1],
            [1, 0, 1, 0, 1],
            [1, 0, 0, 0, 1],
	    [1, 1, 1, 1, 1]
        ];
        $this->countIslands($map)->shouldBe(2);
    }

  function it_can_count_example_six()
    {
        $map = [
            [1, 0, 1],
            [0, 1, 0],
            [1, 0, 1]
        ];
        $this->countIslands($map)->shouldBe(5);
    }

  function it_can_count_example_seven()
    {
        $map = [
            [1, 0, 0, 0, 0],
            [1, 1, 0, 0, 0],
            [1, 1, 1, 0, 1],
            [0, 0, 0, 1, 1],
            [0, 0, 1, 1, 1]
        ];
        $this->countIslands($map)->shouldBe(2);
    }

function it_can_count_example_eight()
    {
        $map = [
            [0, 0, 0, 0, 0],
            [1, 1, 1, 1, 1],
            [0, 0, 0, 0, 0],
            [1, 1, 0, 1, 1],
            [0, 0, 0, 0, 0]
        ];
        $this->countIslands($map)->shouldBe(3);
    }

function it_can_count_example_nine()
    {
        $map = [
            [1, 1, 1, 1, 1],
            [1, 1, 0, 1, 1],
            [1, 0, 0, 0, 1],
            [1, 1, 0, 1, 1],
            [1, 1, 1, 1, 1]
        ];
        $this->countIslands($map)->shouldBe(1);
    }

function it_can_count_example_ten()
    {
        $map = [
            [0, 0, 0, 0, 0],
            [1, 1, 1, 1, 1],
            [0, 1, 0, 1, 0],
            [1, 1, 0, 1, 1],
            [1, 0, 0, 0, 1]
        ];
        $this->countIslands($map)->shouldBe(1);
    }
}
