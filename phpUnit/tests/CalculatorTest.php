<?php

use PHPUnit\Framework\TestCase;

// php vendor/bin/phpunit tests/CalculatorTest.php
// php vendor/bin/phpunit --testdox tests/CalculatorTest.php

require_once __DIR__ . '/../Calculator.php';

class CalculatorTest extends TestCase
{
    public function testAddWillReturnTheSumOfItsParameters()
    {
        $sut = new Calculator(); // Subject under test

        $this->assertEquals(8, $sut->add(5, 3));
        $this->assertEquals(5, $sut->add(5, 0));
    }
}