<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class TesteUltimaLetraNome extends TestCase
{

    public function TestarUltimaLetra(): void
    {
        $this->assertStringEndsWith('l','Gabriel');
    }
}
