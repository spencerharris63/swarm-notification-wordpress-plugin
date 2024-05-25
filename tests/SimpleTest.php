// tests/SimpleTest.php
<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

use PHPUnit\Framework\TestCase;

class SimpleTest extends TestCase {
    public function testTrueAssertsToTrue() {
        $this->assertTrue(true);
    }
}
