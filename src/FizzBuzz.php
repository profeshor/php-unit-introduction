<?php

namespace App;

class FizzBuzz {
    
    private $counter = 0 ;

    public function getCounter() : int{
        return $this->counter;
    }
    public function outputNumber (int $num) : string {
        $this->counter = $this->counter + 1;

        if ($num % 3 === 0 && $num % 5 === 0) {
            return "FizzBuzz";
        } elseif ($num % 3 === 0) {
            return "Fizz";
        } elseif ($num % 5 === 0) {
            return "Buzz";
        }
        return "" . $num;
    }
}