<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class TestePar extends TestCase
{
    public function testarNumPar(): void
    {
        $a = 4;
        $resto = $a%2;
        $this->assertEquals(0,$resto);

    }
}