<?php
// use PHPUnit\Framework\TestCase;
// //tests
// class UserTest extends TestCase
// {
//     private $conn;
//     private $user;

//     protected function setUp(): void
//     {
//         $servername = "terraform-20230419082439879800000003.c58l01rn1yea.us-east-2.rds.amazonaws.com";
//         $username = "terraform";
//         $password = "mysql123";
//         $dbname = "testdb";
//         $this->conn = new mysqli($servername, $username, $password, $dbname);
//         if ($this->conn->connect_error) {
//             die("Connection failed: " . $this->conn->connect_error);
//         }
//         $this->user = new User($this->conn);
//     }

//     protected function tearDown(): void
//     {
//         $this->conn->close();
//     }

//     public function testInsertUser()
//     {
//         $name = "John";
//         $email = "john@example.com";
//         $result = $this->user->insertUser($name, $email);
//         $this->assertTrue($result);
//         $sql = "SELECT * FROM users WHERE name='$name' AND email='$email'";
//         $result = $this->conn->query($sql);
//         $this->assertEquals(1, $result->num_rows);
//     }
// }

// class User {
//     private $conn;

//     public function __construct($conn) {
//         $this->conn = $conn;
//     }

//     public function insertUser($name, $email) {
//         $sql = "INSERT INTO users (name, email) VALUES ('$name', '$email')";
//         if ($this->conn->query($sql) === TRUE) {
//             return true;
//         } else {
//             return false;
//         }
//     }
// }
use PHPUnit\Framework\TestCase;

class AdditionTest extends TestCase
{
    public function testAddition()
    {
        require_once('addition.php');

        $this->assertEquals(4, add(2, 2));
        $this->assertEquals(10, add(5, 5));
        $this->assertEquals(0, add(-5, 5));
    }
}
?>