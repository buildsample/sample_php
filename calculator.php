<?php
class Calculator{
  
  public function add(array $numbers_to_add): int
  {
      $sum = 0;
      foreach($numbers_to_add as $num){
          $sum = $num + $sum;
      }
      return $sum;
  }

  public function subtract(int $x, int $y): int
  {
      return $x - $y;
  }

  public function multiply(array $numbers_to_multiply): int
  {
      $product = 1;
      foreach($numbers_to_multiply as $num){
          $product = $num * $product;
      }
      return $product;
  }

  public function divide(int $x, int $y) : int|float
  {
      return $x / $y;
  }

}
?>
