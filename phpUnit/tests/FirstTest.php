<?php
use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../calculator.php'; // Esto es necesario para cargar la clase Calculator

class FirstTest extends TestCase {
    public function testAdd() {
        $calculator = new Calculator(); // Ahora PHPUnit puede encontrar la clase

        $result = $calculator->add(2, 3);
        $this->assertEquals(5, $result);
    }
}