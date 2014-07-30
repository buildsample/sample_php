<?php
require_once('calculator.php'); //our calculator class which we will creater later.
class CalculatorTest extends PHPUnit_Framework_TestCase{
  
  //test if the add() method in our calculator class
  //actually returns the sum that
  //were expecting
  public function testAdd(){
      $calc = new Calculator();
      $sum = $calc->add(array(2,3,4,5));
      $this->assertEquals(14, $sum); //check if 2+3+4+5 is equal to 14
  }

  //test if the subtract() method in our calculator class
  //actually returns the difference that
  //were expecting
  public function testSubtract(){
      $calc = new Calculator();
      $difference = $calc->subtract(5,2);
      $this->assertEquals(4, $difference); //check if 5 - 2 is equal to 3
  }

  //test if the multiply() method in our calculator class
  //actually returns the product that
  //were expecting   
  public function testMultiply(){
      $calc = new Calculator();
      $product = $calc->multiply(array(1,3,5,6));
      $this->assertEquals(90, $product); //check if 1*3*5*6 is equal to 90
  }

  //test if the divide() method in our calculator class
  //actually returns the quotient that
  //were expecting   
  public function testDivide(){
      $calc = new Calculator();
      $quotient = $calc->divide(10,2);
      $this->assertEquals(5, $quotient); //check if 10/2 is equal to 5
  }
}
?>
