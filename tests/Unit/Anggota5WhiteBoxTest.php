<?php

namespace Tests\Unit;

use App\Support\ShopRules;
use PHPUnit\Framework\TestCase;

class Anggota5WhiteBoxTest extends TestCase
{
    public function test_anggota_5_white_box(): void
    {
        // Kasus: subtotal keranjang; Input: 2 kopi + 1 teh
       $items = ['kopi' => 2, 'teh' => 1];
        $actual = ShopRules::subtotal($items);
        $this->assertSame(65000, $actual);
    }
}
