<?php

use PHPUnit\Framework\TestCase;

class AssertTrueFalse extends TestCase
{
    public function testTrue()
    {
        $true = True;
        $this->assertTrue(
            $true,
            $true . " should be True"
        );
    }
}