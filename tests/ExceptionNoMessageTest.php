<?php

class ExceptionNoMessageTest extends PHPUnit\Framework\TestCase
{
    /** @test */
    public function it_asserts_true()
    {
       throw new Exception;
    }
}