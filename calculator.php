<?php
class Calculator{

  public function add($numbers_to_add){
     if(is_array($numbers_to_add)) {
         return array_sum($numbers_to_add);
     }

     throw  new UnexpectedValueException();
  }

  public function subtract($x, $y){
      return $x - $y;
  }

  public function multiply($numbers_to_multiply){
      $product = 1;
      foreach($numbers_to_multiply as $num){
          $product = $num * $product;
      }
      return $product;
  }

  public function divide($x, $y){
      return $x / $y;
  }

}