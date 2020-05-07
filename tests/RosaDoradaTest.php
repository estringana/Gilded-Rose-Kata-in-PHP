<?php

declare(strict_types=1);

use App\RosaDorada;
use PHPUnit\Framework\TestCase;

class RosaDoradaTest extends TestCase
{
    public function testLaClasePuedeSerInstanciada(): void
    {
        $rosaDorada = new RosaDorada('un nombre', 123, 5);

        $this->assertInstanceOf(RosaDorada::class, $rosaDorada);
    }
}
