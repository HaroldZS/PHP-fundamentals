<?php
use PHPUnit\Framework\TestCase;

// php vendor/bin/phpunit tests/FirstTest.php
// php vendor/bin/phpunit --testdox tests/FirstTest.php

require_once __DIR__ . '/../Calculator.php'; // Esto es necesario para cargar la clase Calculator

class FirstTest extends TestCase {
    public function testAdd() {
        $calculator = new Calculator(); // Ahora PHPUnit puede encontrar la clase

        $result = $calculator->add(2, 3);
        $this->assertEquals(5, $result);
    }
}