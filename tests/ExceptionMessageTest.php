<?php

namespace Something\Really\Deep {
    class LongException extends \Exception {}
}

namespace {
    use Something\Really\Deep\LongException;

    class ExceptionMessageTest extends PHPUnit\Framework\TestCase
    {
        /** @test */
        public function it_asserts_true()
        {
            throw new LongException('Error message should show up.');
        }
    }
}
