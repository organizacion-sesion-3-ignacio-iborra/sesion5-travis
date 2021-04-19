<?php
use PHPUnit\Framework\TestCase;
require 'EvenNumber.php';

class EvenNumberTest extends TestCase
{
    private $evenNumber;
 
    protected function setUp(): void
    {
        $this->evenNumber = new EvenNumber();
    }
 
    protected function tearDown(): void
    {
        $this->evenNumber = NULL;
    }
 
    public function testCheck(): void
    {
        $this->assertTrue($this->evenNumber->check(4));
        $this->assertFalse($this->evenNumber->check(7));
        $this->assertTrue($this->evenNumber->check(28));
        $this->assertTrue($this->evenNumber->check(1841));
    }
}
