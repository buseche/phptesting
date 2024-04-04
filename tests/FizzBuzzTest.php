<?php

namespace App\Tests;

use App\FizzBuzz;
use PHPUnit\Framework\Attributes\TestWith;
use PHPUnit\Framework\TestCase;

class FizzBuzzTest extends TestCase
{
    #[TestWith([1, 1])]
    #[TestWith([3, "Fizz"])]
    #[TestWith([5, "Buzz"])]
    #[TestWith([15, "FizzBuzz"])]
    public function testFizzBuzz($numeroATestear, $resultadoEsperado)
    {
        $fizzBuzz = new FizzBuzz();

        $resultado = $fizzBuzz->diNumero($numeroATestear);

        $this->assertEquals($resultadoEsperado, $resultado);
    }
}