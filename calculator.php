<?php
class Calculator{
  
  public function add($numbers_to_add){
      $sum = 0;
      foreach($numbers_to_add as $num){
          $sum = $num + $sum;
      }
      return $sum;
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
?>
