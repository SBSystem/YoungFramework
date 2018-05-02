<?php

class testAsseration extends \PHPUnit_Framework_TestCase
{
    public function testTrueAsseration()
    {
        $this->assertTrue(true);
    }
    public function testFalseAsseration()
    {
        $this->assertFalse(false);
    }
}
