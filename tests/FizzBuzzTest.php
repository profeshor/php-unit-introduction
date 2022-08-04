<?php

namespace App\Tests;
use PHPUnit\Framework\TestCase;
use App\FizzBuzz;

class FizzBuzzTest extends TestCase {

    public function useCase(): array {
        return [
            [3, "Fizz"],
            [5, "Buzz"],
            [15, "FizzBuzz"],
            [11, "11"],
            [12, "Fizz"]
        ];
    }
    /**
     * @dataProvider useCase
     */
    public function testUseCase($testingNumber, $requiredResult) : void {
        $fizzBuzz = new FizzBuzz();
        $result = $fizzBuzz->outputNumber($testingNumber);
        $this->assertEquals($requiredResult, $result);
    }

    /** @test */
    public function counterShoudBeZero() : void {
        $fizzBuzz = new FizzBuzz();
        $result = $fizzBuzz->getCounter();
        $this->assertEquals(0, $result);
    }

    /** @test */
    public function counterShoudBeTwo() : void {
        $fizzBuzz = new FizzBuzz();
        $fizzBuzz->outputNumber(1);
        $fizzBuzz->outputNumber(2);
        $result = $fizzBuzz->getCounter();
        $this->assertEquals(2, $result);
    }
}