<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class TesteNumeroMaior extends TestCase
{
    public function TestarMaior(): void
    {   
        $n1 = 5;
        $n2 = 3;
        $this->assertGreaterThan($n1,$n2);
    }
}