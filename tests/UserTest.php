<?php
use PHPUnit\Framework\TestCase;

class UserTest extends TestCase {
  public function testAdd() {
    require_once('../index.php');
    $this->assertEquals(5, add(2, 3));
    $this->assertEquals(10, add(5, 5));
    $this->assertEquals(-1, add(0, -1));
    $this->assertEquals(0, add(-5, 5));
  }
}
?>