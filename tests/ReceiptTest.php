<?php
  namespace TDD\Test;

  require dirname(dirname(__FILE__)) . DIRECTORY_SEPARATOR . 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php';

  use PHPUnit\Framework\TestCase;
  use TDD\Receipt;

  class ReceiptTest extends TestCase {

    public $receipt;

    public function setUp() {
      $this->receipt = new Receipt();
    }

    public function tearDown() {
      unset($this->receipt);
    }

    /**
     * @dataProvider provideTotal
     */
    public function testTotal($input, $expected) {
      $output = $this->receipt->total($input);      
      $this->assertEquals(
        $expected,
        $output,
        "Wanneer ik de getallen optel moet er het $expected uitkomen"
      );
    }

    public function provideTotal() {
      return [
        [[56, 128, 89, 24, 133, 233, 212, 23], 898],
        [[56, 128, 89, 24, 133, 233, 212, 22], 897],
        [[57, 128, 89, 24, 133, 233, 212, 23], 899],
        [[56, 130, 89, 24, 133, 233, 212, 25], 902],
      ];
    }


    /**
     * @dataProvider provideProduct
     */
    public function testProduct($input, $expected, $text) {
      $output = $this->receipt->product($input);      
      $this->assertEquals(
        $expected,
        $output,
        "Wanneer ik de getallen vermenigvuldig moet er $expected uitkomen bij de $text"
      );
    }

    public function provideProduct() {
      return [
        'ints_totaal_24' => [[2,3,4], 24, "Eerste test"],
        [[6,3], 18,"Tweede test"],
        [[9,3], 27, "Derde test"],
        [[10,3], 30, "Vierde test"],
        [[15,3], 45, "Vijfde test"],
        [[10,10], 100, "Zesde test"],
      ];
    }

  }

?>