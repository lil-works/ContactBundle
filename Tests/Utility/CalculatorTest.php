<?php
namespace LilWorks\ContactBundle\Tests\Utility;

use LilWorks\ContactBundle\Utility\Calculator;
use PHPUnit\Framework\TestCase;

class CalculatorTest extends TestCase
{
    public function testAdd()
    {
        $calc = new Calculator();
        $result = $calc->add(30, 12);

        // assert that your calculator added the numbers correctly!
        $this->assertEquals(42, $result);

    }
}