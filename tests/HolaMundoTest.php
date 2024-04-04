<?php

namespace App\Tests;

use App\HolaMundo;
use PHPUnit\Framework\TestCase;

class HolaMundoTest extends TestCase
{
    public function testDiceHolaMundoCuandoSaluda()
    {
        $holaMundo = new HolaMundo();
        $this->assertEquals("Hola Mundo", $holaMundo->saludo());
    }
}