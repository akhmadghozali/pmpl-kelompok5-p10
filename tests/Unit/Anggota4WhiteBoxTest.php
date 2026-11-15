<?php

namespace Tests\Unit;

use App\Support\ShopRules;
use InvalidArgumentException;
use PHPUnit\Framework\TestCase;

class Anggota4WhiteBoxTest extends TestCase
{
    public function test_anggota_4_white_box(): void
    {
        $this->expectException(InvalidArgumentException::class);

        ShopRules::discount(-1, false);
    }
}
