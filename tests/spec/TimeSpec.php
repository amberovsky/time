<?php declare(strict_types=1);

namespace spec\Amberovsky\Time;

use PhpSpec\ObjectBehavior;

class TimeSpec extends ObjectBehavior {
    public function it_freezes_and_unfreezes_time() {
        $this->freeze(1);
        $this->getTimestamp()->shouldReturn(1);

        $this->unfreeze();
        $this->getTimestamp()->shouldNotReturn(1);
    }
}
