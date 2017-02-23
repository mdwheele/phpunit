<?php

class OtherStatusTest extends PHPUnit\Framework\TestCase
{
    /** @test */
    public function it_logically_fails()
    {
        $this->assertEquals("bork\nbar", "bubble");
    }

    /** @test */
    public function it_skips()
    {
        $this->markTestSkipped('With message.');
    }

    /** @test */
    public function its_risky()
    {
        $this->markAsRisky();
    }

    /** @test */
    public function it_incompletes()
    {
        $this->markTestIncomplete('With message.');
    }

    /** @test */
    public function it_notices()
    {
        $variable = $that_does_not_exist;
    }
}