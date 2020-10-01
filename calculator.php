<?php

/**
 * Class Calculator
 **/
class Calculator
{
    /**
     *
     * @param [type] $numbers_to_add
     * @return void
     */
    public function add($numbers_to_add)
    {
        $sum = 0;
        foreach ($numbers_to_add as $num) {
            $sum = $num + $sum;
        }
        return $sum;
    }

    /**
     *
     * @param [type] $x
     * @param [type] $y
     * @return void
     */
    public function subtract($x, $y)
    {
        return $x - $y;
    }

    /**
     *
     * @param [type] $numbers_to_multiply
     * @return void
     */
    public function multiply($numbers_to_multiply)
    {
        $product = 1;
        foreach ($numbers_to_multiply as $num) {
            $product = $num * $product;
        }
        return $product;
    }

    /**
     *
     * @param [type] $x
     * @param [type] $y
     * @return void
     */
    public function divide($x, $y)
    {
        return $x / $y;
    }
}
